<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Déplace les documents des candidats hors du dossier public.
 * À lancer une fois au déploiement ; sans effet si tout est déjà déplacé.
 */
#[AsCommand(name: 'app:storage:migrate', description: 'Déplace public/media, public/uploads/contrats et public/uploads/livrets vers le stockage privé')]
class MigrateStorageCommand extends Command
{
    public function __construct(
        #[Autowire('%kernel.project_dir%')] private string $projectDir,
        #[Autowire('%dir_storage%')] private string $dirStorage,
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $fs = new Filesystem();

        $sources = [
            'public/media' => 'media',
            'public/uploads/contrats' => 'contrats',
            'public/uploads/livrets' => 'livrets',
        ];

        foreach ($sources as $source => $cible) {
            $depart = $this->projectDir . '/' . $source;
            $arrivee = $this->dirStorage . $cible;
            if (!is_dir($depart)) {
                $io->text($source . ' : rien à déplacer.');
                continue;
            }

            $fs->mkdir($arrivee);
            $deplaces = 0;
            foreach (scandir($depart) ?: [] as $nom) {
                if ($nom === '.' || $nom === '..') {
                    continue;
                }
                $origine = $depart . '/' . $nom;
                $destination = $arrivee . '/' . $nom;
                if (is_dir($origine) && is_dir($destination)) {
                    // Dossier présent des deux côtés : on complète sans rien écraser.
                    $fs->mirror($origine, $destination, null, ['override' => false]);
                    $fs->remove($origine);
                } elseif (!file_exists($destination)) {
                    $fs->rename($origine, $destination);
                } else {
                    $io->warning($source . '/' . $nom . ' existe déjà dans le stockage : laissé en place.');
                    continue;
                }
                ++$deplaces;
            }
            $io->text(sprintf('%s : %d élément(s) déplacé(s).', $source, $deplaces));
        }

        $io->success('Stockage privé à jour.');

        return Command::SUCCESS;
    }
}
