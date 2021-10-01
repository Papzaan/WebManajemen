<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Tambah Data Customer Mitra</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/datacus/aksitambahcussal">
                <div class="form-group row">
                    <?php foreach ($user as $row) : ?>
                        <input type="text" class="form-control form-control-user" name="id_sales" id="exampleInputPassword" value="<?= $row['id_sales']; ?>" hidden>
                    <?php endforeach; ?>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="nama" class="control-label">Nama Customer</label>
                        <input type="text" class="form-control form-control-user" name="nama" id="exampleInputPassword" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-sm-6">
                        <label for="nama" class="control-label">No Telepone Customer</label>
                        <input type="text" class="form-control form-control-user" name="no_telp_customer_sal" id="exampleRepeatPassword" onkeypress="return event.charCode >= 48 && event.charCode <=57" placeholder="No Telepone Customer">
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
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="alamat" placeholder="Alamat Customer" />
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
                    <a href="<?php echo base_url() ?>/penjualan/penjualan_user" class="btn btn-default ">Cancel</a>
                </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>