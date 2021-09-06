<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mitra</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <?php foreach ($barang as $d) { ?>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5><?php echo $d["nama"] ?></h5>
                                <p class="card-text">
                                    <img src="https://majushop.id/image?id=69507.jpg&option=2&t=1626403350" width="200px" height="150px">
                                </p>
                                <label> <?php echo number_to_currency($d['harga'], 'IDR'); ?></label><br>
                                <button class="btn btn-success btn-sm"><i class="fa fa-shopping-basket"></i>Add</button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>