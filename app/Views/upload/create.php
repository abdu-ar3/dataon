<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <label for="name">Document File</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="sampul" name="sampul">
                    <label class="input-group-text" for="sampul">Upload</label>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    </div>
                </div>
                <label for="name">Author</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="sampul" name="sampul">
                    <label class="input-group-text" for="sampul">Upload</label>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>