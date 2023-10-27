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