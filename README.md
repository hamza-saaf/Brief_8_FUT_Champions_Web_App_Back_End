# Brief_8_FUT_Champions_Web_App_Front_End_-_Back_End



Contexte du projet (Front_End & Back_End):
L'application permettra aux utilisateurs de construire leur équipe FUT (Ultimate Team) en ajoutant, positionnant et modifiant les joueurs tout en respectant les formations tactiques comme 4-4-2 ou 4-3-3. L'accent sera mis sur une expérience interactive avec des formulaires dynamiques, la gestion des données via localStorage, et une interface interactive
Nous visons à développer la partie backend de la plateforme FUT Champions Ultimate Team en utilisant PHP procédural et MySQLi. L’accent sera mis sur la création d’un gestionnaire de contenu robuste pour faciliter la gestion des joueurs, des équipes, des nationalités, et d’autres entités liées. Une fonctionnalité d'internationalisation sera intégrée afin de permettre une utilisation multilingue de la plateforme.


Front_End:

Fonctionnalités Clés

​

Intégration UI et Ajout Dynamique des joueurs

Formulaire permettant l'ajout de joueurs avec des champs pour le nom, la position, la note, les statistiques et d'autres détails pertinents
Application des positions adaptées à chaque joueur selon la formation choisie (ex. 4-3-3 ou 4-4-2)
​

Positionnement des Joueurs Selon la Formation Tactique Sélectionnée

Respect des positions selon la formation tactique choisie
Formation 4-3-3 : Comprend 1 GK, 2 CB (Défenseurs centraux), 1 LB (Latéral gauche), 1 RB (Latéral droit), 3 CM (Milieux centraux), 1 LW (Ailier gauche), 1 RW (Ailier droit), et 1 ST (Attaquant central)
Formation 4-4-2 : Comprend 1 GK, 2 CB, 1 LB, 1 RB, 2 CM (Milieux centraux), 1 RM (Milieu droit), 1 LM (Milieu gauche) et 2 ST (Attaquants)
Adaptation automatique de la position des joueurs en fonction de la formation choisie
​

Gestion des cartes de joueurs

Ajout, modification et suppression des cartes de joueurs via une interface UI
Limitation stricte à 11 joueurs dans la formation principale ; les joueurs restants sont réservés pour les changements
​

Formulaires Dynamiques pour la Gestion des Joueurs

Permettre l'ajout ou la suppression de joueurs tout en respectant les règles des formations tactiques (maximum 11 joueurs pour la formation principale, les autres étant réservistes)
​

Calcul de la Chimie de l'Équipe (Bonus)

Calcul automatique du score de chimie basé sur des règles définies telles que les liens entre les joueurs de même club, même championnat, ou même nationalité
Affichage du score de chimie total de la formation
Exemple de calcul:

Un joueur positionné correctement reçoit 10 points

S'il a 1 lien fort de club, il gagne 3 points supplémentaires

S'il partage la même ligue avec deux joueurs adjacents, il gagne 4 points (2x2)

S'il partage la même nationalité avec un joueur, il gagne 1 point

Chimie_du_joueur = 10 (Position_Correcte) + 3 (Lien_Club) + 4 (Lien_Ligue) + 1 (Lien_Nationalité) = 18 points

Pour une équipe de 11 joueurs, tu fais la somme de la chimie de chaque joueur et tu obtiens le score total de chimie de l'équipe

Le score total est normalisé sur une échelle de 0 à 100

​

Validation des Champs des Formulaires

Validation de tous les champs de saisie pour les joueurs, tels que le nom, la position et la note, pour garantir la cohérence des données.
Application de validations natives pour garantir l'exactitude des informations saisies.
​

LocalStorage des Formations et Joueurs (Bonus)

Sauvegarde de la formation et des données des joueurs pour une utilisation future sans perdre les configurations choisies.
Chargement automatique des données enregistrées à l'ouverture de l'application.
​

Drag & Drop pour le Changement des Joueurs (Bonus)

Permettre de réorganiser les joueurs en utilisant une fonctionnalité de draggable pour un remplacement.
​

Changement de Formation Dynamique (Bonus)

Mise à jour de la disposition et des positions des joueurs lors du changement de la formation tactique sélectionnée.
​

Responsive Design

L'interface de l'application s'adapte aux différentes tailles d'écran (laptop, tablette, mobile)
Ajustement dynamique du positionnement et de l'affichage des joueurs pour garantir une expérience utilisateur optimale quel que soit l'appareil utilisé
​

Technologies Requises

HTML
CSS natif ou framework CSS (ex : Tailwind CSS, Bootstrap)
JS Vanilla (DOM natif)
​

User Stories

​

Création d'une équipe de 11 joueurs

En tant qu'utilisateur, je souhaite pouvoir ajouter des joueurs à ma formation via un formulaire dynamique, avec un maximum de 11 joueurs sélectionnés pour garantir une structure d'équipe conforme
Critères d'acceptation

