<html>

<head>
  <title>halaman Mitra</title>
</head>

<body>
  <?php $session = session() ?>
  <h4>Selamat datang Mitra !</h4>
  <?php echo $session->get('email') ?>
  <a href="/auth/login">Logout</a>

  <h1 align="center">Tabel Profil</h1>
  <table border="1" width="80%" align="center">
    <tr>
      <th>NOaaa</th>
      <th>Nama</th>
      <th>NIK</th>
      <th>no_telp</th>
      <th>Alamat</th>
      <th>jenis kelamin</th>
      <th>Email</th>
      <th>Status</th>
    </tr>
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


</body>

</html>