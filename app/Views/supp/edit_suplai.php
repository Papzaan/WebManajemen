<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Update Data Supplier</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/datasup/update">
            <?php foreach ($suplayer as $d) { ?>
                <div class="form-group">
                    <label for="nama" class="control-label">Nama Supplier</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nama_sup" id="nama_sup" data-error="Nama Barang harus diisi" placeholder="Nama Supplier" value="<?php echo $d["nama_sup"] ?>" required />
                        <span class="input-group-addon">
                        </span>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <label for="no_tlp" class="control-label">No Telepon</label>
                    <div class="input-group">
                        <input type="text" name="no_telp" id="no_telp" data-error="No Telpon harus di isi" class="form-control" placeholder="No Telepon" value="<?php echo $d["no_telp"] ?>" required>
                        <span class="input-group-addon">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="control-label">Alamat</label>
                    <div class="input-group">
                        <input type="text" name="alamat" id="alamat" data-error="alamat harus di isi" class="form-control" placeholder="Alamat" value="<?php echo $d["alamat"] ?>" required>
                        <span class="input-group-addon">
                        </span>
                        </span>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
                    <a href="<?php echo base_url() ?>/admin/supplier" class="btn btn-default ">Cancel</a>
                </div>
            <?php } ?>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>