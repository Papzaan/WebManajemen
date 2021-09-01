<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Mitra</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
      <a href="#"><button class="btn btn-primary float-right" type="button">
          Tambah Data <i class="fas fa-plus"></i>
        </button></a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>NO</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>no_telp</th>
              <th>Alamat</th>
              <th>jenis kelamin</th>
              <th>Email</th>
              <th>Status</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $no = 1;
            foreach ($user as $d) {
            ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d["nama"] ?></td>
                <td><?php echo $d["nik"] ?></td>
                <td><?php echo $d["no_telp"] ?></td>
                <td><?php echo $d["alamat"] ?></td>
                <td><?php echo $d["jenis_kelamin"] ?></td>
                <td><?php echo $d["email"] ?></td>
              </tr>
            <?php } ?>


            </tr>

            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>