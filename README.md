
# DevProfile

## 📌 Présentation

DevProfile est une application web développée avec Laravel qui permet à chaque utilisateur authentifié de créer un profil de développeur, de gérer ses projets et compétences, et de générer un CV au format PDF.

## ⚙️ Technologies utilisées

- Laravel 11
- Laravel Breeze (authentification)
- MySQL
- Tailwind CSS
- DomPDF (génération PDF)

## 🚀 Installation du projet

1. Cloner le dépôt GitHub :
   ```bash
   git clone https://github.com/Norhane-R18/DevProfile_laravel
   cd devprofile
   ```

2. Installer les dépendances PHP :
   ```bash
   composer install
   ```

3. Installer les dépendances front-end :
   ```bash
   npm install
   npm run dev
   ```

4. Copier le fichier `.env` et configurer la base de données :
   ```bash
   cp .env.example .env
   ```

5. Générer la clé de l’application :
   ```bash
   php artisan key:generate
   ```

6. Lancer les migrations :
   ```bash
   php artisan migrate
   ```

7. Démarrer le serveur :
   ```bash
   php artisan serve
   ```

## 👤 Fonctionnalités principales

- Inscription et connexion sécurisées
- Modification du profil utilisateur
- Ajout, édition, suppression de projets
- Ajout et suppression de compétences
- Génération automatique d’un CV PDF
- Profil public accessible via URL personnalisée

## 📁 Structure MVC

Le projet suit l'architecture MVC de Laravel :
- **Modèles** : User, Project, Skill
- **Contrôleurs** : ProfileController, ProjectController, SkillController, PDFController
- **Vues** : Blade templates dans `resources/views`



## 📄 Licence

Ce projet est réalisé dans le cadre du module **Développement Web Avancé - ILCS 2024/2025**.
