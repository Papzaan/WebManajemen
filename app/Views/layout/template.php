<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo $title ?> </title>

    <!-- Custom fonts for this template -->
    <link href="<?php base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/css/select2.min.css">

    <!-- Custom styles for this page -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url(); ?>/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""><img src="<?php base_url(); ?>/Logo/Logo ASL.png" style="width:42px;height:42px;"></i>
                </div>
                <div class="sidebar-brand-text mx-3">AMBA <sup>ASL</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->
            <?php $this->session = session(); ?>
            <?php if ($this->session->get('status') == 1) {

            ?>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Master Data</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?php echo base_url() ?>/barang/tampil">Barang Masuk</a>
                            <a class="collapse-item" href="<?php echo base_url() ?>/pesanan/pesanan_mitra">Pesanan Mitra</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Data User</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="/datamitra/tampil">Mitra</a>
                            <a class="collapse-item" href="/datasales/tampil">Sales</a>
                            <a class="collapse-item" href="/datasalmit/tampil_salmit">Sales Mitra</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="/datasup/supplier">
                        <i class="fas fa-fw fa-user-circle"></i>
                        <span>Supplier</span></a>
                </li>
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="/barang/stok">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Stok</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-book"></i>
                        <span>Laporan</span>
                    </a>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?php echo base_url() ?>/penjualan/catatan">Laporan Penjualan</a>
                            <a class="collapse-item" href="<?php echo base_url() ?>/penjualan/laporan_penmitra">Laporan Penjualan Mitra</a>
                            <a class="collapse-item" href="<?php echo base_url() ?>/penjualan/laporan_pensales">Laporan Penjualan Sales</a>
                            <a class="collapse-item" href="<?php echo base_url() ?>/penjualan/laporan_pensalmit">Laporan Sales-Mitra</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - penjualan ke Customer -->
                <li class="nav-item">
                    <a class="nav-link" href="/penjualan">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Penjualan Ke Customer</span></a>
                </li>
                 <!-- Nav Item - penjualan ke Outlet -->
                 <li class="nav-item">
                    <a class="nav-link" href="/penjualan/penjualan_ke_outlet">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Penjualan Ke Outlet</span></a>
                </li>



            <?php } ?>

            <?php if ($this->session->get('status') == 2) {
                $this->session = session();
            ?>

                <!-- Nav Item - stok mitra -->
                <li class="nav-item">
                    <a class="nav-link" href="/barang_mitra/stok">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Stok</span></a>
                </li>
                <!-- laporan Penjualan-->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-book"></i>
                        <span>Laporan</span>
                    </a>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?php echo base_url() ?>/penjualan/laporan_mitra">Laporan Penjualan</a>
                            <a class="collapse-item" href="<?php echo base_url() ?>/penjualan/laporan_salesnya_mitra">Laporan Penjualan Sales</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="/penjualan/penjualan_user">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Penjualan</span></a>
                </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="/datasalmit/tampil">
                        <i class="fa fa-user"></i>
                        <span>Data Sales</span></a>
                </li>
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="/mitra/pesanan_mitra">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Pesanan Saya</span></a>
                </li>

            <?php } ?>

            <?php if ($this->session->get('status') == 3) {
                $this->session = session();
            ?>

                <!-- Nav Sales -->
                <li class="nav-item">
                    <a class="nav-link" href="/penjualan/penjualan_user">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Penjualan</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/penjualan/laporan_sales">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span>Catatan Penjualan Sales</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pesanan/transaksi_mitra">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span>Catatan Transaksi Mitra</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/barang/stok">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Stok</span></a>
                </li>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">

                </div>
                </li>

            <?php } ?>
            <?php if ($this->session->get('status') == 4) {
                $this->session = session();
            ?>

                <!-- Nav Sales Mitra -->
                <li class="nav-item">
                    <a class="nav-link" href="/penjualan/penjualan_user">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Penjualan</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/penjualan/laporan_sales_mitra">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span>Catatan Penjualan Sales</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/barang_mitra/stok">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Stok</span></a>
                </li>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">

                </div>
                </li>

            <?php } ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Bayar Bang</div>
                                        <span class="font-weight-bold">Nanoxy</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Profile Admin -->
                        <?php if ($this->session->get('status') == 1) {
                            $this->session = session();
                        ?>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php foreach ($user as $row) : ?>
                                            <tr>
                                                <td><?= $row['nama']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </span>
                                    <img class="img-profile rounded-circle" src="<?php echo base_url() ?>/assets/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>

                            </li>
                        <?php } ?>
                        <!-- Profile Profile -->

                        <!-- Profile Mitra -->
                        <?php if ($this->session->get('status') == 2) {
                            $this->session = session();
                        ?>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php foreach ($user as $row) : ?>
                                            <tr>
                                                <td><?= $row['nama']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </span>
                                    <img class="img-profile rounded-circle" src="<?php echo base_url() ?>/assets/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="/mitra/profile">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>

                            </li>
                        <?php } ?>
                        <!-- Profile Profile -->


                        <!-- Profile Sales -->
                        <?php if ($this->session->get('status') == 3) {
                            $this->session = session();
                        ?>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small text-capitalize"><?php foreach ($user as $row) : ?>
                                            <tr>
                                                <td><?= $row['nama_se']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </span>
                                    <img class="img-profile rounded-circle" src="<?php echo base_url() ?>/assets/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="/sales/profile">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>

                            </li>
                        <?php } ?>
                        <!-- Profile Sales -->

                        <!-- Profile Salesnya Mitra-->
                        <?php if ($this->session->get('status') == 4) {
                            $this->session = session();
                        ?>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php foreach ($user as $row) : ?>
                                            <tr>
                                                <td><?= $row['nama_salmit']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </span>
                                    <img class="img-profile rounded-circle" src="<?php echo base_url() ?>/assets/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="/salesnyamitra/profile">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>

                            </li>
                        <?php } ?>
                        <!-- Profile Salesnya mitra -->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <?= $this->renderSection('content'); ?>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin Inggin Keluar?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">??</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="/auth/logout">Logout</a>
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

        <!-- Page level custom scripts -->

        <!-- Page level plugins -->
        <script src="<?php base_url(); ?>/assets/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?php base_url(); ?>/assets/js/demo/chart-bar-demo.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script src="<?php base_url(); ?>/assets/js/jquery-1.12.4.js"></script>
        <script src="<?php base_url(); ?>/assets/js/jquery-ui.js"></script>


        <script src="<?php base_url(); ?>/assets/js/select2.min.js"></script>
        <script>
            $(".theSelect").select2();
        </script>
        <script>
            var date = $('#datepicker').datepicker({
                dateFormat: 'yy-mm-dd'
            }).val();
        </script>
        <!-- pembayaran metode-->
        <script>
            $(function() {
                $('#rek').hide();
                $('#payment').change(function() {
                    if ($('#payment').val() == 'Transfer') {
                        $('#rek').show();
                        createByJson();
                    } else {
                        $('#rek').hide();
                    }
                });
            });

            function update() {
                var select = document.getElementById('norekk');
                var option = select.options[select.selectedIndex];

                document.getElementById('value').value = option.value;
            }

            update();
        </script>
        <!-- get harga barang -->
        <script>
            $("#nama_kategori").change(function() {
                var id = $(this).children(":selected").attr("id");
            });

            function update_harga() {
                var select = document.getElementById('nama_kategori');
                var option = select.options[select.selectedIndex];
                document.getElementById('harga_barang').value = option.id;
            }

            update_harga();
        </script>
        <!-- jumlah harga -->
        <script>
            function sum() {
                var txtFirstNumberValue = document.getElementById('harga_barang').value;
                var txtSecondNumberValue = document.getElementById('jumlah').value;
                var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
                if (!isNaN(result)) {
                    document.getElementById('harga_total').value = result;
                }
            }
        </script>

        <!-- jumlah harga Barang dari supplier-->
        <script>
            function sumbarang() {
                var txtFirstNumberValue = document.getElementById('harga_karton').value;
                var txtSecondNumberValue = document.getElementById('jumlah').value;
                var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
                if (!isNaN(result)) {
                    document.getElementById('harga').value = result;
                }
            }
        </script>

        <!-- get nik -->
        <script>
            $("#nama_cus").change(function() {
                var id = $(this).children(":selected").attr("id");
            });

            function update_nik() {
                var select = document.getElementById('nama_cus');
                var option = select.options[select.selectedIndex];
                document.getElementById('no_telp_customer').value = option.id;
            }

            update_harga();
        </script>




        <script>
            google.charts.load('visualization', "1", {
                packages: ['corechart']
            });

            google.charts.setOnLoadCallback(drawBarChart);
            // Pie Chart
            google.charts.setOnLoadCallback(showBarChart);

            function drawBarChart() {
                var data = google.visualization.arrayToDataTable([
                    ['nama_kategori', 'kategori Count'],
                    // <?php
                        // foreach ($productData as $row) {
                        //     echo "['" . $row['nama_kategori'] . "'," . $row['stok'] . "],";
                        // }
                        // 
                        ?>
                ]);
                var options = {

                    is2D: true,
                };
                var chart = new google.visualization.PieChart(document.getElementById('myPieChart1'));
                chart.draw(data, options);
            }
        </script>

</body>

</html>