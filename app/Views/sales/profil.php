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

      <?php
      $no = 1;
      foreach ($user as $d) {
      ?>
      <?php } ?>
      <label for="nama">Nama</label>
      <label for="">:</label>
      <?php echo $d["nama"] ?> <br>
      <label for="nik">NIK :</label>
      <?php echo $d["nik"] ?> <br>
      <label for="no_telp">No. Telp :</label>
      <?php echo $d["no_telp"] ?> <br>
      <label for="alamat">Alamat :</label>
      <?php echo $d["alamat"] ?><br>
      <label for="jenis_kelamin">Jenis Kelamin : </label>
      <?php echo $d["jenis_kelamin"] ?><br>
      <label for="email"> Email:</label>
      <?php echo $d["email"] ?>




    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>