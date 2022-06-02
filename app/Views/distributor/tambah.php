<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="/distributor/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Distributor Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="form-group">
                    <label for="region">State Region</label>
                    <input type="text" class="form-control" id="region" name="region">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Country</label>
                    <select class="form-control" id="country" name="country">
                        <option>Amerika</option>
                        <option>Indonesia</option>
                        <option>Inggris</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"">
                </div>
                <br>
                <button type=" submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>