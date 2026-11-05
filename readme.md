# 1Jeune1Metier

Application web basée sur Symfony pour la gestion du prospection d'apprentissage, permettant aux établissements scolaires d'enregistrer les entreprises contactées, de suivre les postes d'apprentissage disponibles par métier et de générer des statistiques.

## Fonctionnalités

- Opérations CRUD pour les enregistrements de prospection (entreprises contactées)
- Gestion des métiers et du nombre de postes disponibles par prospection
- Contrôle d'accès basé sur les rôles (ENT, ADMIN, etc.)
- Tableau de bord avec statistiques et actions rapides
- Graphiques et visualisations avec Chart.js
- Recherche et filtrage
- Gestion sécurisée des formulaires avec champs dynamiques

## Stack Technique

- PHP 8.2+
- Symfony 6.x
- Doctrine ORM
- Templating Twig
- Bootstrap 5
- Chart.js
- MySQL/MariaDB
- Composer
- Webpack Encore (pour les assets)

## Installation

1. Cloner le dépôt :
   ```bash
   git clone <url-du-dépôt>
   cd nom-du-répertoire-du-projet
   ```

2. Installer les dépendances :
   ```bash
   composer install
   npm install
   ```

3. Configurer les variables d'environnement :
   - Copier `.env` vers `.env.local`
   - Configurer l'URL de la base de données et autres secrets

4. Construire les assets :
   ```bash
   npm run build
   # ou pour le développement
   npm run watch
   ```

5. Exécuter les migrations de base de données :
   ```bash
   php bin/console doctrine:migrations:migrate
   ```

6. (Optionnel) Charger les fixtures si disponibles :
   ```bash
   php bin/console doctrine:fixtures:load
   ```

7. Démarrer le serveur de développement :
   ```bash
   symfony server:start
   # ou
   php -S 127.0.0.1:8000 -t public
   ```

## Utilisation

- Accéder à l'application à l'adresse `http://localhost:8000`
- Se connecter avec des identifiants appropriés (rôle ENT ou ADMIN)
- Naviguer vers la section Prospection pour gérer les contacts d'entreprises
- Utiliser le tableau de bord pour visualiser les statistiques

## Configuration

- Les variables d'environnement sont stockées dans `.env.local`
- Configuration du mailer pour les notifications
- Pare-feux de sécurité définis dans `config/packages/security.yaml`
- Routes définies dans `config/routes.yaml`

## Contribution

1. Forker le dépôt
2. Créer une branche de fonctionnalité (`git checkout -b fonctionnalite/amazing-feature`)
3. Commit vos changements (`git commit -m 'Ajout d'une fonctionnalité incroyable'`)
4. Pousser vers la branche (`git push origin fonctionnalite/amazing-feature`)
5. Ouvrir une Pull Request

## Licence

Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.

## Remerciements

- Communauté Symfony
- Contributeurs de Bootstrap
- Créateurs de Chart.js