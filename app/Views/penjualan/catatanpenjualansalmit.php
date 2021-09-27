<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Penjualan Produk Mitra</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTableCatatanPenjualanMitra" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Sales</th>
                            <th>Nama Customer</th>
                            <th>Nama Produk</th>
                            <th>Tanggal Jual</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Alamat Transaksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $no = 1;
                        foreach ($pensalmit as $d) {
                        ?>
                            <tr id="">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d["nama_salmit"] ?></td>
                                <td><?php echo $d["nama_cussalmit"] ?></td>
                                <td><?php echo $d["nama_kategori"] ?></td>
                                <td><?php echo $d["tgl_jual"] ?></td>
                                <td><?php echo $d["jumlah"] ?></td>
                                <td><?php echo $d["harga"] ?></td>
                                <td><?php echo $d["alamat_trank"] ?></td>
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