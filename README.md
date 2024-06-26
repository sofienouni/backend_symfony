# Backend Symfony pour le Projet de Jeu de Cartes

Ce projet backend Symfony accompagne le projet de jeu de cartes développé avec Symfony pour le backend et React pour le frontend. Il permet de gérer la logique métier et l'accès aux données du jeu de cartes.

## Technologies Utilisées

- Symfony 6.4
- PHP 8.1
- MySQL
- 
## Installation

Suivez ces étapes pour installer et configurer le projet localement :

1. **Clonez ce dépôt sur votre machine locale :**

   ```bash
   git clone https://github.com/votre-utilisateur/votre-depot.git
   cd mon-projet-jeu-de-cartes/backend
   
## Installez les dépendances nécessaires avec Composer :

composer install
Configuration de la Base de Données :

## Assurez-vous d'avoir configuré votre base de données dans le fichier .env et de l'avoir créée si nécessaire.
Exécutez les migrations pour créer la structure de la base de données :


php bin/console doctrine:migrations:migrate
Lancez le serveur Symfony :


symfony serve
Le serveur sera accessible à l'adresse http://localhost:8000.
