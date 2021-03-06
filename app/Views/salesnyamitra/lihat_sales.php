<!-- End of Main Content -->

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sales</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTableSales" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>no_telp</th>
                            <th>Alamat</th>
                            <th>jenis kelamin</th>
                            <th>email</th>
                            <th>Aksis</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                         $no = 1;
                        foreach ($sales as $d) {
                        ?>
                            <tr id="<?php echo $d["id_salmit"] ?>">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d["nama_salmit"] ?></td>
                                <td><?php echo $d["nik"] ?></td>
                                <td><?php echo $d["no_telp"] ?></td>
                                <td><?php echo $d["alamat"] ?></td>
                                <td><?php echo $d["jenis_kelamin"] ?></td>
                                <td><?php echo $d["email"] ?></td>
                                <?php
                                    if ($d["status_kepegawaian"] == "non pegawai") { ?>
                                        <td>
                                            <a href="<?php echo base_url() ?>/datasalmit/terima_pegawai/<?php echo $d["email"] ?> "><button class="btn btn-warning btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-check"></i>Terima</button>
                                            <a href="<?php echo base_url() ?>/datasalmit/hapus_sales/<?php echo $d["email"] ?> "><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Hapus</i></button>
                                        </td>
                                    <?php } ?>
                                    <?php
                                    if ($d["status_kepegawaian"] == "pegawai") { ?>
                                        <td>
                                            <a href="<?php echo base_url() ?>/datasalmit/hapus_sales/<?php echo $d["email"] ?> "><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Hapus</i></button>
                                        </td>
                                    <?php } ?>
                            </tr>
                        <?php } ?>
                        </tr>

                        </tr>

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