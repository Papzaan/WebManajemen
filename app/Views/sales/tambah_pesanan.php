<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Tambah Data Pesanan</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/sales/aksi_pesan">
                <div class="form-group">Nama Barang</label>
                    <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                    <select class="form-control" id="nama_kategori" name="nama_kategori" onChange="update_harga()">
                        <option value="" disabled selected>Pilih Ketegori Barang</option>
                        <?php foreach ($kategori as $kr) { ?>
                            <option id="<?php echo $kr["nama_kategori"]; ?>" value="<?php echo $kr["harga_dusan"]; ?>">
                                <?php echo $kr["nama_kategori"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <input type="text" name="harga" id="harga" class="form-control" disabled>
                    <!-- mbatas option -->
                </div>

                <div class="form-group">
                    <label for="kategori" class="control-label">Tanggal Penjualan</label>
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" id="datepicker" data-date-format="yyyy-mm-" name="tgl_pesan" id="tgl_pesan" data-error="harga harus di isi" class="form-control" placeholder="MM/DD/YYYY" required>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <label for="jumlah" class="control-label">Jumlah</label>
                    <div class="input-group">
                        <input type="text" name="jumlah" id="jumlah" data-error="harga harus di isi" class="form-control" placeholder="Jumlah Barang" required>
                        <span class="input-group-addon">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="harga" class="control-label">Harga</label>
                    <div class="input-group">
                        <input type="text" name="harga" id="harga" data-error="harga harus di isi" class="form-control" placeholder="Harga Barang" disabled>
                        <span class="input-group-addon">
                        </span>
                        </span>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="payment">Metode Pembayaran</label>
                    <select id="payment" name="metode" class="form-control" style="width:100%;">
                        <option value="1">Cash</option>
                        <option value="2">Transfer</option>
                    </select>
                </div>
                <div class="form-group" id="rek">
                    <div class="col-xs-5">
                        <div class="form-group">
                            <select id="norekk" onChange="update()">
                                <option value="-">Pilih Bank</option>
                                <option value="7516756">BSI</option>
                                <option value="4356574">BRI</option>
                                <option value="2345678">Mandiri</option>
                            </select>
                            <input type="text" disabled id="value">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary ">Pesan</button>
                    <a href="<?php echo base_url() ?>/sales/pesanan_sales" class="btn btn-default ">Cancel</a>
                </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>