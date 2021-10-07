<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Mitra</h1>
    <?php echo session()->getFlashdata('info'); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
            <a href="/datamitra/input_mitra"><button class="btn btn-primary float-right" type="button">
                    Tambah Data <i class="fas fa-plus"></i>
                </button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="display nowrap" id="dataTableMitra" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>no_telp</th>
                            <th>Alamat</th>
                            <th>jenis kelamin</th>
                            <th>email</th>
                            <th>Status</th>
                            <th>Aksis</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($mitra as $d) {
                        ?>
                            <tr id="<?php echo $d["id_mitra"] ?>">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d["nama"] ?></td>
                                <td><?php echo $d["nik"] ?></td>
                                <td><?php echo $d["no_telp"] ?></td>
                                <td><?php echo $d["alamat"] ?></td>
                                <td><?php echo $d["jenis_kelamin"] ?></td>
                                <td><?php echo $d["email"] ?></td>
                                <td><?php echo $d["status_kepegawaian"] ?></td>
                                <?php
                                if ($d["status_kepegawaian"] == "non pegawai") { ?>
                                    <td>
                                        <a href="<?php echo base_url() ?>/datamitra/terima_pegawai/<?php echo $d["email"] ?> "><button class="btn btn-warning btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-check"></i>Terima</button>
                                            <a href="#" data-toggle="modal" data-target="#HapusModal<?= $d["id_mitra"] ?>" class="small-box-footer">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-placement="top" title="Delete"><i class="fa fa-trash"> Hapus </i></button>
                                            </a>
                                    </td>
                                <?php } ?>
                                <?php
                                if ($d["status_kepegawaian"] == "pegawai") { ?>
                                    <td>
                                        <a href="<?php echo base_url() ?>/datamitra/edit_mitra/<?php echo $d["email"] ?> "><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i> Edit</button>
                                            <a href="#" data-toggle="modal" data-target="#HapusModal<?= $d["id_mitra"] ?>" class="small-box-footer">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-placement="top" title="Delete"><i class="fa fa-trash"> Hapus </i></button>
                                            </a>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                <!-- Hapus Modal-->
                <?php
                foreach ($mitra as $d) {
                ?>
                    <div class="modal fade" id="HapusModal<?= $d["id_mitra"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Yakin Inggin Menghapus Mitra <font color="red"><?php echo $d["nama"] ?></font> ?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form class="user" method="post" action="<?php echo base_url() ?>/datamitra/hapus_mitra">
                                        <div class="form-group row">
                                            <div class="col-sm-9 mb-sm-0">
                                                <label class="control-label">Konfirmasi Password : </label>
                                            </div>
                                            <div class="col-sm-9 mb-sm-0">
                                                <input type="password" name="password" class="form-control" id="password" placeholder="masukan password">
                                                <input type="text" name="email" class="form-control" id="email" hidden value="<?php echo $d["email"] ?>">
                                                <?php
                                                foreach ($user as $u) {
                                                ?>
                                                    <input type="text" name="email_admin" class="form-control" id="email_admin" hidden value="<?php echo $u["email"] ?>">
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-2 mb-sm-0">
                                                <button type="submit" class="btn btn-primary " name="masukanbayaran">Masukan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>