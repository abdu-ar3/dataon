<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php foreach ($home as $h) : ?>
                <h3>Bean off the Day </h3>
                <p><?= $h['title']; ?></p>
                <h3>Sale Price</h3>
                <h3>Description</h3>
                <p><?= $h['description']; ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>