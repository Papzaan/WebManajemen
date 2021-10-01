<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Tambah Data Supplier</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/datasup/aksitambah">
                <div class="form-group">
                    <label for="nama" class="control-label">Nama Supplier</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nama_sup" id="nama_sup" data-error="Nama Barang harus diisi" placeholder="Nama Supplier" value="" required />
                        <span class="input-group-addon">
                        </span>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <label for="no_tlp" class="control-label">No Telepon</label>
                    <div class="input-group">
                        <input type="text" name="no_telp" id="no_telp" data-error="No Telpon harus di isi" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" placeholder="No Telepon" required>
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
                    <a href="<?php echo base_url() ?>/datasup/supplier" class="btn btn-default ">Cancel</a>
                </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>