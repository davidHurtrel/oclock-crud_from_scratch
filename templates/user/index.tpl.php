<div class="container-fluid bg-light text-center">
    <div class="row py-3">
        <div class="col-12">
            <h1>Liste des jeux</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row py-3">
        <div class="col-12">
            <table class="table text-center align-middle">
                <thead>
                    <th>N°</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user->getId() ?></td>
                            <td><?= $user->getEmail() ?></td>
                            <td><?= $user->getRole() ?></td>
                            <td>
                                <a href="#"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="text-danger"><i class="bi bi-trash"></i></a>    
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-12 text-end">
            <a href="<?= $router->generate('user-create') ?>" class="btn btn-sm btn-primary">Nouveau</a>
        </div>
    </div>
</div>
