<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Stok Barang Mitra</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center  table-bordered" id="dataTableStok" width="100%" cellspacing="0">
                    <thead>
                        
                        
                        <tr>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Nomor</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Nama Barang</th>
                            <th colspan="2">Harga Perkarton</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Stok</th>
                        </tr>
                        <th>Outlet</th>
                        <th>Customer</th>
                        
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($stok as $d) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d['nama_kategori'] ?></td>
                                <td><?php echo $d['harga_outlet'] ?></td>
                                <td><?php echo $d['harga_customer'] ?></td>
                                <td><?php echo $d['stok_mitra'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>