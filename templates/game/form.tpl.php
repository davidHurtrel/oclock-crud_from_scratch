<div class="container">
    <div class="row py-3">
        <div class="col-12">
            <h1 class="float-start">Créer un jeu</h1>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-12">
            <form action="" method="POST">
                <div class="row mb-3">
                    <div class="col-3 offset-2">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" name="name" placeholder="Ex.: Smallword" class="form-control" required>
                    </div>
                    <div class="col-3">
                        <label for="img" class="form-label">Image</label>
                        <input type="text" name="img" placeholder="Ex.: https://site.com/image.png" class="form-control" required>
                    </div>
                    <div class="col-2">
                        <label for="price" class="form-label">Prix (en €)</label>
                        <input type="number" name="price" placeholder="Ex.: 12,34" class="form-control" min="0" step="0.01" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-8 offset-2">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
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
