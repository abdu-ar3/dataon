<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php foreach ($catalog as $ctg) : ?>
                <h3>Bean off the Day </h3>
                <p><?= $ctg['title']; ?></p>
                <h3>Description</h3>
                <p><?= $ctg['description']; ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>