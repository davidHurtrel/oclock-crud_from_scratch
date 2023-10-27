<div class="container">
    <div class="row py-3">
        <div class="col-12">
            <h1 class="float-start">Liste des jeux</h1>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-12">
            <table class="table text-center align-middle">
                <thead>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php foreach ($games as $game): ?>
                        <tr>
                            <td><?= $game->getId() ?></td>
                            <td class="text-start">
                                <img src="<?= $game->getImg() ?>" alt="image principale du jeu <?= $game->getName() ?>">
                                <?= $game->getName() ?>
                            </td>
                            <td><?= number_format($game->getPrice(), 2, ',', ' ') ?> €</td>
                            <td>
                                <a href="<?= $router->generate('game-update', ['id' => $game->getId()]) ?>"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?= $router->generate('game-delete', ['id' => $game->getId()]) ?>" class="text-danger"><i class="bi bi-trash"></i></a>    
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-12 text-end">
            <a href="<?= $router->generate('game-create') ?>" class="btn btn-sm btn-primary">Nouveau</a>
        </div>
    </div>
</div>
