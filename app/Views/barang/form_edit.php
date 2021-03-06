<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Edit Data Barang</h3>
        </div>
        <div class="box-body">
            <?php foreach ($barang as $d) { ?>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $p = @$_GET['p']; ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link <?php echo $p == '' || $p == 'tambah' ? 'active' : ''; ?>" href="/barang/edit_barang/<?php echo $d["id_barang"] ?>?p=tambah">Tambah</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link <?php echo $p == 'kurang' ? 'active' : ''; ?>" href="/barang/edit_barang/<?php echo $d["id_barang"] ?>?p=kurang">Kurang</a>
                    </li>

                </ul>
            <?php } ?>
            <!-- tambah/kurang -->
            <div class="form-group">

                <div class="tab-content" id="myTabContent">
                    <?php if ($p == '' || $p == 'tambah') { ?>
                        <div class="tab-pane fade show active">
                            <form class="user" method="post" action="/barang/update_barang">

                                <div class="form-group">
                                    <label for="nama_sup" class="control-label">Nama Supplier</label>
                                    <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                                    <?php foreach ($barang as $d) { ?>
                                        <input type="hidden" name="id_barang" id="id_barang" value="<?php echo $d["id_barang"] ?>">
                                        <select class="form-control" id="nama_sup" name="nama_sup">
                                            <option value="<?php echo $d["nama_sup"] ?>"><?php echo $d["nama_sup"] ?></option>
                                        <?php } ?>
                                        <?php foreach ($suplayer as $row) { ?>
                                            <option value="<?php echo $row["nama_sup"]; ?>">
                                                <?php echo $row["nama_sup"]; ?>
                                            </option>
                                        <?php } ?>
                                        </select>
                                        <!-- mbatas option -->
                                        <div class="help-block with-errors"></div>
                                </div>
                                <?php foreach ($barang as $d) { ?>
                                    <div class="form-group">
                                        <label for="nama_barang" class="control-label">Nama Barang</label>
                                        <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                                        <select class="form-control" id="nama_kategori" name="nama_kategori">
                                            <option value="<?php echo $d["nama_kategori"] ?>"><?php echo $d["nama_kategori"] ?></option>
                                            <?php foreach ($kategori as $kr) { ?>
                                                <option value="<?php echo $kr["nama_kategori"]; ?>">
                                                    <?php echo $kr["nama_kategori"]; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                        <!-- mbatas option -->
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori" class="control-label">Tanggal Masuk</label>
                                        <div class="input-group date" data-provide="datepicker">
                                            <input type="text" id="datepicker" name="tgl_masuk" id="tgl_masuk" data-error="harga harus di isi" class="form-control" value="<?php echo $d["tgl_masuk"] ?>" required>
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ukuran" class="control-label">Jumlah</label>
                                        <div class="input-group">
                                            <input type="text" name="jumlah" id="jumlah" data-error="harga harus di isi" class="form-control" value="<?php echo $d["jumlah"] ?>" readonly required>
                                            <span class="input-group-addon">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- tambah -->
                                    <input type="text" name="sum" id="sum" value="tambah" hidden required>
                                    <div class="form-group">
                                        <label for="ukuran" class="control-label">Tambah</label>

                                        <div class="input-group">
                                            <input type="text" name="jumlah_tambah" id="jumlah_tambah" data-error="harga harus di isi" placeholder="Tambah Barang" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
                                            <span class="input-group-addon">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga" class="control-label">Harga</label>
                                        <div class="input-group">
                                            <input type="text" name="harga" id="harga" data-error="harga harus di isi" class="form-control" value="<?php echo $d["harga"] ?>" required>
                                            <span class="input-group-addon">
                                            </span>
                                            </span>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                <?php } ?>
                                <div class="box-footer">
                                    <button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
                                    <a href="<?php echo base_url() ?>/barang/tampil" class="btn btn-default ">Cancel</a>
                                </div>
                            </form>

                        </div>
                    <?php } elseif ($p == 'kurang') { ?>
                        <div class="tab-pane fade show active">
                            <form class="user" method="post" action="/barang/update_barang">

                                <div class="form-group">
                                    <label for="nama_sup" class="control-label">Nama Supplier</label>
                                    <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                                    <?php foreach ($barang as $d) { ?>
                                        <input type="hidden" name="id_barang" id="id_barang" value="<?php echo $d["id_barang"] ?>">
                                        <select class="form-control" id="nama_sup" name="nama_sup">
                                            <option value="<?php echo $d["nama_sup"] ?>"><?php echo $d["nama_sup"] ?></option>
                                        <?php } ?>
                                        <?php foreach ($suplayer as $row) { ?>
                                            <option value="<?php echo $row["nama_sup"]; ?>">
                                                <?php echo $row["nama_sup"]; ?>
                                            </option>
                                        <?php } ?>
                                        </select>
                                        <!-- mbatas option -->
                                        <div class="help-block with-errors"></div>
                                </div>
                                <?php foreach ($barang as $d) { ?>
                                    <div class="form-group">
                                        <label for="nama_barang" class="control-label">Nama Barang</label>
                                        <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                                        <select class="form-control" id="nama_kategori" name="nama_kategori">
                                            <option value="<?php echo $d["nama_kategori"] ?>"><?php echo $d["nama_kategori"] ?></option>
                                            <?php foreach ($kategori as $kr) { ?>
                                                <option value="<?php echo $kr["nama_kategori"]; ?>">
                                                    <?php echo $kr["nama_kategori"]; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                        <!-- mbatas option -->
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori" class="control-label">Tanggal Masuk</label>
                                        <div class="input-group date" data-provide="datepicker">
                                            <input type="text" id="datepicker" name="tgl_masuk" id="tgl_masuk" data-error="harga harus di isi" class="form-control" value="<?php echo $d["tgl_masuk"] ?>" required>
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ukuran" class="control-label">Jumlah</label>
                                        <div class="input-group">
                                            <input type="text" name="jumlah" id="jumlah" data-error="harga harus di isi" class="form-control" value="<?php echo $d["jumlah"] ?>" readonly required>
                                            <span class="input-group-addon">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- kurang -->
                                    <input type="text" name="sum" id="sum" value="kurang" hidden required>
                                    <div class="form-group">
                                        <label for="ukuran" class="control-label">Kurang</label>

                                        <div class="input-group">
                                            <input type="text" name="jumlah_tambah" id="jumlah_tambah" data-error="harga harus di isi" onkeypress="return event.charCode >= 48 && event.charCode <=57" placeholder="Kurang Barang" class="form-control" required>
                                            <span class="input-group-addon">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga" class="control-label">Harga</label>
                                        <div class="input-group">
                                            <input type="text" name="harga" id="harga" data-error="harga harus di isi" class="form-control" value="<?php echo $d["harga"] ?>" required>
                                            <span class="input-group-addon">
                                            </span>
                                            </span>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                <?php } ?>
                                <div class="box-footer">
                                    <button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
                                    <a href="<?php echo base_url() ?>/barang/tampil" class="btn btn-default ">Cancel</a>
                                </div>
                            </form>
                            <!-- selector -->
                        </div>
                    <?php } else { ?>
                        <div class="tab-pane fade show active">Contact</div>
                    <?php } ?>
                </div>

            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>