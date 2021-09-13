<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pesanan Sales</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!--<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> 
            <a href="<?php echo base_url() ?>/barang/input_barang"><button class="btn btn-primary float-right" type="button">
                    Tambah Data <i class="fas fa-plus"></i>
                </button></a>
        </div>-->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Sales</th>
                            <th>Nama Barang</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Utang</th>
                            <th>Alamat</th>
                            <th>pembayaran</th>
                            <th>Status</th>
                            <!--<?php
                                foreach ($pessal as $d) {
                                    if ($d["utang"] != "0") { ?>
                                <th>aksi</th>
                            <?php }
                                } ?>-->
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pessal as $d) {
                        ?>
                            <tr id="<?php echo $d["id_pessal"] ?>">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d["nama"] ?></td>
                                <td><?php echo $d["nama_kategori"] ?></td>
                                <td><?php echo $d["tgl_pesan"] ?></td>
                                <td><?php echo $d["jumlah"] ?></td>
                                <td><?php echo $d["harga"] ?></td>
                                <td><?php echo $d["utang"] ?></td>
                                <td><?php echo $d["alamat"] ?></td>
                                <?php
                                if ($d["bayar"] == "1") { ?>
                                    <td><span class="bg-gradient-success text-white">1 Kali</span></td>
                                <?php } ?>
                                <?php
                                if ($d["bayar"] == "2") { ?>
                                    <td><span class="bg-gradient-warning text-white">2 Kali</span></td>
                                <?php } ?>
                                <?php
                                if ($d["bayar"] == "3") { ?>
                                    <td><span class="bg-gradient-warning text-white">3 Kali</span></td>
                                <?php } ?>
                                <?php
                                if ($d["utang"] == "0") { ?>
                                    <td><span class="bg-gradient-success text-white">Lunas</span></td>
                                <?php } ?>
                                <?php
                                if ($d["utang"] != "0") { ?>
                                    <td><span class="bg-gradient-danger text-white">Belum Lunas</span>
                                        <a href="#"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-placement="top" title="Delete" data-target="#myModal"><i class="fa fa-trash"> aksi</i></button>
                                    </td>
                                <?php } ?>
                                <!--<?php
                                    if ($d["utang"] != "0") { ?>
                                 <td><a href="#"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i> Lunas</button>
                                    <a href="#"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Belum Lunas</i></button>
                                </td>
                                <?php } ?>-->

                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Pembayaran</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="">
                                    <input type="text" name="bayar" id="bayar">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Bayar</button>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>