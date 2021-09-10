<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Penjualan Produk</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/barang/aksi_input">
                <div class="form-group">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="nama" class="control-label">Nama Customer</label>
                        <input type="text" class="form-control form-control-user" name="nama_customer" id="exampleFirstName" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-sm-6">
                    <label for="nama" class="control-label">NIK Customer</label>
                        <input type="text" class="form-control form-control-user" name="nik" id="exampleLastName" placeholder="NIK Customer">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="nama" class="control-label">Pilih Jenis Kelamin</label>
                            <select class="form-control  col-md-12" name="jk">
                                <option value="" disabled selected>Jenis kelamin</option>
                                <option value="laki - laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                    </div>
                    <div class="col-sm-6">
                    <label for="nama" class="control-label">No Telpon Customer</label>
                        <input type="text" class="form-control form-control-user" name="no_telp" id="exampleLastName" placeholder="No Telpon Customer">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="nama" class="control-label">Foto KTP Customer</label>
                        <input type="text" class="form-control form-control-user" name="email" id="exampleInputPassword" placeholder="Foto KTP Customer">
                    </div>
                    <div class="col-sm-6">
                    <label for="nama" class="control-label">Foto Customer</label>
                        <input type="text" class="form-control form-control-user" name="password" id="exampleRepeatPassword" placeholder="Foto Customer">
                    </div>
                </div>
                <div class="form-group">Alamat Customer</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="alamat" placeholder="Alamat Customer"/>
                </div>
                <div class="form-group">Nama Penjual</label>
                    <?php foreach ($user as $d) {?>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="nama_admin" value="<?php echo $d["nama"] ?>" disabled/>
                    <?php } ?>
                </div>
                <div class="form-group">Tanggal Jual</label>
                    <input type="text" id="datepicker" data-date-format="yyyy-mm-dd" name="tgl_masuk" id="tgl_masuk" data-error="Tanggal harus di isi" class="form-control" placeholder="MM/DD/YYYY" required>
                </div>
                <div class="form-group">Jumlah Barang</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="alamat" placeholder="Jumlah Barang"/>
                </div>
                <div class="form-group">Harga Total</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="alamat" placeholder="Harga Total"/>
                </div>
                <div class="form-group">Alamat Transaksi</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="alamat" placeholder="Alamat Transaksi"/>
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