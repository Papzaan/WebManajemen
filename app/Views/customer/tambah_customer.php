<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Tambah Data Customer</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/datacus/aksitambah">
            <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="nama" class="control-label">Nama Customer</label>
                        <input type="text" class="form-control form-control-user" name="nama" id="exampleInputPassword" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-sm-6">
                    <label for="nama" class="control-label">NO Telepone</label>
                        <input type="text" class="form-control form-control-user" name="no_telp_customer" id="exampleRepeatPassword" placeholder="No Telepone Customer">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="nama" class="control-label">Pilih Jenis Kelamin</label>
                            <select class="form-control  col-md-12" name="jk">
                                <option value="" disabled selected>Jenis kelamin</option>
                                <option value="laki - laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                    </div>
                </div>
                <div class="form-group">Alamat Customer</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="alamat" placeholder="Alamat Customer"/>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
                    <a href="<?php echo base_url() ?>/penjualan" class="btn btn-default ">Cancel</a>
                </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>