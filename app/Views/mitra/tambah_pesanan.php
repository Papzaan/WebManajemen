<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Tambah Data Pesanan</h3>
            <div>
                <?php echo session()->getFlashdata('stok_habis'); ?>
            </div>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/mitra/aksi_pesan">
            <?php foreach ($user as $d) { 
                if($d['kedudukan'] == 'md'){?>
                <input type="text" name="id_mitra" value="<?= $d['id_mitra']; ?>" hidden>
                <div class="form-group">Nama Barang</label>
                    <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                    <select class="form-control" id="nama_kategori" name="nama_kategori" onChange="update_harga()">
                        <option value="" disabled selected>Pilih Ketegori Barang</option>
                        <?php foreach ($kategori as $kr) { ?>
                            <option id="<?php echo $kr["harga_mitra"]; ?>" value="<?php echo $kr["nama_kategori"]; ?>">
                                <?php echo $kr["nama_kategori"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <input type="text" disabled id="harga_barang" class="form-control col-2" onkeyup="sum();">
                    <!-- mbatas option -->
                </div>
                <?php }else 
                if($d['kedudukan'] == 'md1'){ ?>
                    <input type="text" name="id_mitra" value="<?= $d['id_mitra']; ?>" hidden>
                    <div class="form-group">Nama Barang</label>
                        <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                        <select class="form-control" id="nama_kategori" name="nama_kategori" onChange="update_harga()">
                            <option value="" disabled selected>Pilih Ketegori Barang</option>
                            <?php foreach ($kategori as $kr) { ?>
                                <option id="<?php echo $kr["harga_mitra1"]; ?>" value="<?php echo $kr["nama_kategori"]; ?>">
                                    <?php echo $kr["nama_kategori"]; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <input type="text" disabled id="harga_barang" class="form-control col-2" onkeyup="sum();">
                        <!-- mbatas option -->
                    </div>
                <?php }else 
                if($d['kedudukan'] == 'md2'){ ?>
                    <input type="text" name="id_mitra" value="<?= $d['id_mitra']; ?>" hidden>
                    <div class="form-group">Nama Barang</label>
                        <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                        <select class="form-control" id="nama_kategori" name="nama_kategori" onChange="update_harga()">
                            <option value="" disabled selected>Pilih Ketegori Barang</option>
                            <?php foreach ($kategori as $kr) { ?>
                                <option id="<?php echo $kr["harga_mitra2"]; ?>" value="<?php echo $kr["nama_kategori"]; ?>">
                                    <?php echo $kr["nama_kategori"]; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <input type="text" disabled id="harga_barang" class="form-control col-2" onkeyup="sum();">
                        <!-- mbatas option -->
                    </div>

            <?php }} ?>
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
                        <input type="text" name="jumlah" id="jumlah" data-error="harga harus di isi" class="form-control" placeholder="Jumlah Barang" required onkeyup="sum();">
                        <span class="input-group-addon">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="harga" class="control-label">Harga Total</label>
                    <div class="input-group">
                        <input type="text" name="harga_total" id="harga_total" class="form-control" readonly>
                        <?php foreach ($user as $d) { ?>
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="id_mitra" value="<?php echo $d["id_mitra"] ?>" hidden />
                        <?php } ?>
                        <span class="input-group-addon">
                        </span>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="payment">Metode Pembayaran</label>
                    <select id="payment" name="metode" class="form-control" style="width:100%;">
                        <option value="Cash">Cash</option>
                        <option value="Transfer">Transfer</option>
                    </select>
                </div>
                <div class="form-group" id="rek">
                    <div class="col-xs-5">
                        <div class="form-group">
                            <!-- norek -->
                            <select id="norekk" onChange="update()">
                                <option value="-">Pilih Bank</option>
                                <?php foreach ($bank as $bk) { ?>
                                    <option value="<?php echo $bk["no_credit"]; ?>"><?php echo $bk["nama_bank"]; ?></option>
                                <?php } ?>
                            </select>
                            <input type="text" disabled id="value">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary ">Pesan</button>
                    <a href="<?php echo base_url() ?>/mitra/pesanan_mitra" class="btn btn-default ">Cancel</a>
                </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>