<html>
    <head>
        <title>halaman admin</title>
    </head>
    <body>
        <?php $session = session() ?>
        <h4>Selamat datang Admin !</h4>
        <?php echo $session->get('email')?>
        <?php foreach ($user as $row) : ?>
                                        <tr>
                                            <td><?= $row['nama']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
        <a href="/auth/login">Logout</a>

<h1 align="center">Tabel Data Mitra</h1>
  <table border="1" width="80%" align="center">
    <tr>
      <th>NO</th>
      <th>Nama Suplayer</th>
      <th>Nama Barang</th>
      <th>Tanggal Masuk</th>
      <th>jumlah</th>
      <th>Harga</th>
    </tr>
    <?php
      $no = 1;
      foreach($barang as $d){
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $d["nama_sup"] ?></td>
      <td><?php echo $d["nama"] ?></td>
      <td><?php echo $d["tgl_masuk"] ?></td>
      <td><?php echo $d["jumlah"] ?></td>
      <td><?php echo $d["harga"] ?></td>
    </tr>
  <?php } ?>


    </body>
</html>