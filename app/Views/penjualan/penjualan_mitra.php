<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Penjualan Produk</h3>
        </div>
        <div>
            <?php echo session()->getFlashdata('stok_habis'); ?>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/penjualan/input_penjualan_mitra">
                <div class="form-group">
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">
                            <label for="nama" class="control-label">Nama Customer</label>
                            <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                            <select class="form-control" id="nama_cus" name="nama_cus" onChange="update_nik()">
                                <option value="" disabled selected>Pilih Nama Customer</option>
                                <?php foreach ($nama_cusmit as $kr) { ?>
                                    <option id="<?php echo $kr["no_telp_customer_mit"]; ?>" value="<?php echo $kr["nama_cusmit"]; ?>">
                                        <?php echo $kr["nama_cusmit"]; ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <!-- mbatas option -->
                        </div>
                        <div class="col-sm-5 mb-3 mb-sm-0">
                            <label for="nama" class="control-label">No Telepone</label>
                            <input type="text" class="form-control form-control-user" name="no_telp_customer" id="no_telp_customer" readonly>
                        </div>
                        <div class="col-sm-2 mb-3 mb-sm-0">
                            <label for="nama" class="control-label">Tambah Customer</label>
                            <a href="/datacus/inputcustomer"><button class="btn btn-primary" type="button">
                                    Tambah Data <i class="fas fa-plus"></i>
                                </button></a>
                        </div>

                    </div>
                    <div class="form-group">Nama Penjual</label>
                        <?php foreach ($user as $d) { ?>
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="nama_mitra" value="<?php echo $d["nama"] ?>" disabled />
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="id" value="<?php echo $d["id_mitra"] ?>" hidden />
                        <?php } ?>
                    </div>
                    <div class="form-group">Nama Barang</label>
                        <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                        <select class="form-control" id="nama_kategori" name="nama_kategori" onChange="update_harga()">
                            <option value="" disabled selected>Pilih Ketegori Barang</option>
                            <?php foreach ($kategori as $kr) { ?>
                                <option id="<?php echo $kr["harga_dusan"]; ?>" value="<?php echo $kr["nama_kategori"]; ?>">
                                    <?php echo $kr["nama_kategori"]; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <input type="text" disabled id="harga_barang" class="form-control col-2" onkeyup="sum();">
                        <!-- mbatas option -->
                    </div>
                    <div class="form-group">Jumlah Barang</label>
                        <input type="text" class="form-control form-control-user" id="jumlah" name="jumlah" placeholder="Jumlah Barang" onkeyup="sum();" />
                    </div>
                    <div class="form-group">Harga Total</label>
                        <input type="text" class="form-control form-control-user" id="harga_total" name="harga_total" readonly />
                    </div>
                    <div class="form-group">Tanggal Jual</label>
                        <input type="text" id="datepicker" name="tgl_jual" id="tgl_jual" data-error="Tanggal harus di isi" class="form-control" placeholder="MM/DD/YYYY" required>
                    </div>
                    <div class="form-group">Alamat Transaksi</label>
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat Transaksi" />
                    </div>
                    <!-- Metode Pembayaran-->
                    <div class="form-group">
                        <label for="payment">Metode Pembayaran</label>
                        <input type="text" class="form-control form-control-user" id="metode" name="metode" value="Cash" readonly />
                    </div>

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary ">Pesan</button>
                        <a href="/penjualan/laporan_mitra" class="btn btn-default ">Cancel</a>
                    </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>