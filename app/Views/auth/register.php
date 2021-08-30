<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?php base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="<?php base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <!-- tab -->
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <?php $p = @$_GET['p']; ?>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link <?php echo $p == '' || $p == 'mitra' ? 'active' : ''; ?>" href="/auth/register?p=mitra">Mitra</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link <?php echo $p == 'sales' ? 'active' : ''; ?>" href="/auth/register?p=sales">Sales</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <?php if ($p == '' || $p == 'mitra') { ?>
                                    <div class="tab-pane fade show active">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Daftar Mitra</h1>
                                        </div>
                                        <form class="user" method="post" action="/auth/valid_register">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" name="nama" id="exampleFirstName" placeholder="Nama Lengkap">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user" name="nik" id="exampleLastName" placeholder="NIK">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <select class="form-control col-md-12" id="jk_user" name="jenis_kelamin">
                                                            <option value="" disabled selected>Jenis kelamin</option>
                                                            <option value="1">Laki - laki</option>
                                                            <option value="2">Perempuan</option>
                                                        </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user" name="no_telp" id="exampleLastName" placeholder="No Telpon">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputPassword" placeholder="email">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control form-control-user" name="password" id="exampleRepeatPassword" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="mitra" readonly value="mitra"/>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block" name="regismitra">Daftar Sebagai Mitra</button>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="#">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="#">Already have an account? Login!</a>
                                        </div>
                                    </div>
                                <?php } elseif ($p == 'sales') { ?>
                                    <div class="tab-pane fade show active">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Daftar Sales</h1>
                                        </div>
                                        <form class="user">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                                </div>
                                            </div>
                                            <a href="login.html" class="btn btn-primary btn-user btn-block">
                                                Register Account
                                            </a>
                                            <hr>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="login.html">Already have an account? Login!</a>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="tab-pane fade show active">Contact</div>
                                <?php } ?>
                            </div>
                            <!-- tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php base_url(); ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>