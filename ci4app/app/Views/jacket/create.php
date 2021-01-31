<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Add Jacket Data</h2>
            <form action="/jacket/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="product_price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="product_price" name="product_price">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="product_code" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="product_code" name="product_code">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pictures" class="col-sm-2 col-form-label">Pictures</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pictures" name="pictures">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>