Je peux ajouter un joueur à partir d'un formulaire dynamique comprenant les champs nécessaires (nom, position, statistiques)
Je peux modifier ou supprimer les joueurs ajoutés
Le formulaire vérifie la validité des données saisies
​

Adaptation de la formation choisie (ex : 4-3-3 ou 4-4-2)

En tant qu'utilisateur, je souhaite pouvoir changer la formation de mon équipe et voir les positions des joueurs ajustées en conséquence
Critères d'acceptation

Je peux choisir entre les formations prédéfinies (e.g., 4-4-2, 4-3-3)
Le positionnement des joueurs est automatiquement mis à jour pour s'adapter à la formation choisie
Seuls les postes valides pour la formation sont disponibles pour chaque joueur
​

Calcul du score de Chimistry

En tant qu'utilisateur, je souhaite voir le score de "chimie" de mon équipe calculé et affiché en fonction des relations entre les joueurs pour optimiser la composition de mon équipe
Critères d'acceptation

Le score de chimie est mis à jour dynamiquement selon les joueurs sélectionnés et leur compatibilité
Des liaisons fortes/faibles sont mises en évidence visuellement
​

Sauvegarde et Récupération des Données

En tant qu'utilisateur, je souhaite que mes données de formation et d'équipe soient sauvegardées automatiquement pour pouvoir les récupérer plus tard
Critères d'acceptation

Les données sont stockées localement
La récupération des données se fait lors du chargement de l'application
​

Formulaire Dynamique pour les Joueurs

En tant qu'utilisateur, je souhaite pouvoir ajouter dynamiquement de nouveaux joueurs au sein de l'interface
Critères d'acceptation

Un formulaire dynamique permet de créer de nouveaux joueurs
L'interface ajuste les positions et le nombre de joueurs
Modalités pédagogiques
Travail: individuel
Durée de travail: 5 jours
Date de lancement du brief: 25/11/2024 à 09:00 am
Date limite de soumission: 29/11/2024 avant 05:30 pm
Modalités d'évaluation
Une durée de 35 min organisée comme suit:
- Présenter une défense publique de son travail devant les jurys.
- Chaque apprenants n'aura que ~10 minutes pour Démontrer le contenu et la fonctionnalité du site Web (Démonstration, explication du code source).
- Code Review \ Questions culture Web (10 minutes)
- Mise en situation (15 minutes)

Livrables
+ La gestion des tâches sur un Scrum Board avec tous les User  stories.
+ Lien vers le repository GitHub contenant :
   - Le code source du site web avec tous les fichiers nécessaires.
   - README
+ Un lien vers le site web hébergé
+ Lien de la présentation

Critères de performance
- Interface utilisateur intuitive et réactive.
- Validations des champs efficaces pour garantir l'intégrité des données.
- Changements dynamiques de la formation sans rafraîchissement de page.
- Calcul précis et rapide de la chimie de l'équipe.
- Fonction de sauvegarde fiable utilisant le localStorage.


---------------------------------------------------------------
---------------------------------------------------------------
Back_End:


Contexte du projet en Back_End
Nous visons à développer la partie backend de la plateforme FUT Champions Ultimate Team en utilisant PHP procédural et MySQLi. L’accent sera mis sur la création d’un gestionnaire de contenu robuste pour faciliter la gestion des joueurs, des équipes, des nationalités, et d’autres entités liées. Une fonctionnalité d'internationalisation sera intégrée afin de permettre une utilisation multilingue de la plateforme.

​

Fonctionnalités Backend Attendues :

​

Analyse et Optimisation des Données:

​

Analyse approfondie du fichier JSON fourni pour concevoir une structure de base de données optimale.
Éviter la redondance des attributs et des données en appliquant les principes de normalisation des bases de données.
Création de schémas relationnels efficaces pour gérer les entités telles que joueurs, équipes, nationalités, et leurs relations.
​

Gestion des Entités:

Implémentation d’une interface pour ajouter, modifier, supprimer et lister les entités.
Gestion des relations entre les entités (par exemple, associer un joueur à une équipe et à une nationalité).
​

Tableau de Bord et Statistiques:

​

Conception d’un tableau de bord dynamique permettant de visualiser les statistiques clés (nombre de joueurs, répartition par nationalité, performances des équipes, etc.).
Intégration de graphiques et diagrammes via des bibliothèques comme Chart.js pour rendre les statistiques interactives.
​

Internationalisation i18n:

​

Mise en place d’un système d’internationalisation (i18n) pour permettre le support multilingue.
Gestion des fichiers de langues séparés pour chaque langue supportée (par exemple, fr.php, en.php, es.php).
Possibilité de changer la langue de l’interface via une option dans le tableau de bord.
​

Documentation des Scripts:

​

Documentation claire et concise de chaque script PHP.

