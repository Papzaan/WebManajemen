<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Penjualan Produk Mitra</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
            <a href="<?php echo base_url() ?>/Penjualan"><button class="btn btn-primary float-right" type="button">
                    Tambah Data <i class="fas fa-plus"></i>
                </button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTableCatatanPenjualan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
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
                        foreach ($catpen as $d) {
                        ?>
                            <tr id="<?php echo $d["nik_customer"] ?>">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d["nama"] ?></td>
                                <td><?php echo $d["nama_kategori"] ?></td>
                                <td><?php echo $d["tgl_jual"] ?></td>
                                <td><?php echo $d["jumlah"] ?></td>
                                <td><?php echo $d["harga"] ?></td>
                                <td><?php echo $d["alamat_trank"] ?></td>
                                <!--<td><a href="<?php echo base_url() ?>/barang/edit_barang/<?php echo $d["nik_customer"] ?> "><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i> Edit</button>
                                        <a href="<?php echo base_url() ?>/barang/hapus_barang/<?php echo $d["nik_customer"] ?> "><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Hapus</i></button>
                                </td>-->
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