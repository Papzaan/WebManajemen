<html>
    <head>
        <title>halaman Sales</title>
    </head>
    <body>
        <?php $session = session() ?>
        <h4>Selamat datang Sales!</h4>
        <?php echo $session->get('email')?>
        <a href="/auth/login">Logout</a>


  <h1 align="center">Tabel Profil</h1>
  <table border="1" width="80%" align="center">
    <tr>
      <th>NO</th>
      <th>Nama</th>
      <th>NIK</th>
      <th>no_telp</th>
      <th>Alamat</th>
      <th>jenis kelamin</th>
      <th>Status</th>
    </tr>
    <?php
      $no = 1;
      foreach($user as $d){
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $d["nama"] ?></td>
      <td><?php echo $d["nik"] ?></td>
      <td><?php echo $d["no_telp"] ?></td>
      <td><?php echo $d["alamat"] ?></td>
      <td><?php echo $d["jenis_kelamin"] ?></td>
    </tr>
  <?php } ?>
        

    </body>
</html>