<html>
    <head>
        <title>halaman user</title>
    </head>
    <body>
        <?php $session = session() ?>
        <h4>Selamat datang user!</h4>
        <?php echo $session->get('email')?>
        <a href="/auth/login">Logout</a>
    </body>
</html>