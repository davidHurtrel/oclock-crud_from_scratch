<div class="container-fluid bg-light text-center">
    <div class="row py-3">
        <div class="col-12">
            <h1><?= isset($user) ? 'Modifier' : 'Créer' ?> un utilisateur</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row py-3">
        <div class="col-12">
            <form action="" method="POST">
                <div class="row mb-3">
                    <div class="col-4 offset-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" placeholder="Ex.: prenom.nom@domaine.com" class="form-control" value="<?= isset($user) ? $user->getEmail() : null ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4 offset-4">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" name="password" placeholder="••••••••" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4 offset-4">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" class="form-control">
                            <option value="">-- sélectionner --</option>
                            <option value="ROLE_ADMIN">administrateur</option>
                            <option value="ROLE_SUPER_ADMIN">super administrateur</option>
                            <option value="ROLE_USER">utilisateur</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-8 offset-2 text-end">
                        <a href="<?= $router->generate('game-index') ?>" class="btn btn-sm btn-danger me-3">Annuler</a>
                        <input type="submit" value="Valider" class="btn btn-sm btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
