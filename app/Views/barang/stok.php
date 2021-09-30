<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Stok Barang Pusat</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
            <a href="<?php echo base_url() ?>/barang/input_stok"><button class="btn btn-primary float-right" type="button">
                    Tambah Data <i class="fas fa-plus"></i>
                </button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center  table-bordered" id="dataTableStok" width="100%" cellspacing="0">
                    <thead>


                        <tr>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Nomor</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Nama Barang</th>
                            <th colspan="6">Harga Perkarton</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Stok</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Aksi</th>
                        </tr>
                        <th>Sales Executiv</th>
                        <th>Mitra Super 1</th>
                        <th>Mitra Super 2</th>
                        <th>Mitra Biasa</th>
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
                                <td><?php echo $d['harga_sales'] ?></td>
                                <td><?php echo $d['harga_mitra1'] ?></td>
                                <td><?php echo $d['harga_mitra2'] ?></td>
                                <td><?php echo $d['harga_mitra'] ?></td>
                                <td><?php echo $d['harga_outlet'] ?></td>
                                <td><?php echo $d['harga_dusan'] ?></td>
                                <td><?php echo $d['stok'] ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>/barang/edit_stok/<?php echo $d["nama_kategori"] ?> "><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i> Edit</button>
                                        <a href="<?php echo base_url() ?>/barang/hapus_stok/<?php echo $d["nama_kategori"] ?> "><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Hapus</i></button>
                                </td>
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