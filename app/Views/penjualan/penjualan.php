<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Penjualan Produk</h3>
        </div>
        <div>
            <?php echo session()->getFlashdata('stok_habis');?>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/penjualan/input_penjualan">
                <div class="form-group">
                <div class="form-group row">
                    <div class="col-sm-5 mb-3 mb-sm-0">
                    <label for="nama" class="control-label">Nama Customer</label>
                         <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                        <select class="form-control" id="nama_cus" name="nama_cus">
                            <option value="" disabled selected>Pilih Nama Customer</option>
                            <?php foreach ($nama_cus as $kr) { ?>
                                <option value="<?php echo $kr["nama"]; ?>">
                                    <?php echo $kr["nama"]; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <!-- mbatas option -->
                    </div>
                    <div class="col-sm-5 mb-3 mb-sm-0">
                    <label for="nama" class="control-label">NIK Customer</label>
                        <input type="text" class="form-control form-control-user" name="nik_customer" id="exampleLastName" disabled>
                    </div>
                    <div class="col-sm-2 mb-3 mb-sm-0">
                    <label for="nama" class="control-label">Tambah Customer</label>
                    <a href="/datacus/inputcus"><button class="btn btn-primary" type="button">
                                Tambah Data <i class="fas fa-plus"></i>
                            </button></a>
                    </div>
                        
                </div>
                <div class="form-group">Nama Penjual</label>
                    <?php foreach ($user as $d) {?>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="nama_admin" value="<?php echo $d["nama"] ?>" disabled/>
                    <?php } ?>
                </div>
                <div class="form-group">Nama Barang</label>
                    <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                    <select class="form-control" id="nama_kategori" name="nama_kategori">
                        <option value="" disabled selected>Pilih Ketegori Barang</option>
                        <?php foreach ($kategori as $kr) { ?>
                            <option value="<?php echo $kr["nama_kategori"]; ?>">
                                <?php echo $kr["nama_kategori"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <!-- mbatas option -->
                </div>
                <div class="form-group">Jumlah Barang</label>
                    <input type="text" class="form-control form-control-user" id="jumlah" name="jumlah" placeholder="Jumlah Barang"/>
                </div>
                <div class="form-group">Harga Total</label>
                    <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Harga Total"/>
                </div>
                <div class="form-group">Tanggal Jual</label>
                    <input type="text" id="datepicker" data-date-format="yyyy-mm-dd" name="tgl_jual" id="tgl_jual" data-error="Tanggal harus di isi" class="form-control" placeholder="MM/DD/YYYY" required>
                </div>
                <div class="form-group">Alamat Transaksi</label>
                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat Transaksi"/>
                </div>
                <!-- Metode Pembayaran-->
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
                    <a href="<?php echo base_url() ?>/penjualan/catatan" class="btn btn-default ">Cancel</a>
                </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>