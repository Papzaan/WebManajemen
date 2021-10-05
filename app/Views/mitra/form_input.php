<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Tambah Mitra</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/datamitra/aksi_input">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="nama" id="exampleFirstName" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="nik" id="exampleLastName" placeholder="NIK">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <select class="form-control col-md-12" name="jk">
                            <option value="" disabled selected>Jenis kelamin</option>
                            <option value="laki - laki">Laki - laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="no_telp" id="exampleLastName" placeholder="No Telpon">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="email" id="exampleInputPassword" placeholder="email">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" name="password" id="exampleRepeatPassword" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="alamat" placeholder="Alamat" />
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <select class="form-control col-md-12" name="kedudukan">
                            <option value="" disabled selected>Tingkatan Mitra</option>
                            <option value="md">Mitra Biasa</option>
                            <option value="md1">Mitra Super 1</option>
                            <option value="md2">Mitra Super 2</option>
                        </select>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <select class="form-control" id="id_sales" name="id_sales">
                            <option value="" disabled selected>Pilih Salah Satu Sales Pusat</option>
                            <?php foreach ($sales_se as $se) { ?>
                                <option id="<?php echo $se["id_sales"]; ?>" value="<?php echo $se["id_sales"]; ?>">
                                    <?php echo $se["nama_se"]; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <!--<div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="pegawai" hidden value="mitra" />
                </div>-->
                <button type="submit" class="btn btn-primary btn-user btn-block" name="regismitra">Tambahkan Mitra</button>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>