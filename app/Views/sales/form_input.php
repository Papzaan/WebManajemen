<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Tambah Sales</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/datasales/aksi_input">
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
                <!--<div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="pegawai" hidden value="mitra" />
                </div>-->
                <button type="submit" class="btn btn-primary btn-user btn-block" name="regismitra">Tambahkan Sales</button>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>