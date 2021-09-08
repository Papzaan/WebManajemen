<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class='box box-primary'>
        <div class='box-header  with-border'>
            <h3 class='box-title'>Update Mitra</h3>
        </div>
        <div class="box-body">
            <form class="user" method="post" action="/datamitra/update_mitra">
            <?php foreach ($mitra as $d) { ?>
                <input type="hidden" name="id_mitra" id="id_mitra" value="<?php echo $d["id_mitra"] ?>">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="nama" id="exampleFirstName" placeholder="Nama Lengkap" value="<?php echo $d["nama"] ?>">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="nik" id="exampleLastName" placeholder="NIK" value="<?php echo $d["nik"] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <select class="form-control col-md-12" name="jk">
                            <option value="<?php echo $d["jenis_kelamin"] ?>"><?php echo $d["jenis_kelamin"] ?></option>
                            <option value="laki - laki">Laki - laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="no_telp" id="exampleLastName" placeholder="No Telpon" value="<?php echo $d["no_telp"] ?>">
                    </div>
                </div>
            <?php } ?>    
            <?php foreach ($useredit as $u) { ?>
                <div class="form-group">
                    <!--<div class="col-sm-6 mb-3 mb-sm-0">-->
                        <input type="text" class="form-control form-control-user" name="email" id="exampleInputPassword" placeholder="email" value="<?php echo $u["email"] ?>">
                    <!--</div>-->
                    <!--<div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" name="password" id="exampleRepeatPassword" placeholder="Password" value="">
                    </div>-->
                </div>
            <?php } ?> 
            <?php foreach ($mitra as $d) { ?>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $d["alamat"] ?>"/>
                </div>
            <?php } ?>  
                <!--<div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="pegawai" hidden value="mitra" />
                </div>-->
                <button type="submit" class="btn btn-primary btn-user btn-block" name="regismitra">Update Data Mitra</button>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>