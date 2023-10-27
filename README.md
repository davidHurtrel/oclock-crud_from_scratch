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
    - Entity/
        - CoreEntity.php
    - Util/
        - Database.php
- templates/

## INSTALLATION DES DÉPENDANCES

### ROUTER

```SH
composer require altorouter/altorouter
```

### DISPATCHER

```SH
composer require benoclock/alto-dispatcher
```

### VAR-DUMPER

```SH
composer require symfony/var-dumper
```

## MISE EN PLACE DES FICHIERS SPÉCIFIQUES À L'APPLICATION

### Controllers

- src/Controller/CoreController.php
- src/Controller/GameController.php
- src/Controller/HomeController.php
- src/Controller/UserController.php

### Entities

- src/Entity/Entity.php
- src/Entity/Game.php
- src/Entity/User.php

### Templates

- templates/game/form.php
- templates/game/index.php
- templates/game/show.php
- templates/home/form.php
- templates/security/login.php
- templates/user/form.php
- templates/user/index.php
- templates/user/show.php
