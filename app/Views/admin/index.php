<html>
    <head>
        <meta chartset="UTF-8">
        <title>Halaman Admin</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    </head>
    <body  style="width: 70%; margin: 0 auto; padding-top: 30px;">
        <?php $session = session()?>
        <h4>Selamat datang admin!</h4>
        <?php echo $session->get('email')?>
        <a href="/auth/logout">Logout</a>


        <!-- table -->
        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Menampilkan Data Diri Admin</h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 margin-tb">
			<table class="table table-bordered">
		        <tr>
		            <th>Nama</th>
		            <th>Email</th>
		            <th>no telp</th>
		            <th>jenis kelamin</th>
		        </tr>
		        	<?php foreach($user as $row):?>
		        <tr>
		        	<td><?=$row['nama'];?></td>
		            <td><?=$row['email'];?></td>
		            <td><?=$row['no_telp'];?></td>
		            <td><?=$row['jenis_kelamin'];?></td>
		        </tr>
		        <?php endforeach;?>
		    </table>
		</div>
	</div>

    <a href="/DataPegawai/tambahpegawai">Tambah Pegawai</a>
    </body>
</html>