Inclusion de commentaires inline pour expliquer la logique du code.

Ajout de fichiers README pour détailler les instructions de configuration et d’utilisation.

​

Bonus:

​

Utilisation d’AJAX pour des opérations asynchrones (par exemple, chargement dynamique de contenu, validation sans rechargement de page).
Intégration de modals pour créer une expérience utilisateur fluide (par exemple, formulaires de gestion dans des fenêtres modales).
Visualisation des statistiques avec des graphiques interactifs.
​

User Stories:

​

US01 : Gestion des Joueurs
En tant qu’administrateur, je veux pouvoir ajouter, modifier, supprimer et lister des joueurs afin de maintenir une base de données à jour.
US02 : Gestion des Équipes
En tant qu’administrateur, je veux pouvoir créer et gérer des équipes pour organiser les compétitions efficacement.
US03 : Internationalisation (Bonus)
En tant qu’utilisateur, je veux avoir la possibilité de changer la langue de l’interface afin d’utiliser la plateforme dans ma langue préférée.
US04 : Statistiques Dynamiques
En tant qu’administrateur, je veux visualiser des statistiques clés sur un tableau de bord afin de mieux comprendre l’utilisation de la plateforme.
US05 : Fluidité de Navigation (Bonus)
En tant qu’utilisateur, je veux pouvoir effectuer des actions sans rechargement de page grâce à AJAX afin d’améliorer mon expérience utilisateur.
Modalités pédagogiques
Travail: Individuel

Durée de travail: 7 jours

Date de lancement du brief : 12/12/2024 à 9:00

Date limite de soumission: 20/12/2024 avant midi

Modalités d'évaluation
Vous présenterez votre travail pendant 10 minutes : 
- 5 minutes : Démonstration du conception. 
- 10 minutes : Explication du code.
Challenge dans la classe durée de 1h + 15min de QCM.

Livrables
+ Lien de la planification des tâches avec Jira.
+ Lien vers le repository GitHub contenant :
+ README.
+ Scripts PHP fonctionnels pour toutes les fonctionnalités backend.
+ script sql.
+ ERD et UML (diagramme de cas d'utilisation).
+ Compte rendu du livrable.
+ Lien d'hébergement (facultatif)

Critères de performance
- Temps de Réponse :
Mesurer le temps de réponse global de l'application, en veillant à ce qu'il reste dans des limites acceptables pour les utilisateurs.
- Utilisation de la Mémoire :
Surveiller la consommation de mémoire de l'application pour garantir une utilisation efficace des ressources serveur.
Optimisation des Requêtes SQL :
- Examiner et optimiser les requêtes SQL pour minimiser le temps d'exécution et éviter les goulots d'étranglement dans la base de données.

* Sécurité pour PHP Procédural avec MySQLi :
- Prévention des Injections SQL :
Utiliser des requêtes préparées ou des déclarations préparées pour empêcher les attaques par injection SQL.

- Validation et Sanitization des Données :
Valider et assainir toutes les données provenant des utilisateurs pour éviter les attaques XSS et autres vulnérabilités

- Protection contre XSS :
Utiliser des fonctions de filtrage pour empêcher l'injection de scripts malveillants dans les pages web.

* Bonnes Pratiques pour PHP Procédural avec MySQLi :
- DRY (Don't Repeat Yourself) :
Éviter la duplication de code en regroupant les fonctionnalités communes dans des fonctions ou des fichiers inclus.

- Modularité :
Diviser le code en modules logiques pour faciliter la maintenance et la réutilisation.

-Nommage Conventions :
Suivre des conventions de nomenclature claires et cohérentes pour améliorer la lisibilité du code.

- Commentaires :
Documenter le code avec des commentaires clairs et informatifs pour faciliter la compréhension pour les développeurs ultérieurs.

- Gestion des Erreurs :
Implémenter un système de gestion des erreurs robuste pour capturer et traiter les erreurs de manière appropriée.

* Connexion à une Base de Données avec PHP Procédural :
- Sécurité des Identifiants de Connexion :
Stocker les informations d'identification de connexion de manière sécurisée, en évitant de les inclure directement dans le code source.

- Gestion des Connexions :
Utiliser des fonctions pour ouvrir et fermer les connexions à la base de données de manière appropriée, évitant les connexions persistantes inutiles.

- Paramètres de Connexion Sécurisés :
Utiliser des méthodes sécurisées pour passer les paramètres de connexion, tels que des requêtes préparées, pour prévenir les attaques par injection.

- Fermeture Correcte des Connexions :
S'assurer que les connexions à la base de données sont correctement fermées après leur utilisation pour éviter des problèmes potentiels de sécurité et de performance.

- Contrôle des Erreurs de Connexion :
Mettre en place des mécanismes de gestion des erreurs pour gérer les éventuelles erreurs de connexion à la base de données de manière appropriée.
