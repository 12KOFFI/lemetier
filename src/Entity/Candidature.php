<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\SessionRecrutement;
use App\Entity\Etablissement;
use App\Entity\Metier;
use App\Entity\User;
use App\Entity\Admis;

#[ORM\Entity()]
// Anti-doublon garanti en base : une pièce d'identité ne sert qu'une fois par session, tous établissements confondus.
#[ORM\UniqueConstraint(name: 'uniq_candidature_session_numpiece', columns: ['session_id', 'numpiece'])]
class Candidature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Etablissement::class, inversedBy: 'candidatures')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Etablissement $etablissement = null;

    #[ORM\ManyToOne(targetEntity: SessionRecrutement::class, inversedBy: 'candidatures')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?SessionRecrutement $session = null;

    #[ORM\ManyToOne(targetEntity: Metier::class, inversedBy: 'candidatures')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Metier $metier = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $numero = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $piece = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $numpiece = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $diplome = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $niveau = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $fphoto = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $fpiece = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $fextrait = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $fniveau = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $fautre = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $ficheEngagement = null;

    // Nouveaux champs pour le filtrage géographique
    #[ORM\Column(type: 'string', length: 50, nullable: false)]
    private string $villeResidence = '';

    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private string $quartierAdresse = '';

    #[ORM\Column(type: 'boolean', nullable: false)]
    private bool $declarationHonneur = false;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $etustatut = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $etucom = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $jury = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $vague = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $entdate = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $entlieu = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note1 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note2 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note3 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note4 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note5 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note6 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note7 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note8 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note9 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note10 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note11 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note12 = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $note13 = null;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private ?bool $selectionnePourVisite = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $entstatut = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $decisionJury = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $entcom = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $visdate = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $vislieu = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $visstatut = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $viscom = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $resultat = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $creation = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $modification = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $user = null;

    // Agent (ENT ou admin) qui a enregistré la candidature pour le candidat.
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?User $saisiePar = null;

    #[ORM\OneToOne(targetEntity: Admis::class, mappedBy: 'candidature')]
    private ?Admis $admis = null;

    public function __construct()
    {
        $this->creation = new \DateTime();
        $this->modification = new \DateTime();
        // Initialisation des nouveaux champs de filtrage géographique
        $this->villeResidence = '';
        $this->quartierAdresse = '';
        $this->declarationHonneur = false;
    }

    // ===== Getters / Setters =====

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtablissement(): ?Etablissement
    {
        return $this->etablissement;
    }

    public function setEtablissement(?Etablissement $etablissement): self
    {
        $this->etablissement = $etablissement;
        return $this;
    }

    public function getSession(): ?SessionRecrutement
    {
        return $this->session;
    }

    public function setSession(?SessionRecrutement $session): self
    {
        $this->session = $session;
        return $this;
    }

    public function getMetier(): ?Metier
    {
        return $this->metier;
    }

    public function setMetier(?Metier $metier): self
    {
        $this->metier = $metier;
        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    public function getPiece(): ?string
    {
        return $this->piece;
    }

    public function setPiece(?string $piece): self
    {
        $this->piece = $piece;
        return $this;
    }

    public function getNumpiece(): ?string
    {
        return $this->numpiece;
    }

    public function setNumpiece(?string $numpiece): self
    {
        $this->numpiece = $numpiece;
        return $this;
    }

    public function getDiplome(): ?string
    {
        return $this->diplome;
    }

    public function setDiplome(?string $diplome): self
    {
        $this->diplome = $diplome;
        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(?string $niveau): self
    {
        $this->niveau = $niveau;
        return $this;
    }

    public function getFphoto(): ?string
    {
        return $this->fphoto;
    }

    public function setFphoto(?string $fphoto): self
    {
        $this->fphoto = $fphoto;
        return $this;
    }

    public function getFpiece(): ?string
    {
        return $this->fpiece;
    }

    public function setFpiece(?string $fpiece): self
    {
        $this->fpiece = $fpiece;
        return $this;
    }

    public function getFextrait(): ?string
    {
        return $this->fextrait;
    }

    public function setFextrait(?string $fextrait): self
    {
        $this->fextrait = $fextrait;
        return $this;
    }

    public function getFniveau(): ?string
    {
        return $this->fniveau;
    }

    public function setFniveau(?string $fniveau): self
    {
        $this->fniveau = $fniveau;
        return $this;
    }

    public function getFautre(): ?string
    {
        return $this->fautre;
    }

    public function setFautre(?string $fautre): self
    {
        $this->fautre = $fautre;
        return $this;
    }

    public function getFicheEngagement(): ?string
    {
        return $this->ficheEngagement;
    }

    public function setFicheEngagement(?string $ficheEngagement): self
    {
        $this->ficheEngagement = $ficheEngagement;
        return $this;
    }

    // ===== Champs géographiques =====

    public function getVilleResidence(): ?string
    {
        return $this->villeResidence;
    }

    // Accepte null : un champ laissé vide doit afficher l'erreur du formulaire, pas une erreur 500.
    public function setVilleResidence(?string $villeResidence): self
    {
        $this->villeResidence = $villeResidence ?? '';
        return $this;
    }

    public function getQuartierAdresse(): ?string
    {
        return $this->quartierAdresse;
    }

    // Accepte null : un champ laissé vide doit afficher l'erreur du formulaire, pas une erreur 500.
    public function setQuartierAdresse(?string $quartierAdresse): self
    {
        $this->quartierAdresse = $quartierAdresse ?? '';
        return $this;
    }

    public function isDeclarationHonneur(): ?bool
    {
        return $this->declarationHonneur;
    }

    public function setDeclarationHonneur(bool $declarationHonneur): self
    {
        $this->declarationHonneur = $declarationHonneur;
        return $this;
    }

    // ===== Statuts / notes =====

    public function getEtustatut(): ?int
    {
        return $this->etustatut;
    }

    public function setEtustatut(?int $etustatut): self
    {
        $this->etustatut = $etustatut;
        return $this;
    }

    public function getEtucom(): ?string
    {
        return $this->etucom;
    }

    public function setEtucom(?string $etucom): self
    {
        $this->etucom = $etucom;
        return $this;
    }

    public function getJury(): ?int
    {
        return $this->jury;
    }

    public function setJury(?int $jury): self
    {
        $this->jury = $jury;
        return $this;
    }

    public function getVague(): ?int
    {
        return $this->vague;
    }

    public function setVague(?int $vague): self
    {
        $this->vague = $vague;
        return $this;
    }

    public function getEntdate(): ?\DateTimeInterface
    {
        return $this->entdate;
    }

    public function setEntdate(?\DateTimeInterface $entdate): self
    {
        $this->entdate = $entdate;
        return $this;
    }

    public function getEntlieu(): ?string
    {
        return $this->entlieu;
    }

    public function setEntlieu(?string $entlieu): self
    {
        $this->entlieu = $entlieu;
        return $this;
    }

    public function getNote1(): ?float { return $this->note1; }
    public function setNote1(?float $note1): self { $this->note1 = $note1; return $this; }

    public function getNote2(): ?float { return $this->note2; }
    public function setNote2(?float $note2): self { $this->note2 = $note2; return $this; }

    public function getNote3(): ?float { return $this->note3; }
    public function setNote3(?float $note3): self { $this->note3 = $note3; return $this; }

    public function getNote4(): ?float { return $this->note4; }
    public function setNote4(?float $note4): self { $this->note4 = $note4; return $this; }

    public function getNote5(): ?float { return $this->note5; }
    public function setNote5(?float $note5): self { $this->note5 = $note5; return $this; }

    public function getNote6(): ?float { return $this->note6; }
    public function setNote6(?float $note6): self { $this->note6 = $note6; return $this; }

    public function getNote7(): ?float { return $this->note7; }
    public function setNote7(?float $note7): self { $this->note7 = $note7; return $this; }

    public function getNote8(): ?float { return $this->note8; }
    public function setNote8(?float $note8): self { $this->note8 = $note8; return $this; }

    public function getNote9(): ?float { return $this->note9; }
    public function setNote9(?float $note9): self { $this->note9 = $note9; return $this; }

    public function getNote10(): ?float { return $this->note10; }
    public function setNote10(?float $note10): self { $this->note10 = $note10; return $this; }

    public function getNote11(): ?float { return $this->note11; }
    public function setNote11(?float $note11): self { $this->note11 = $note11; return $this; }

    public function getNote12(): ?float { return $this->note12; }
    public function setNote12(?float $note12): self { $this->note12 = $note12; return $this; }

    public function getNote13(): ?float { return $this->note13; }
    public function setNote13(?float $note13): self { $this->note13 = $note13; return $this; }

    public function isSelectionnePourVisite(): ?bool
    {
        return $this->selectionnePourVisite;
    }

    public function setSelectionnePourVisite(?bool $selectionnePourVisite): self
    {
        $this->selectionnePourVisite = $selectionnePourVisite;
        return $this;
    }

    public function getEntstatut(): ?int
    {
        return $this->entstatut;
    }

    public function setEntstatut(?int $entstatut): self
    {
        $this->entstatut = $entstatut;
        return $this;
    }

    public function getDecisionJury(): ?int
    {
        return $this->decisionJury;
    }

    public function setDecisionJury(?int $decisionJury): self
    {
        $this->decisionJury = $decisionJury;
        return $this;
    }

    public function getEntcom(): ?string
    {
        return $this->entcom;
    }

    public function setEntcom(?string $entcom): self
    {
        $this->entcom = $entcom;
        return $this;
    }

    public function getVisdate(): ?\DateTimeInterface
    {
        return $this->visdate;
    }

    public function setVisdate(?\DateTimeInterface $visdate): self
    {
        $this->visdate = $visdate;
        return $this;
    }

    public function getVislieu(): ?string
    {
        return $this->vislieu;
    }

    public function setVislieu(?string $vislieu): self
    {
        $this->vislieu = $vislieu;
        return $this;
    }

    public function getVisstatut(): ?int
    {
        return $this->visstatut;
    }

    public function setVisstatut(?int $visstatut): self
    {
        $this->visstatut = $visstatut;
        return $this;
    }

    public function getViscom(): ?string
    {
        return $this->viscom;
    }

    public function setViscom(?string $viscom): self
    {
        $this->viscom = $viscom;
        return $this;
    }

    public function getResultat(): ?int
    {
        return $this->resultat;
    }

    public function setResultat(?int $resultat): self
    {
        $this->resultat = $resultat;
        return $this;
    }

    public function getCreation(): ?\DateTimeInterface
    {
        return $this->creation;
    }

    public function setCreation(?\DateTimeInterface $creation): self
    {
        $this->creation = $creation;
        return $this;
    }

    public function getModification(): ?\DateTimeInterface
    {
        return $this->modification;
    }

    public function setModification(?\DateTimeInterface $modification): self
    {
        $this->modification = $modification;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getAdmis(): ?Admis
    {
        return $this->admis;
    }

    public function setAdmis(?Admis $admis): self
    {
        $this->admis = $admis;
        return $this;
    }

    public function getSaisiePar(): ?User
    {
        return $this->saisiePar;
    }

    public function setSaisiePar(?User $saisiePar): self
    {
        $this->saisiePar = $saisiePar;
        return $this;
    }

    /** Numéro de pièce comparable : majuscules, sans espaces ni séparateurs. */
    public static function normalizeNumPiece(?string $numpiece): ?string
    {
        $normalized = strtoupper(preg_replace('/[^A-Za-z0-9]+/', '', (string) $numpiece) ?? '');

        return $normalized !== '' ? $normalized : null;
    }

    // ===== Cycle de vie Doctrine =====
    // Le lieu de résidence est indicatif : il ne doit jamais rejeter une candidature.

    #[ORM\PreUpdate]
    public function updateModificationDate(): void
    {
        $this->modification = new \DateTime();
    }
}
