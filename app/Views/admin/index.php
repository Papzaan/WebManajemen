<html>
    <head>
        <title>Halaman Admin</title>
    </head>
    <body>
        <?php $session = session()?>
        <h4>Selamat datang admin!</h4>
        <?php echo $session->get('email')?>
        <a href="/auth/logout">Logout</a>
    </body>
</html>