<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $router->generate('home') ?>">JDS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $router->generate('home') ?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $router->generate('game-index') ?>">Jeux</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $router->generate('user-index') ?>">Utilisateurs</a>
                </li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['user'])): ?>
                        <a class="nav-link" href="<?= $router->generate('logout') ?>">Déconnexion</a>
                    <?php else: ?>
                        <a class="nav-link" href="<?= $router->generate('login') ?>">Connexion</a>
                    <?php endif ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
