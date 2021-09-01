<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Tambah Data Barang</h3>
        </div>
        <div class="box-body">
        <div class="form-group">
                <label for="nama_barang" class="control-label">Nama Supplier</label>
                <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                <select class="form-control" id="bidang" name="bidang">
                            <option value="" disabled selected>Pilih Supplier</option>
                        <?php foreach ($suplayer as $row ) { ?>
                            <option value="<?php echo $row["nama_sup"]; ?>">
                                <?php echo $row["nama_sup"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <!-- mbatas option -->
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="nama_barang" class="control-label">Nama Barang</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang" data-error="Nama Barang harus diisi" placeholder="Nama barang" value="" required />
                    <span class="input-group-addon">
                    </span>
                </div>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="kategori" class="control-label">Tanggal Masuk</label>
                <div class="input-group date" data-provide="datepicker">
                    <input type="text" id="datepicker" name="tgl_masuk" id="tgl_masuk" data-error="harga harus di isi" class="form-control" placeholder="MM/DD/YYYY" required>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="ukuran" class="control-label">Jumlah</label>
                <div class="input-group">
                    <input type="text" name="jumlah" id="jumlah" data-error="harga harus di isi" class="form-control" placeholder="Jumlah Barang" required>
                    <span class="input-group-addon">
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="harga" class="control-label">Harga</label>
                <div class="input-group">
                    <input type="text" name="harga" id="harga" data-error="harga harus di isi" class="form-control" placeholder="Harga Barang" required>
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