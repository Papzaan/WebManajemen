<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Barang Masuk</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
            <a href="<?php echo base_url() ?>/barang/input_barang"><button class="btn btn-primary float-right" type="button">
                    Tambah Data <i class="fas fa-plus"></i>
                </button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-bordered table-hover" id="dataTableBarang" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Suplayer</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Masuk</th>
                            <th>Jumlah/Karton</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($barang as $d) {
                        ?>
                            <tr id="<?php echo $d["id_barang"] ?>">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d["nama_sup"] ?></td>
                                <td><?php echo $d["nama_kategori"] ?></td>
                                <td><?php echo $d["tgl_masuk"] ?></td>
                                <td><?php echo $d["jumlah"] ?></td>
                                <td><?php echo $d["harga"] ?></td>
                                <td><a href="<?php echo base_url() ?>/barang/edit_barang/<?php echo $d["id_barang"] ?> "><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i> Edit</button>
                                        <!-- <a href="<?php echo base_url() ?>/barang/hapus_barang/<?php echo $d["id_barang"] ?> "><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Hapus</i></button> -->
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