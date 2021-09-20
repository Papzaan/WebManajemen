<!-- End of Main Content -->

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Salesnya Mitra</h1>

    <form class="user" method="post" action="/datasalmit/gettampil_salmit">
        <label for="selected">Pilih Mitra</label>
        <?php echo session()->getFlashdata('pilih_mitra'); ?>
        <div class="form-group row">
            <div class="col-sm-10 mb-3 mb-sm-0">
                <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                <select class="form-control" id="id_mitra" name="id_mitra" required>
                    <option value="" disabled selected data-error="harga harus di isi">Pilih Mitra</option>
                    <?php foreach ($data_mitra as $kr) { ?>
                        <option id="<?php echo $kr["id_mitra"]; ?>" value="<?= $kr['id_mitra']; ?>">
                            <?php echo $kr["nama"]; ?>
                        </option>
                    <?php } ?>
                </select>
                <!-- mbatas option -->
            </div>
            <div class="col-sm-2 mb-3 mb-sm-0">
                <button type="submit" class="btn btn-primary btn-user btn-block">Cari</button>
            </div>
        </div>
    </form>

    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTableSales" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Sales</th>
                            <th>NIK</th>
                            <th>No Telpon</th>
                            <th>Alamat</th>
                            <th>jenis kelamin</th>
                            <th>email</th>
                            <th>Aksis</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if (isset($_POST['id_mitra'])) {
                            $no = 1;
                            foreach ($sales as $d) {
                                //if($id_mitra == $d["id_salmit"]){
                        ?>
                                <tr id="<?php echo $d["id_salmit"] ?>">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $d["nama_salmit"] ?></td>
                                    <td><?php echo $d["nik"] ?></td>
                                    <td><?php echo $d["no_telp"] ?></td>
                                    <td><?php echo $d["alamat"] ?></td>
                                    <td><?php echo $d["jenis_kelamin"] ?></td>
                                    <td><?php echo $d["email"] ?></td>
                                    <td>
                                        <a href="#"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Hapus</i></button>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>

                            <?php
                            $no = 1;
                            foreach ($salesa as $d) {
                            ?>
                                <tr id="<?php echo $d["id_salmit"] ?>">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $d["nama_salmit"] ?></td>
                                    <td><?php echo $d["nik"] ?></td>
                                    <td><?php echo $d["no_telp"] ?></td>
                                    <td><?php echo $d["alamat"] ?></td>
                                    <td><?php echo $d["jenis_kelamin"] ?></td>
                                    <td><?php echo $d["email"] ?></td>
                                    <td>
                                        <a href="#"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Hapus</i></button>
                                    </td>
                                </tr>
                        <?php }
                        } ?>


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