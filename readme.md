# Mini-projet 

Site internet intégrant des commentaires.

## Fonctionnalités

### Front-end

- Main : Fond d'écran réactif
- Commentaires : cliquer sur la lune pour ouvrir la fenetre d'envoi et de récup' de commentaires
- Audio : intégrer une bande son de fond

### Back-end

- BDD : stockage des commentaires

## Structure des données

Un commentaire sera constitué de :
- Nom : champs de texte de 80 caractères
- Description  : zone de texte

## Etapes du projet

- Configuration de l'environnement de développement : vérifier configuration (xamp et visual studio), mise en place de l'arborescence, du fichier readme.md et du dépôt Git.
- Création de la BDD MySQL ainsi que les tables et les champs
- Création des pages PHP front-end
- Création des pages PHP back-end
- Tests et recette : voir si les fonctionnalités prévues initialement sont présentes, faire des tests pour repérer les possibles bugs, optimisation du code, prise en compte de la sécurité.
- Mise en ligne (si possible)

## Script PHP - Page d'accueil

- 1) Connexion à la base de données
- 2) Requête SELECT de récupération les informations (musiques, articles, voitures, ...)
- 3) Boucler sur le résultat pour afficher chaque information.