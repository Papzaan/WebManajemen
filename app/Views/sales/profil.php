<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Profil Mitra</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->

    </div>
    <div class="card-body">
      <?php $no = 1;
      foreach ($user as $d) { ?>
      <?php } ?>
      <div class="row m-l-0 m-r-0">
        <div class="col-sm-4 bg-c-lite-green user-profile">
          <div class="card-block text-center text-black">
            <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
            <h6 class="f-w-600"><?php echo $d["nama"] ?></h6>
            <p><?php echo $d["jenis_kelamin"] ?></p>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="card-block">
            <h6 class="m-b-20 p-b-5 b-b-default f-w-600"> <b>Information</b> </h6>
            <div class="row">
              <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Email</p>
                <h6 class="text-muted f-w-400"><?php echo $d["email"] ?></h6>
              </div>
              <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Phone</p>
                <h6 class="text-muted f-w-400"><?php echo $d["no_telp"] ?></h6>
              </div>
            </div>
            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
            <div class="row">
              <div class="col-sm-6">
                <p class="m-b-10 f-w-600">NIK</p>
                <h6 class="text-muted f-w-400"><?php echo $d["nik"] ?></h6>
              </div>
              <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Alamat</p>
                <h6 class="text-muted f-w-400"><?php echo $d["alamat"] ?></h6>
              </div>
            </div>
            <ul class="social-link list-unstyled m-t-40 m-b-10">
              <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
              <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
              <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>




    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>