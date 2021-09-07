<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Tambah Data Supplier</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/barang/aksi_input">
                <div class="form-group">
                    <label for="nama" class="control-label">Nama Supplier</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nama_supp" id="nama_supp" data-error="Nama Barang harus diisi" placeholder="Nama Supplier" value="" required />
                        <span class="input-group-addon">
                        </span>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <label for="no_tlp" class="control-label">No Telepon</label>
                    <div class="input-group">
                        <input type="text" name="no_tlp" id="no_tlp" data-error="No Tlp harus di isi" class="form-control" placeholder="No Telepon" required>
                        <span class="input-group-addon">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="control-label">Alamat</label>
                    <div class="input-group">
                        <input type="text" name="alamat" id="alamat" data-error="alamat harus di isi" class="form-control" placeholder="Alamat" required>
                        <span class="input-group-addon">
                        </span>
                        </span>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
                    <a href="<?php echo base_url() ?>/barang/tampil" class="btn btn-default ">Cancel</a>
                </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>