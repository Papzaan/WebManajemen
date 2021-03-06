<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Transaksi Mitra</h1>

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
                <table class=" table-bordered table-hover" id="datatabletransaksi_mitra" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Sales Executiv</th>
                            <th>Nama Mitra</th>
                            <th>Nama Barang</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Utang</th>
                            <th>Alamat</th>
                            <th>Melakukan Pembayaran</th>
                            <th>Metode Pembayaran</th>
                            <th>Status</th>
                            <!--<?php
                                foreach ($pesmit as $d) {
                                    if ($d["utang"] != "0") { ?>
                                <th>aksi</th>
                            <?php }
                                } ?>-->
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pesmit as $d) {
                        ?>
                            <tr id="<?php echo $d["id_pesmit"] ?>">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d["nama_se"] ?></td>
                                <td><?php echo $d["nama"] ?></td>
                                <td><?php echo $d["nama_kategori"] ?></td>
                                <td><?php echo $d["tgl_pesan"] ?></td>
                                <td><?php echo $d["jumlah"] ?></td>
                                <td><?php echo $d["harga"] ?></td>
                                <td><?php echo $d["utang"] ?></td>
                                <td><?php echo $d["alamat"] ?></td>
                                <?php
                                if ($d["bayar"] == "0") { ?>
                                    <td><span class="bg-gradient-primary text-white">0 Kali</span></td>
                                <?php } ?>
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
                                    <td><span class="bg-gradient-danger text-white">3 Kali</span></td>
                                <?php } ?>
                                <!--Metode Pembayaran-->
                                <td><?php echo $d["met_bayar"] ?></td>
                                <!--Status Pembayaran-->
                                <?php
                                if ($d["utang"] == "0") { ?>
                                    <td><span class="bg-gradient-success text-white">Lunas</span></td>
                                <?php } ?>
                                <?php
                                if ($d["utang"] != "0") { ?>
                                    <td><span class="bg-gradient-danger text-white">BelumLunas</span>
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
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>