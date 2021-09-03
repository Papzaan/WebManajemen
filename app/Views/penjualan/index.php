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
                            <div class="card_body">
                                <h5><?php echo $d["nama"] ?></h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                <h5>Harga</h5>
                                <h5>Rp.<?php echo $d["harga"] ?></h5>
                                <a href="#" class="card-link">Card Link</a>
                                <a href="#" class="card-link">Another Link</a>
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