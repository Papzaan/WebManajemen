<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h5>Tambah Pegawai</h5>
    <form method="post" action="/auth/valid_register">
            Username: <br>
            <input type="text" name="email" required><br>
            Password: <br>
            <input type="password" name="password" required><br>
            Konfirmasi Password: <br>
            <input type="password" name="confirm" required><br>
            <button type="submit" name="login">Register</button>
        </form>
    </div>
</body>
</html>