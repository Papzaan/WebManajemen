<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Edit Data Barang</h3>
            <?php echo session()->getFlashdata('info'); ?>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/barang_mitra/update_stok">
            <?php foreach ($user as $k) { ?>
                <input type="text" class="form-control" name="kedudukan" id="kedudukan" data-error="Nama Barang harus diisi"  value="<?php echo $k["kedudukan"] ?>" hidden />
                <?php }?>
            <?php foreach ($edit_stok as $d) { ?>
                <input type="text" class="form-control" name="id_stok" id="id_stok" data-error="Nama Barang harus diisi"  value="<?php echo $d["id_stokbarmit"] ?>" hidden />
                <div class="form-group">
                    <label for="nama" class="control-label">Nama Barang</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" data-error="Nama Barang harus diisi"  value="<?php echo $d["nama_kategori"] ?>" readonly />
                        <span class="input-group-addon">
                        </span>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="no_tlp" class="control-label">Harga Sales/Outlet</label>
                    <div class="input-group">
                        <input type="text" name="harga_outlet" id="harga_outlet" data-error="No Telpon harus di isi" value="<?php echo $d["harga_outlet"] ?>" class="form-control"  required>
                        <span class="input-group-addon">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_tlp" class="control-label">Harga Customer</label>
                    <div class="input-group">
                        <input type="text" name="harga_customer" id="harga_customer" data-error="No Telpon harus di isi" value="<?php echo $d["harga_customer"] ?>" class="form-control" required>
                        <span class="input-group-addon">
                        </span>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
                    <a href="<?php echo base_url() ?>/barang_mitra/stok" class="btn btn-default ">Cancel</a>
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