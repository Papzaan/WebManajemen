<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Tambah Data Kategori</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/barang/aksi_inputstok">
                <div class="form-group">
                    <label for="nama" class="control-label">Nama Barang</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" data-error="Nama Barang harus diisi" placeholder="Nama Barang" value="" required />
                        <span class="input-group-addon">
                        </span>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <label for="no_tlp" class="control-label">Harga Perkarton</label>
                    <div class="input-group">
                        <input type="text" name="harga_dusan" id="harga_dusan" data-error="No Telpon harus di isi" class="form-control" placeholder="Harga Perkarton" required>
                        <span class="input-group-addon">
                        </span>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
                    <a href="<?php echo base_url() ?>/barang/stok" class="btn btn-default ">Cancel</a>
                </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>