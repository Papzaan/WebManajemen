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
                            <th colspan="3">Harga Perkarton</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Stok</th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle;">Aksi</th>
                        </tr>
                        <th>Mitra</th>
                        <th>Sales/Outlet</th>
                        <th>Customer</th>
                        
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($stok as $d) {
                        ?>
                            <tr id="<?php echo $d['id_stokbarmit'] ?>">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d['nama_kategori'] ?></td>
                                <?php foreach ($user as $k) { 
                                    if($k['kedudukan'] == 'md'){?>
                                        <td><?php echo $d['harga_mitra'] ?></td>
                                <?php }else 
                                    if($k['kedudukan'] == 'md1'){ ?>
                                        <td><?php echo $d['harga_mitra1'] ?></td>
                                <?php }else 
                                    if($k['kedudukan'] == 'md2'){ ?>
                                        <td><?php echo $d['harga_mitra2'] ?></td>
                                <?php }} ?>
                                <td><?php echo $d['harga_outlet'] ?></td>
                                <td><?php echo $d['harga_customer'] ?></td>
                                <td><?php echo $d['stok_mitra'] ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>/barang_mitra/edit_stok/<?php echo $d["id_stokbarmit"] ?> "><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i> Edit</button>
                                        <!-- <a href="#"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Hapus</i></button> -->
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