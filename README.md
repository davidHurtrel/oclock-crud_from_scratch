# CRUD FROM SCRATCH

## MISE EN PLACE DE LA BASE DE DONNÉES

Importer sur adminer ou phpMyAdmin le ou le fichier .sql dispo dans le dossier docs/. Si besoin, créer une nouvelle BDD, et créer un user ayant les droits sur cette base.

## MISE EN PLACE DE L'ARCHITECTURE MVC

Créer les éléments suivants :
- config/
    - config.ini
    - config.ini.dist
    - routes.php
- public/
    - css/
        - style.css
    - img/
    - js/
        - script.js
    - index.php
- src/
    - Controller/
        - CoreController.php
        - ErrorController.php
    - Entity/
        - CoreEntity.php
    - Util/
        - Database.php
- templates/

## INSTALLATION DES DÉPENDANCES

### router

```SH
composer require altorouter/altorouter
```

### dispatcher

```SH
composer require benoclock/alto-dispatcher
```

### var-dumper

```SH
composer require symfony/var-dumper
```

## MISE EN PLACE DES FICHIERS SPÉCIFIQUES À L'APPLICATION

### Controllers

- src/Controller/CoreController.php
- src/Controller/GameController.php
- src/Controller/HomeController.php
- src/Controller/SecurityController.php
- src/Controller/UserController.php

### Entities

- src/Entity/Entity.php
- src/Entity/Game.php
- src/Entity/User.php

### Templates

- templates/game/form.tpl.php
- templates/game/index.tpl.php
- templates/game/show.tpl.php
- templates/home/form.tpl.php
- templates/security/login.tpl.php
- templates/user/form.tpl.php
- templates/user/index.tpl.php
- templates/user/show.tpl.php

## CONFIGURATION DE LA BASE DE DONNÉES

- src/Utils/Database.php
- config/config.ini :
```INI
;DATABASE
DB_HOST=''
DB_NAME=''
DB_USER=''
DB_PASS=''
```

## MISE EN PLACE DES ROUTES

Dans config/routes.php :
```PHP
$router->map(
    'GET',
    '/',
    [
        'method' => 'index',
        'controller' => HomeController::class
    ],
    'home'
);
```

## MISE EN PLACE DU CODE GÉNÉRIQUE

- src/Controller/CoreController.php
- src/Controller/ErrorController.php
- src/Entity/Entity.php
- public/index.php
- templates/_partials/head.tpl.php
- templates/_partials/nav.tpl.php
- templates/layout/footer.tpl.php
- templates/layout/header.tpl.php

## MISE EN PLACE DE LA PAGE D'ACCUEIL

- src/Controller/HomeController.php
- templates/home/index.php
- templates/_partials/nav.tpl.php

## GESTION DES JEUX

### game index

- décommenter la route
- ajouter le lien dans la nav
- mettre en place le Model
- créer la méthode dans le controller
- gérer l'intégration dans le template associé

### game create

- décommenter la route
- ajouter le lien sur la bouton de la liste
- créer la méthode dans le controller
- gérer l'intégration dans le template associé
- gérer l'envoi en POST
- traiter les données récupérées dans le controller
- gérer le save() avec la méthode create() dans le model

### game update

- décommenter la route
- ajouter le lien sur les boutons de la liste
- créer la méthode dans le controller
- implémenter la méthode find($id) dans le model
- mettre à jour le template en préremplissant les champs
- gérer l'envoi en POST
- traiter les données récupérées dans le controller
- gérer le save() avec la méthode update() dans le model

### game delete

- décommenter la route
- ajouter le lien sur les boutons de la liste
- créer la méthode dans le controller
- gérer la méthode delete() dans le model

## AUTHENTIFICATION

### user index

- décommenter la route
- implémenter le controller
- implémenter le model User (attributs, getters, setters)
- implémenter la vue (liste)
- ajouter le lien dans la nav

### user create

- décommenter la route
- implémenter le controller
- implémenter le model User (attributs, getters, setters)
- implémenter la vue (formulaire)
- ajouter le lien dans la liste

## security

- décommenter les routes login et logout
- implémenter le SecurityController
- implémenter la vue (login)
- ajouter le lien dans la nav
