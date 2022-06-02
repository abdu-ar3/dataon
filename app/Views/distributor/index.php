<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php foreach ($distributor as $dis) : ?>
                <ul class="list-inline">
                    <li class="list-inline-item"> <b>Name</b> </li>
                    <li class="list-inline-item"> <b>City</b> </li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item"><?= $dis['name']; ?></li>
                    <li class="list-inline-item"><?= $dis['city']; ?></li>
                    <a href="/distributor/edit/<?= $dis['id']; ?>">Edit</a>
                </ul>
                <!-- <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Distributor</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table> -->
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>