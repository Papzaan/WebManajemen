<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Edit Data Barang</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/barang/aksi_updatestok">
            <?php foreach ($edit_stok as $d) { ?>
                <div class="form-group">
                    <label for="nama" class="control-label">Nama Barang</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" data-error="Nama Barang harus diisi"  value="<?php echo $d["nama_kategori"] ?>" required />
                        <span class="input-group-addon">
                        </span>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="no_tlp" class="control-label">Harga Mitra</label>
                    <div class="input-group">
                        <input type="text" name="harga_mitra" id="harga_mitra" data-error="No Telpon harus di isi" value="<?php echo $d["harga_mitra"] ?>" class="form-control"  required>
                        <span class="input-group-addon">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_tlp" class="control-label">Harga Sales</label>
                    <div class="input-group">
                        <input type="text" name="harga_sales" id="harga_sales" data-error="No Telpon harus di isi" value="<?php echo $d["harga_sales"] ?>" class="form-control" required>
                        <span class="input-group-addon">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_tlp" class="control-label">Harga Outlet</label>
                    <div class="input-group">
                        <input type="text" name="harga_outlet" id="harga_outlet" data-error="No Telpon harus di isi" value="<?php echo $d["harga_outlet"] ?>" class="form-control"  required>
                        <span class="input-group-addon">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_tlp" class="control-label">Harga Customer</label>
                    <div class="input-group">
                        <input type="text" name="harga_dusan" id="harga_dusan" data-error="No Telpon harus di isi" value="<?php echo $d["harga_dusan"] ?>" class="form-control" required>
                        <span class="input-group-addon">
                        </span>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
                    <a href="<?php echo base_url() ?>/barang/stok" class="btn btn-default ">Cancel</a>
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