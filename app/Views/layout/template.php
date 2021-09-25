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

    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/css/jquery-ui.css">




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
                            <a class="collapse-item" href="#">Kategori</a>
                            <a class="collapse-item" href="<?php echo base_url() ?>/barang/tampil">Barang</a>
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
                            <a class="collapse-item" href="#">Laporan Sales-Mitra</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="/penjualan">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Penjualan</span></a>
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
                <!-- Laporan Penjualan Mitra -->
                <li class="nav-item">
                    <a class="nav-link" href="/penjualan/laporan_mitra">
                        <i class="fas fa-fw fa-book"></i>
                        <span>Laporan Penjualan</span></a>
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
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">

                </div>
                </li>

            <?php } ?>
            <?php if ($this->session->get('status') == 4) {
                $this->session = session();
            ?>

                <!-- Nav Sales -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Penjualan</span></a>
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
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart fa-fw"></i>
                                 Counter - Alerts -->
                        <!-- <span class="badge badge-danger badge-counter">3+</span>
                            </a> -->
                        <!-- Dropdown - Alerts -->
                        <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Keranjang
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Nonoxy</div>
                                        <span class="font-weight-bold">300 ML!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Lihat Keranjang</a>
                            </div> -->
                        <!-- </li> -->

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
                                                <td><?= $row['nama']; ?></td>
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
                            <span aria-hidden="true">×</span>
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
        <script src="<?php base_url(); ?>/assets/js/jquery-1.12.4.js"></script>
        <script src="<?php base_url(); ?>/assets/js/demo/chart-bar-demo.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script src="<?php base_url(); ?>/assets/js/jquery-ui.js"></script>


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
        <!-- get nik -->
        <script>
            $("#nama_cus").change(function() {
                var id = $(this).children(":selected").attr("id");
            });

            function update_nik() {
                var select = document.getElementById('nama_cus');
                var option = select.options[select.selectedIndex];
                document.getElementById('nik_customer').value = option.id;
            }

            update_harga();
        </script>

        <!-- Tabel Sales-->
        <script>
            $(document).ready(function() {
                $('#dataTableSales').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                            extend: 'pdfHtml5',
                            oriented: 'portrait',
                            pageSize: 'legal',
                            title: 'Data Barang Anugrah Semesta Lampung',
                            download: 'open',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5],
                            },
                            customize: function(doc) {
                                doc.styles.tableBodyEven.alignment = 'center';
                                doc.styles.tableBodyOdd.alignment = 'center';


                            },
                        },

                    ]
                });
            });
        </script>

        <!-- Tabel Catatan Penjualan-->
        <script>
            $(document).ready(function() {
                $('#dataTableCatatanPenjualan').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                            extend: 'pdfHtml5',
                            oriented: 'portrait',
                            pageSize: 'legal',
                            title: 'Data Barang Anugrah Semesta Lampung',
                            download: 'open',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5, 6],
                            },
                            customize: function(doc) {

                                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                                doc.styles.tableBodyEven.alignment = 'center';
                                doc.styles.tableBodyOdd.alignment = 'center';


                            },
                        },

                    ]
                });
            });
        </script>
        <!--  End Tabel  Catatan Penjualan -->

        <!-- Tabel Barang -->
        <script>
            $(document).ready(function() {
                $('#dataTableBarang').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                            extend: 'pdfHtml5',
                            oriented: 'portrait',
                            pageSize: 'legal',
                            title: 'Data Barang',
                            download: 'open',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5],
                            },
                            customize: function(doc) {
                                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                                doc.styles.tableBodyEven.alignment = 'center';
                                doc.styles.tableBodyOdd.alignment = 'center';
                                doc.content.splice( 0, 0, {
                                margin: [ 0, 0, 0, 12 ],
                                alignment: 'center',
                                image: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiMAAABoCAYAAAAjKvA3AAAACXBIWXMAADXfAAA13wHXVswAAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAIABJREFUeJzsnXecFEX6uJ/qmdm8y0ZAkkRBwhIVxQQSFHPC80TvDOcZ8cwB9FzFrGcAE+aIJ3hnuDOjqCQDSEYykhfYZXfZPNPd9fvjnWHCzmxe8L6/fvjMh53u6urq6p6ut956Azg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg0Hg3qYLfBwcHBwcGh5dD/58a5/6kL2kqHxNSkqt5a6b5KcRioLhraA9kaUg2I06AUYIOtlKrSWu9TqF1oe6tSxkYL1niUXpZaWrBBgXWwr8nBwcHBwQFg3IwZrrXrD+mmLZ2L4eqpNV0NdEeNboMy0rDtBJQy/MU1aK9GlSooALUd9CZgrXbpFSm7XasWPDms8mBeT0P4XQsjmg6J+5K9x1uGPcqwOU4rOijUKq30Cq1ZY2h7k6XY7sOzx1fmKe3AtmoFNsBscPfJyUkwyuxWWqk2bhcdsOmmFL1sTX8UHUEvR/GdZamvsisKfgkc6+Dg4ODg0OLkaaOve94gQzEarU9Aq36gtyplLLW1Xq1cbEDb25R27zLN6pIcqPo2b4QZOPbotAXx5ft0qjJ0Dkq1tw3V2bDtXij6auiNYhuaOUoZs5IS+X7BTb9f4eR3J4xoOieUpJSfrrHP16hhCr1AKfWlAd89UVqwLq+ZBAZNn7i9aTsHKe0aobQ+CUVnrdUnKN7NKN0zT4FujvM4ODg4ODjsR2vV/4F5x2j0H0Gdila/Yegv0Myu2LVv8fqpp1Q3y3ny8oxc16ge2jBOUNoeg+ZoFAs0+r0s0/zPt3kjqprlPM3E70YYKUjJOtwF14A6C8W32lLvFla0+roH65vnxtTBttTUrEQSznRpfaGGjlrpV9x4X0krLS08EOd3cHBwcPi/S68HZ2V57LjLFepyMLYqzTvVrsqPV08cdUDGmO4TPo1PbJ02EvijQg/XSn2otfXcirtP+PVAnL8uDrowUpjaephh23ei6Gqgn02L02+rvXv3Hcw2Fbdq0wXTvlIrfSHoD7VlP55ZWbTlYLbJwcHBweF/jz55czsZHnWL0vospdR0bbunLbt76KaD2aaheT+kVbqti5TS12qtNtqoh1bcNWz+wWzTQRNGipJyBmrDfsjQKsMwuD+1tOC/v7elEd2mTXJxmXUFcD1Kf+LGPTm1bNfug90uBwcHB4ffN7l581prt75bwanAFOJTX1p2a//yg92uMLRWuQ/8cBrYd4FdhNITl006/peD0ZQDLozsS22XbWvvgzYcq5SelF5a+OHvTQiJZAftkpJSqydo1NXYPL2hvOCZIeA72O1ycHBwcPh9MTxvtrvQ45mgNH/TSj8f50ucuihvSMXBbletaK36PzD3LBt1v0LN8yTET1x0y5CCA9mEAymMqL3JWeMVTFaoZ1uVF0xR4D2A528ypSltWpvafBilBiibv6RXFBwUCdLBwcHB4fdH7gMLBmFbLyullmiTO5blHfM/pUnvkzcjzuVudz1wrVLq7qWTjnmHA6QsOCDCyL7U9lmW9r4IOk25XH9NL9l1UNfLmkpxctZIlHpOo95KL9vzkBOvxMHBweH/X8bN0K7Va+feqZS6WNv62uV3HzfrYLepKeRO/q4LyvUiin1e5fnr6olDW9zI1qi7SNPYm9r6GEtX/4Dm+/SygpP+1wURgPTywq+tOPsIlD6sOCX7q7LknLYHu00ODg4ODgeePo/+1HbN2nlfKYzDEn3uI/7XBRGAZXefsGmZOesk0N/H274fBtz3/TEHu01NYm9K9pVFKdlrS9KyjjjYbWkpClOzryhKyV5XkvR/9xodHBwcHGoy4L55R+TeP3d9v8nfX3Gw29JSyDXOW9t/8twrW/I8LbJMo8EoTs1+FM2R1bjOa9tUD5Thee6OcW16WYbdD5v2Ciyt1HJLly/Y9eWtB906uSQt8yjbNt6x0LdmlxX++2C3x8HBwcGhZek/ee45WvEYMH7ZXcf+cKDOmzd7U0JyVuLF8YZxNi6V7bZ1YbXX/qLSa741cWiHFllOyc2b1xqPfl9r/fNy89hbyVPNHq282YURDe7i1OxXldaJrcpSL1b81qgob+1HPpOlXOos4DQNJwAZUU5WidJfK9Q/7Xj3Bzv+c+VBs1gubtWmi21Z/zUUT6aXFrx8sNrh4ODg4NCy5D4w9y9ac6PSntMOZMyQx3/ZcagR5/4o0WX0t9EoDUkuRWqcm3Kvb+/2suqb7xzc4Q1awOi0c97shFbuuDc1dlWmaV62Pyx9M9GswogGT3FK1nS0KkkvL7iyMYad7Uc9dxSGvhn0GaDiGnBokUK97FKuJzd/ceXOhp63OchPadM6HutzjX41s6zwmYPRBgcHBweHlqPf5DnXKmVchsnYA+ktk7dwR1JqnOtHt2H0rbRsGbw12BoUNh2T40nzKNbvrcq7cfAh97ZEG8bNmOFas7bdNJRq5cmOv3DRlUOaLcRFswkjM8A1JiX7LQ3l6WUFVzY46dzwPHe7uOwnFOq6prSrb/tt5Ulx1XkfHJL2BHl5BzzxXUlaWqZtx81SSj2bXrrnlQN9fgcHBweHliF38tzLUVxnJRkjV940bO+BPPejy3bd5jGMR6ptjRtol+TCYxjsqfSxt9zCRtMuyU12vFsv2ll24eTjO/2zRRqSl2fkuke/AKQsW7r9Ymae3yzepM3mTTM6JecpgK/KCq5qTPbb9nGtn1WoCTRRQFqxvUOy1+d57JryrZ+1H/lGVlPqagyt9u3bW43rZFvrm4tSs848AKd0ATlA4gE4l8OBxwPM8H/ea+a63UC2/+Np5rodHP5P0e/+eWei9M3Eq5MOtCCitVZo+xKvZZPqghPbJTMgK4merRI4qnUyQ9smk+RSbC7xsrvCq9omu5+589N1OS3SmLw8e5k57CqA/v3bPdVc1TaLMFKUnH0j6MNblRVccn5jlmZOeu5U0H9tjrYALNnWiR82dRtz0bAvfs4959FBzVVvfWlbtmu34XKdilZPFLSMl00ycBPwExI4bjdQAeQDrwB9/OWOBjb4P+uBTrXU6fbXFyh/eBPaNzykng1AvybU9f87BjAu5NNUFDAe+B4oA/b4P2XAz8BdwAEX4g8SLsQWLQNIa8HzXELwt+DYk/0PMuC+eUcopZ9Ax5267NYDH8jsnfV7U21c3RUwJCeJeMOF1wbT1vhsTaLbYGBOEq08BusKK/EolVXl4qYWa1Cesi0z/RKNPrzfA3NvbI4qmyyMFCZnjkHxF+XyjWt0RFWt72pqOyLZta8V//rlyC4XHfHdNx3GPXHAtQbpJbs2uZR9kdtQ03c3bxySwcBK4B/AEYTfwzbAZcAS4A7gB8AEugLdgKtrqfccf31dkcGpKZkcb/HXE/i03I/CoSEo4B3gbeA4ID5kXxwwBJgM3Hbgm3ZQ6APs9X9+asHztCL4W3BiEv2P0SdvdlvL0NO1UhcdrAR3u/dUuJXWRptEN8luFz7bxmfZVFsWXhO8po1pag5LTyDFZfDrrkpSDHVp3oyVDbG7bBAr8/p4tYtxaP7Sf/K8MU2tr0nCSGFiZgcDNc3GHpdeUlLUmDo6jp3SDdTQprQjFpU+D8kebytK4nJbov66SCvdu8BSPOpR+h0ts7Cm0huYBRzq/66B+cA04E3gN/92N3A90BqYGnL8X4i9nHN9yN9PN6GNhwOnRGz7I3BIE+p0aB7+gNwLEA3me4jgOAl4HRFCNc7s3cEBkMiqLrfnHbT96PKJxyw4WO248egORVrrtYYCn6XxWiKMeC2F16fx+my8pk2VZdGlVQK2aVJQZrbZrIwhLdmu5XceV+Q27HFa6Wl97/+uY1PqarQwosEwXMabwN+zyvauamw9tukeDbrFwtIrpfFZ7r4tVX9dZJUWvATsLEnJuaOJVSngJSDd/307sgxzDHAV8GegO3ArsA44FtgFvAGU+I/JBi6IUvcQfz2Bet9vQjtvIGj3E4hEGA9cF6P8w8BX/k9P4GZgLqLSXurfH+nWfXLIMdH69ZWQ/V0j9nUCHgd+8Z9jAdJnHUKOeSJKnQOR/l/mP24+cA81lzR6htRzD9DL356VBPu4AzAR+AJY66/vZ+BR/77a6IQImMv9x30PXEH9bK1OD/n7KeRZ+AfwIHAp0BERJNdFHGcggsxHwGp/mz8BLqamkH0Zwes/yd+2b/1tXQj8HUjylz3XX89aYA3STz1itD0D6bPv/XWtAF5FtHmRePzn/QBY7K9/jr/8Wf7ruRb4W8gxOciz9jCiNQpwGKIt+gZZ6twAzAPupeWWszKACUh//0rwt/ACEO1d9ibBPj8Eeb6X+tv7OXC2v1wqcDeiMQ08cxOBhIj6/hJS32ikr+b4j1kMPElwQhSgd8gxz0Zp470h+4eHbA/9rbZFfjOB5eKF/vbGmkCdCPwTeSbXAf9Bnt+zQ+o8J8ax9WLNuvl3KNi5/O7jX2pKPU1FKaVNbd+9fZ/X2llejdey8Vp+IcSyqDZNqkyb6mqNz7RpkxxHRbWFt9o8uqXbtnji8asU6u8K15vk6UbLFO7GHlicnH2Dgt3p5YVvNbYOAAw9umXT8Gjatippt6slT1FXCzzWtfhcPxUnZX/WhOR6Q4Fh/r9t5Af3c0QZC3kRTSG4ZFaKvIQD63oTgNcijgvVijxP4zMS5yADFMBWZBa+GRl8rkQGvcggdQOBUf6/PwO6ROzPRa51KFDs39Yu5Jj8KO04mqDNS2rI9jGIoBW6rStwFHCR/1wQvnwBcLu/7UbEcUcjguBpwCL/9lYhbeuECDrJ/u+J/ravpeYLtisiFF4BjESEpUgUMhhkRhx3HNI/f4lyTCihg047ZNAOvdfVyOAVSjLwb6TvQumBvPgvBc5AbE5AlgMD198TEXBCGYwIk6v9x4ZyGCKgDANCJziDkIGmXUT5PogQfhfwkH9bAiIER4av7oEI6OciA+mfgCND9mci9xnEBmsO8mz+RM33ZFd/Gy9H+r45VfceRJCINsvMRfrsAkTQCnAMQaH7x4hjuyFC4aPIwNw9ZF/gmRuF3N9A3IjuBO9hL2oKyAOQaz8XGfBBJkmjQv6O1vbA/lDNW+hvdT41f/+B5+VE5PkM8DgycQmlO/JbXEbwt/xJlLbUi9wHvh+E1n9yuyuPrLt0y3PXoHb/euDHbWcu3FUxOV6pXI+hXF7TorLasm0Lr9K2dqHc8S7l8Shwa6iorm6K7V+9WXrXMW/lTp5zSn/33BuWRp/M1UmjpJjiVq27AdcZKi7WbLdeDB48zYPWJzaljrqoqI6ne87OljROq5PMoqISpfW12uAl3XgBMHQw+J6agkgokbY7zxD0cBqIvJQDtEVmvQBVwIuNbB+ITUpgkJ0GFADT/d+zkIGjNroghrjzkQE7wGHUfPE0lHaECyJFwExkZrWb4MsrknHIbNlABtwnEeFtJrKk0RaZwaZEOfYwZDC3EOGsEtiBDJZeRPh6imBfgbzIX6jlOjIRAex7ZFklwOWIQFIb34X8/Uekj6cig1TNoILCiwSfvbXITPo2ZMAEGEH0mTDIoFiF3M+NIduPJiiILEee5cCUpBXS3wHSkQElIIj8F+n/R5B7aCCC4hn+/ZcTFER+9bd1AvAYMtt+ARFqVxMu8FQhAuUiRKMIYnu1DBGgP0Jesq8SFLzaI5ql5sQHvIv0x7dI304lKPDEIc9LLG1BR6T9cwhqREH6oTvyDM5DJgkBRhDbOLoDIgR8hPxWAhE+U5HfQOt6XVX96ALsQ57tLSHbhyFGwAEuIfx9sAZZZvwM+a01eVl+eN5sN1q9pLXr2kV3jC6p+4gDw6ShHT7ptXneEWZVccet+/b23V1Y0DPeV9G6rMDINAwyq0p2HbJuV8kJa/PL3tW21hXV9mEHqm0ey5ygUdf1nTyvW2OOb9TAaNv2VBfcnVa6o6Du0rHZmWEOVahoUnSzUeGLo11a0UF3e00vL5xVlJqzvDg5ewLlBU82oorQ2c6yBh67EXmJB17YE5ClEJCZfcDIaTrhA1xDSACu8f/tJTj7eY7gjP0GZDCI5fq9DRGUNiNagGdC6jwFUdk2lr8SFEQ2IC+4gFV8OvLi7x/luPtC/j4FecmDDBAPIctE7ZEXZLRAdx8hSxehroA3IbPQ30K2PYQMkAnI0kM7RHCJ5APgQmTwTEOWmXqHtO/HKMcEmAaMRWaaAJ2R5bPr/O351t+Ob/z7DydoY7LJ3659/u9TEHX/AESrdDfhAwiIYDkUWVJxIcLgWSH7rydo03QlQSFslL+8hSwRBIw+X/SXCzAdER7ciN3Lx8hMPsAUwgW7Owg+639GBq2AULUZ0RKEopH7upuggALyTC/0/z3WX2fjjPej8ygy8C8O2TYREZ46IhrIownep1C+BU5F+r490veBd2wJco3rEQ3MJ8gyDMgz8W6U+qqQ30qgLW2QZ64LIjj+Fbi/YZcXk2XIvd+D3NOZBJ+XU5DnF8IFkZeRd1jAi3MYMJvgfW4UhS7PBAXLl9999EFNenfTF8s7utwpxxoGQxW6v2EYnZdipCql7BS3XUKqWlVpuBe0auv7ODMrobed0/n5DujlaUbV+Bnf5X9WZRpNUhg0hEV5Iwr63T/3bkPpqdS0G6yTBmtG9qZln6o0yWnlBdPrLl07ylAn1bY/3uPikOwUEuJcaN24tZwKbzwp8VWRa6IHBZ/NHRj8rTSlbWP8v0PV6Y35oYUapZ6NvKjikR9ygCmNqDfAeORFBaLWD7y8FyMvLxBV+RnEZirBGZsm+PKBum0p6iJU1foEQUEEZKb8SJRjOhIc3IqRF93tIZ/Q5ZwRUY73UVMQARkMFGLDcY2/rgsIDvQQ+3onIQME/vLvhOxrH+OYANXIS2IcYq8SOoC6kYHga/85QJaLArYoOxHNV+DabyDYhwaSsiGSD5DBEGSweDNkXyHhGpXXCA4oiQSXokYRTmj/jw1pwxGIdmplSNnnEK3LS4hQ051g39WX5YjW6ExEiL/d36bAkkECYovVnBQitlunIIL87Uj7Q2fosYwFH0cEEfx1fBmybzry7IE8m2+E7ItcAgsQKRTt8p8jwHE0Hw8TnAyZhC/nBJ7tJMLtZu4iPJzEfGTi1WgGP74w21Dqb5bpa6qdX6O49ctVPW7/euNdt3+zaXGcJ/U3j9uY7jKMvylcw7WtOtu2zrItnWOjuoM6A9t6yFKuFRVe69bMhKQ+GS7P+i17jVcG92oz02tWTZi2cOEBiyG0fNIx04Hkvg98f2pDj22QZkSDq9jWDylbXaaaIfa9Qo+1NagI07vBh7fhzsuOYkifQ3C7DLSGkrIqtuSX8tv2YtZtLeLXjYUsXbubHXvKaxwfSrk3nlYJ1QddMwLQunxP/t7UrBdMfHcRbjxXH9aH/N2YdM6zkYGhLzIruhpRuwcEiG8JzhIbiiJok4K/zlBBIvTHcBPwYYx6Ig0nQ2ejsX5Q0QTqSJsPCBfgyqLsL42yLXSQSSd8+aC2sgF+o6YgEoe8ZC+uUbpmuWisj/geKlTV56WjEQ3F+8gS0nHIevyfCarc8xDDwtBrGkbQZika0a4/0pYiVOu2mXANmRcZbANCSOBaQuutLRaRQpYCX0J+H+P924YQ1HhoRJ3/F+oXmDENGYzH1lGuud0nJyNanNrez7HO+VvE99A+j7wf9Xl2NtaxLZoRb31/k5HU5/cfet02NW3QIPpvud74KivvUkq9sDJvRDR7tBYhLy/PKDnigjFxcXE3K7d7hKG1S2uNrTSmTwMarbU/9DsoQ6H8A59SCsNAVVa6yraW5ndol5bS0WMxZs3ukqPn3HT87HMWb0qfPH/rUYbhWzzpqK4taz6plLbvn3uzoY1Xx83Qn888X9U77liDhJF9ydkXKPSa9IqChXWXrp3WI19qc0SfrAH3Xn0sec/P5ceVwXQyfz13AEflBid5SkF6agLpqQnk9ghXKmzbVcr3v2xl1g+/8d2irVT7wq+9yhdHakL17ya6ZEZp/JTiVN/KwsTMx7Iq925rwKH/RWYkCgkidiFBe4xQFDIDjPxha0TzEbAJuYLwZYCmuPOOIRhoDURLEE1TADL4HUF0m5f6Gs6GGrJFugwnE33WuBqZ6YMIAm8RLlD/KcoxoS+jKkTLESs5VLQfebQX5WUEBZFlyD0JaEQeJNzAMBJN442Lo1GOGKx+jizPrEMGFzcitIZe0wLEXiYW0Qxua3sRRevHaBOcfIIz4ScJatmisct/zouRvhyFLMX0IxiT51LEZqI+qRpuIyiIzEGEyEr/92nEtrNpCicgs32QZcuHCQoN1xJdAxVKZJ/rWvbVh151bAu0rbbfpIpRTyT1ebaLES3dIcj9vIjwpbgc6hYeY5KbN7sDhnGm2xffp+7SzcO1/1k6stBIetDjMo7UgDZNbK0wtUZboAP/tN5/M1VAG6AUCnAZYFn6RJ8rbtHGfSbaNt+vLLKrAG4c2KV4xgz91arO227N+3FLKhWlD+WN6BNtQtYsrLjr2IW5D8xbs3rtvAsI19zWSr2XaTQYtlJ32No1uVEtjDyx8p702I3DXf165DDjsTO58tzgcv3tT33LB9+sxbLqnrx0aJPKhWN78+q9p7DkvUvJu/IYMtOCqzIVvni8pqs5Ynw0C4odFdh6iuFStzbw0LXILC3Aq4h2JXTG0QEJG76YoF1AKG8TNEBrjaz3g8yY/hNR9lhksFwOHF9H20KDmi1EDDQjP6HGgk01Rg01vjsOWT8HGUQfJ/os7zWCL+ZRiDHnlcgs+XOiG/DtJKiiTkBsM/6FrGXPRLRJCf6/v69n20NdUe9DBsWZiLaoxQIU+emNDKqjqOkKnEz4s7QbWcoJDGAD/Ntmhnw2I300E7HDaQk+C/l7OKLhC5w/oN2Z5f9ehVzXWILGuVcg3lLXhNQTGGhCYyNFC4kfeq9uRZaZZiJLHy01wQk95zRkKStwvc2SA6SBjCN8YtEV6YsAs/3/byH4+zqEcM3fzdT0kmkKod6AU5F+ugiJmfMzTTGq9cTdomz7mUV5Q1o8A/xl7/zc9bIZy/9tmglfYXGk12dRWWVTUWVRUW1SXW1R7fNR7TPxmTaWDbb/Y5oay9T4vCY+r0V1tY3HbZCZFkdagoFye87r2ztr/3LW+ecrK+/Ijg8naH4yklPn3v/z1nO1brmQGjbWZAV3NMTVt94Fi1KzT0HrzZnluxtqPBn9xEqPLS4VYdrlMrjp4iMZO0ye1+KyaiY8Mouj/vQWj7z2A79uLKjXmlBqchx/Oac/3718IacfJwa9Fd54fFajPZhbBF+SegnUOcWtWjV0ZnUdYjkOMnA8hQgXi5HBfjNwHvKCnklwCSZAJaLGjuQZar7oHkdmlH2p3VWrH0EjuCJk5jY6yudUgqrxgHtlY/kJWQ8HEUDmINefT7gNTCiLkBgGAY5DZlQvIa6PsV70t4fsuwvRsLyFDJJrkAGqIRFmQwWpmxGh8WTE+LK2cP3NwU2IkPkVokX4FLmWT5DrCngELUKE0I2I3QWIHcdsRIh7EzGADqzPD2zBNr9AUMs30N+mDxFjy9XIwPRfgrFLTkWuawMyK8sjaGgcIPAO20bQXTwLES7fIfichN6re5DlrDORex/Ne6o+jCA8VULo50bCjYAvQTydhiOTjxb1PIyBBxH25iJC2HKC9iW7CL5P9iAapwBvIvdtG+LJ1Jw8QFBD5kaW797yn+dQwn/L9TYn6PfQnAxs+9yqONUUj8L6oC5+Z8lfTVfiUq3V2aZpqUqvj2qvSbXXh9dn4jMtTNPCtDWWbWNZNpbt1474P7JdY1o2aJsubRMZ0DqRtHg3HqUxlfFE3uxNYRF/7ziq00cujEtsXM9O/nn79Lwf1rWIp+mKSccv07C5v2tuvQ1Z6z9KazVBYT1ed8G6K2o35tlLzzy+xxnzlmzjv99vYN3WIn5cvoPK6nDN7c6Ccqb+8xem/vMXOrRO5bhBHTiy7yEM6tWGzu3TcRnRBbuMVgk8f9dJjPjiV97/OJ89ZdVdO42dOqFDapHKSSm1fLiszQXZlbtKk1YUZGcvaa6sg/Wl9Z49ZUWp2e9p03MpDfPJ3osMJq8jL10QwWNARLltiDo62tLBc8gMInDvy5AXXSRlMf6O5EaCs+w3CBrPRfIbMkicRjBCbGM1JF7kBfRvRChzEYxVUIbM4CODnYGsxa9EhIrAAGohL9vPCS5DhC6vfIUs4byI9HUPagbmqo8KOsBziPtpJ0SjE5j528jg2pC6GooPeTkrYquz1yCz4cBL/CZE+xMIrBapJYtD+noxLUMFIix+gHg7pSICQShZiGZjC2IrAjIoRRN4P0QGLpBrfIDgYBmwi9mFLPM8jAj3GUhfBfqrChGKoj1jdZFUy3EZiCZkAfJsdEM0cQFWEfScOlBsR4xHI+3UdiP3oThk2zWIQBew+wksOVrIs91cSx8ViGA2CXkuA5OuUuR32o6gF1i0pdKoGBaXasN4b83txzTJ5qQ2xk75ND41tc1UW7uucGsJ92lrLS9QrVFKobTYgaBliQalUAoM20b7bUU0oG1NwIhEa0UyCsuENI/BxrJq4pITU0yX51KCMXgAmHRkhyV5P2062a3jZ2kjaXbe3NWn5x3bK5rnXpPQiqdt1C3U06C4XsJIcas2XbGsTq3K937dpNYBHcY8f7JGvfLJ3A2ceGQnkhI8vPRB3XaT23aX8u7nv/Lu57+iNSQnuunRMYPunTLo2j6dnp0zGdirDW2ykvcfc/5Jh3PKsAlccMvrA7StpuwsbUV+WRrxHpOs1FI6Ze8hJWHNnm53X/jJf5YOeHnlx7fNq6UJzYqh1DRL6Y80PNlAY+ACZEA/BvHAOAIZWCoQ48bPkNldrB/hVmRQDqjw5hH+QglwHUEblVti1BWHzJxm+r8/F6NcgEcJrrm3QjRzofEQIn8QVSF1R17Pp0gwrGsJChaLEG1RIM8O1Lz/LdphAAAgAElEQVS2f/s/gQRpBYjNxqSQMpsjjpmOCCyXIsJgW/91rEBm6HNCyu4NafNv1KQAER7/hri9ZiKz4ueQgWZUSDkQISVQX7TnZGPI/tpiz4AYLT+CxJU5GhkUk5F+XoO8NKYT7nFiIoLfNGSgH4AYdhYig+YryDMVYEVIe0I9WwLXFNgXaYgL4gYdcL+uDNm+CTFCPQd59rshAug2RIh8i6DNwp/81zAGEewy/G3d5N8euZz2uL8t4/z9UYp4FLmQvu2DCGQD/G1bhdhXjUWeP6h7wFsXct21sRIRtEcg92oEIghsQZZYqwjG2wg1Iv2U8AE5lMUh514bsW9XyL5YUbSnIdqQixHhrgjRkL1ATePs5YjAOAF5vuL99T6LxNwJuOmGPi9fEPS4ivytBmIBQc3fZBXiTv53ggH8tiPP66KQcpHu5tHRWukH5v7FsM0Wy7R+8ZtLk/dVm/9ShuckBaBE6Ah1wND+qYLWGuX/tQfsRVCGvAEMLf/v3w+WhrnrivF4DNwGlFaYZCXaKOzRRAgjAHlHdlly39yNZyt3/JfKnfZ13g/rRucd1aMhNox1ssI36+tc96ip/R6a03X5ncdFM4QOo15rRkUp2fcopXzppXsebGoD24959jxg5q1/OpLrLxxMfmE5R45/s8muOYZS9OueTXZ6EoMOb8OxAzowsHcbDKUYccW7rNsSO3VOSnwVZw/4WVu2Mf3Nn0++cteXf6q3NN0UilKyvzMM+/ZW+/b+cCDO58BpBAfk+QSNKE9C7HEC8RjOITzCpYPD/088TDAa7d+RycvvjRcQYeVlgvZKCYjWMzCx2IcIc3Uaa+beP/coUI8su+uYugyEG8Xp0xYmgf44Md4z0uN24XIpDCNUGFEE5xqiKVFKsT+ihQKFGKti+P/XAeNWMXVwu1143AYut4HhAgOFhvxHhx/aDqWiDrH3ztt2tXbznLLVKk/5vuMnjjq8MFq5xpI7ec4kDNzLJh13b11l62UzouAPGEa0gDgNxkDv1lozbnQvlFKsWF+AirHckpYcR0pi/ezEkhM9TLz8aN64/1T+Nn4IPQ7NYO3GQsoqvBTtqz20QFpCJeVVCeo/yweP91D6bduxUxoTB6TBaJhu2yparhiH5seNaGZOQeweSpGXWCkyuw4IIj8iM3QHB4ffJwOQ5Zk7EK1WAaI5idRwPkg9BBEAlLpAad3k2FnRGDdjhsv22W/HxblHetwGLldNbYjYgQT+VmgUdmBB1V9Wo/dncdMhgoi0H1AKjYTC0DZYNmCTmHfvvTGVDvcMa/+CbemZKHr7klNnNn9MEns62vhD3eXqIYyUpmT21ory9JJdzZJ/wVSGVkpx42Nfo7Xm1Q+XYdua5AQPk68+lsvPysXtkmalJccz/pTeZKTWHbOstMLLlHcXseTXfDSQlhJPWmo80z9dhc8MeuXEuUyOOHQDp/RezPAeq2iduo9q00PPNjs4b+CPWFoNcVmuz7OPeSQ19tmaB582PgR1uq6nhsqhScQh9h8Bm5YERC0faoj4ORKUrT4xKBwcHA4OVchSUWAszkJssAIDaTWSmO/RetWmtULr0y2jKlb8oyZRtqfTxISkuLMTPG4Mv82H2i9U6P3/h38I+6AJ6EX88UZsbH9ZpVRwHyKEWJZG2xrL1rvz8vJiv8+U0oauvs4y2QNqxFZf63tilm0Ey+4+YRPo8oEPfl+nrVOdNiM+pU5TuobbZ6Nx2XaqVopjB3VAKcXpx3djzuJtPPK3EzjrRAmjf9EpvXny7YV8Pn8j0/5V054k3uNixOCOfP7Db2Hbt+4q5c3/rqTonYVcfk5/Ckuq2LitmJyMJErKZEn5+hM+4+phwVxgGsXcTYfzyNdn82t+O1yG5ozBnkEfLUp5BVlbb7E0fm3Kd+8qSsnKL0pu3Y9m8lJyiEkFYqdxF+Kd0BcxejSRNezvaXiYfQeH/4t8QNAmpckxpVqA1YhtVWfEK64HMqkoR2yfviQ8oFut9Jk8N1cZ5K+YNKrZA4Kd+NS84+PiPH9PiJOlGdA1VkxCBZKAyFFj0Aks2diagDGJCDUqpB6wbVuWdxTYCtxY8+tqY94x3XffPWfzXZZtTDOUun3S/PWfPjCse53H1RcF/zFtTiO2XRJQD2HE0MYoy7D+3lwNsxVpcW6DP5wkzg8XnNyb1z9ewWknBGM99Tg0k+cmjaGq2uQ/363nxn9ICobkRA/jx/Ymv7Ccs0b0oKzKZEt+CVvyxWbrnBN7cObwHnRom4bPtFi1oYB3v/iVww4NJjm17XAlhEJzXJdVDL10LRM/uYjZG4bSp2MCHy30jWt/0jPvb//iuhnNde3RUV/6jYycgfDAUIrEVIklYJ+OZJt9koMT18Hh/w/6IDZMM4ke5fRg8iO15zj6vfAb0Y3EG4TbZYzS2F/WXbJhnD5tYVKVab8UH+9xiyASnYBdiFIGATEkIJgEnd+C4okKWdDQWu23LbEtG63Vfu0LytambUTzlKxBh8Q9r22uzLnRrVy9DBX/3LSFC4+4csiQZgmwqOFLA+M+6tBU1bpMo8Fto/tl7tvbfNKxUtmnH9+d1pkSFsAwFLddMpSJU76jpLQ6rGhCvJtxY3rRo1MG3Tuk8/kz4/j7lcfw3MQxbNxSRGZqPG8/cDoXjOnFeaN6opQiv6CcwqIK0pLjOSq3Pd06ZrAlP5jy470lw9hTXtO1Os5l8tgZbzDs0EU8+IHfIF0bDzI8r4WDlKjZ1B1V0eHA0BrxROpPTUHkNsTG5IEoxyX790VLlBfgBH+ZS0K2rSA8zsQaxDXyLoJeJZG86y8bK8tqKNdTM5bFT4iHRGRSuMP8+0Mt77si8SI2IpqlDf7vucjafKx4GRsQNXlGlO3z/OfvGXKeVv59oS/Ol6IcOx/xOgp1jT3Nv+9SavKif1+gL+OR+7gMEUrzkf6+KOSYzxCvkABXRmlHIN/NUVHOCeIe/G9kdu71H/MkwYR/IJ4fd9L8MTgcGojW+gSt7dl1l2wYpZW+m+LjXIcFnGACAkZomrX9yzDybf/2gMLDthS2BZYJtj/OiG0HPuy3Dwls07aNbWpsy8Y2zdeePbVrvYIxXjlkiA9TPWKK507/3yqy/lL3UfUj0/Qt1Oh+g6fVbo9SqzBSkJSda8BKFTsEdoNRtjrkqvPCw2KMHNqZrFaJnPjXd7n0758y9d1FvD9rDR/OXsdL/1rKoJ5t+HjKeXTpEEzwe+X5gxjSuy1b8vfx+M0n8tStI7n5T0dy3OCOdGgbFDbchqK8MijgbS/O5LzXbuWnrT2JRKF59Iy36JIl6RzGHL60W5/0pBZz9QKoLPMsRDFQNyJpoUOz8ydk4Ip0UU5Eok52QZZ6MiP2G8gAeQ3i+huJG4kU2RUZeAN0IZiKfSYSfMyNeC9EMxjvhywddiE8iFcsMvzn3I64O/6CvPEuRWa+E0PKBuKFBHLBZCKGvuci6/OPI8LAGYggs9Vf5yLEdbYr4poZ2LYVcY/tivRfYHuF//zLCQbLC/Rf6GDd1r/tvwSjre5E3IznEjQ4TqFmvwZo498X+G1NQTypChDh4H3/9V4WckwHRP0fIN1fR37INQRCzs8nPKsziKv5HMRQehHidlyEJBZcitxD/H01HXF3rSvBoUNLkZdnoPXAODO5WZejjn1oToaljBtdhgvb0pi2hW3bIfYgQdsQIVxzIksu4LNtvJaF17Sp9mmqvGD6bCxTY1n2fiHEsvD/r7G0iW16/9W6YOe1DWlzdrx6z7L0Hq1BK9fEKZ+uq08+oTr5Nm+EiTJWendV5tZWrtZZv8fFIGzVrDfpyL5tD+ndLTynllJw+2VHcdulR1FYUsmvGwt45YNlzPppM7ndc/jkmfPC1sYCx/zpzH7c+9xcvNUmQ3Pb0SrC0HXP3goKSyqJZFtxJrPW9eOzVQM4tc8vHN52K5YJFb4EEtxe/nHWG5z36s2kxFVx/sAfbrjnw7DAQ81KO3ZUFJFdUJyQ3pGq4khfeocDy9nIoBOpov4zMmjl+T9XIZb6kShEOzKEcAH+KoKDUKS+difhgoWBzNxPRmbyoerCm/3fn/IfcyLR08hH8hDhYdV7ITP3B4AlSJyKSE5EBuZbCc/SmoIET6smmIX3EiQS6kuE5wkJ/NAXAeeHbD8SiVFyH2JUXBuTCcZcARHqrvPX0RDVugvRgCxFchSFLstHS/YWyeOEu3v3QISZu5E+/DcS72YKEv/kZODXkPJ/RvpoBvIsmEgAtqsRAe/5BlyLQzMx0D26o4UuaO7w77vKfddlxcdlmpaNYShcthvDJeOWjGUKsZMPLMMQJpjYlsZr2Vi27Y9rpveXtZXCbUhwNG3baJdCGwqXBWi9wza4q8vKmW/UargahZuGday87euN71lu93VK0WFrgusPhGfabjQKFmoXgwmPARNGrcKI1rqfFrVus9Gve3ZSrH1KQXZ6IgN6tWHFBnn/DO3XroYgEsDtMrjl0qH88faP6fbdes4e1ZOenTPx+mwWr85n5foCjurXjo++qxlf6e2fRzF8SCf2ZN9EctvOdGrfijYJbkr2VWNvXk3PTov599IjGd5j1TEdxjwzdNuX17XcGqpSy4w4d1+qagT2cThwuJHB5BvCvWkMJMrsr8jgeRoyGP6DcEEBRJDpj2hIpvi35fiP20z9QuC3RgbH7RH1B6JKTkdm99chwkl9hJFIViOD40/+eqIJI4FAdKcjg3AglkNzJNgKhPOPjGRbF3FIwDNNw20FLGRpphuitfiCoMDYmNgK6xDhZhnSh/9GBAsD0Z79GlH+DUQIutj//xdIP2hqLpk5HCBsbfcD1WR7vdc2bUrYuc91hMbV3m0Z5mc/7rh8T3E1hqHISHYR5w4YnIZEK8Pwfw/ahohLrsZrWvhsje1fi5EgaMqnDFWOoXymrQ3DwHYptU/ZxlZD2cuAryrjSr+eOW5YzRl4vftDf6Rt+zpDGShDXQ36rf0Ws03A1no5qFjLmkAdwoiCnko3j2QUwGfr2oN+AHnPzWVnQRlKKV7/eDmzF26msLiK047vRt5VxxIf56KswsvW/FJ6ds4kLs7FB9+t54Pv1pOWHMf1fxzM6KO6cM7Inhx/WXjSwMy0BK46bwDjT+lDq9SaWqiE7CTaZA/irYd6MurKf/Ltut4Kxc2Ez+yaFQWrbYueiJre4eDQHllOiMx2fDpiT3ENwczHbyLRSCONw75B1Pr3ITPgfET74EHsQN6iJj0IeiwEQoW7kEBsoUxABuOpiIr/DX+b+lAz0ml9WOivp1+M/d8gocjPRWI5rENcn9+k6R4WPZFkatEy/UYyCxEaPIj7ZqB/I6OJ1oebkYix/0WEra8RIeI9GrcUvRyJYhrow1zkGYklIH6NCCP9EWGkGMnpUlumZoeWpScGqxt7cJ7WRvLy/Gt2Fll/d7nic2w0uDRjh3XE9Nms2lzElu2leNwmHrcbt18rEjRaFUHEtsHWNl6fjc+Sj2VqLJ+9EsN+x642Z3dKZ2Vp6o6KGePG2ffee6+65557tIoRzKyxpLiqfiizEiu0QZLCGHrbV5t7PTq6hmDdcGy92jDUn2srUocBq+qi3N5miS8SYMuOfbW6T02buZj8wnIWvHkx54/uic+yWb+1mKLSKt76ZCVjrnqPvz06ixMun84z/1zEO5+sZPUmmdhoDR89dS5XjRtIt47p+Ex7v6cNwPixvZnz2niu+cOgqIJIKG2zkjnpaEnc1yMn/+w2o55rTB6K+qHZiFItV79DfQjYHOyL2H4zMmgEhPKAkHET0ePDXI8IDY8Cg5E8NPcTDIEdeUwZwczGnyKDYzVifBkIvpeCGFLOIziAT/X/35AkfaEYyAAfy2PIQvKynICEP7cQgeinRpzzcCSq58OIQPYT0g/31+PY75C++QwRjrYj6QkCRt8BLVa0iZUnosw7yMB/G6IuPhUJs/4dEnemoSjkXgcEGTNkWzTiQ8oFKCZo/+JwwFFdlG68N1Pisl332xhT26Uk5vRK85CbEUfPVnG0TXQRFw99umZwVP+2VHqh2he0EbHtwBKNRmuFbWu8pqbSp6moMikr924oKa04r3O8MdBnW8tM5Tpvwz5X3t78Tmdf+eIid15ent3cgghA3og+ZZbFCsvW2NpW2mWf3SwVe9io0Z1rKxJTM6LBKIH0Vvv2ReYfaBLL1+5Z5TMl3XEkK9bt4bE3fyIx3kOH1qk8cctITjq6C+99uZpfVu9Cazgqtx1jj+3KozeMID7OBYDH4+KWJ2ejlAgzj98syS3LKrz4TIuUxDievOVETvFn8o2Gadlsyy9l7Za9rN60l5UbC/hh2Q6UgtT4SveYw1dOeGsWNzZnXwSwFduV1o4R28ElJPDyfo5E4hhUEu56nYoYWJ5MuC0GyHLGw4htyTBkBv8kkqsjGpE2IyDq/7eQpZTHEQPLDEQLsiGknI1oaO7y19MQxiBeQNGWaEL5nmA+l1zEmHUSck31fRl2QgxPQQQrF9J3ddmLQE2bkfaIYHcHIkTs8W/vHOXYLojBbOjSUiCL7GPIfXwbsdkYScM1k8OR+xJwE/8RyRl1FhKmPJKzQsoFiBpWwuEAYaj2aL297oI1eXTx1h4Yxq19MxJo5fEANlqL3JuTYNDZjmNdSRW2dtO/ZxZLV+/BZXiId8u4FSqYWBpM26ayykdZhTldJxRdnXhEYsXaZd53bds4L/BW8lmatZW+r0+ftvCM/1zZvHYuAUzNMo/NkbbS2IrRRLePaxDL7zyuKHfy3Fbk5RnEsGWJrRnJyUnSWjf7xRYWVyxYtaEg6r6+PXKYdtdJFJdWcfSf3+LSez7lh+U7OHZgBx6/cQT/evwsJl97HMOHdNoviACMPbYrti13Nn9vsMmbd+7DUIp3Hjy9VkFkW/4+cse9yjGXvsOl93xGq5Q41mwq5PNnx/HUzSNZtKUL3XN2Xt5mzPN9Y1bSBFyKXaBbt0TdDvUmkKQr1CvjZkQj8CxBj5eZ/u8+YicQfARZ2uiGaBO8NGzAyfD/70EG7r8hwsa0iHa8icy2r2tA3SA2E68gM/RYrqXtkGWgUHe8X5FliYZGDP4C8c7JRAQsg2DW6YaS7j9/oF0/Idqs8YTboPwBMdSdRbDvr0eMcgOUEtQ0NfSaRiP9byH3G8R4uQLp09DU6XHIC30s4gkUGlAqA/G2cTgYaFor7W5UsDPblXBEuyS3O93jJqh88y/DoHEZip7pCbRLjCMl2UXHQ1IorTSxbNufiVceORuxE6mqtthXVj315IqjLv7x+lP2GcsSb7BtdV6N82pGllWZdzXyiutEW9Z209ZYWqMtfeQT87cmNkvFBmV9GBfTZjSmZmRvmZVhuIxm/5Fs//q6dZ/OHZzfv2frttH2jxzamV/+eQkvvr+E599fwuihndEaPpy9Do/boHvHDI73R2/dVVjOITkpVHut/Tf2mP5BBcP8pdtpk5XMTyt28MX8jbTOSsZn2uwtqeTCsb3p6ncVTk2Jp6zCt9+3+70vVvP65FM5JCeFs0cdxr0vzqO8Kj71X5f8Y+nmM49esa04Z/6sNX2WrNrZfr3ldu9E6wptasPU7qx4l6+tS9uLtn41od4pmZX2FGm8GXWXdGhBtiMRHA/zf++MJMz7BPEoiaQDcCFi9BppIV2NaDOORQbD2jgUWfoBGaTbIxqZAiR539mIHclEambfNBDNTcC7J1aCxymIjYThv64MRFtwEbEz/Z6PaD/uRTxQCpFMyF0QD5LGzubfRexwrkf6ti7tyCsEDXkzEG2TTdD9uhxZdnke0V79gtje9EcEzID78iGI0fGjBOO7HIJoMpYg9hy18RiiEVJIH2YSdFMOZPvehAhB7/qvbSOiienrL7+c8KjOWYjHUWPsXxyaAY2d4U6Mb9w4p112kjvgFRNblu2WHkdRtY+ObVPYsrMUr6VJcIcrxMqqfOwpqXqvc9cdN+adr+zxU35I22rpO2PVadn6inF5M/Jm5p3vbVTba8Gs9u71JCRgawOl7KRNhRWHIe+AplKk3AWBd08NYi/TuFUyus7U2A2m06nPdXnp30szzxjenT4RLr4BcjKSmHTFMA7vksWMr9YQ73Fx0/ghDD8y3Blh0tTvWLN5Lwnxbk47vhutMxK5/OygK/OnczaQX1jOkrW76dU5iw+/WcvSdaLVnfavJdx39XEM7NmaDduKsf06s8R4N8/cOZrO7WSCbChFRloCX6/tR/8Om43kuMrc4d2X547ptZS3Fh5HSlwlo3suIye5hD3lrRj/5vVYlhoF1FsYqUiyKuMrdPNInw6NxUYMM4cg2ojjkYBYj8co/wTi+XIs4p0yi2AqdJAZ8NyQ70X+MqEpzWcjmo2AIKoRQ9GPETfQfGR54yvEbTZam+9FtA1HU1Pw2RixzUa0G4uQ5YnQkNkB25WAsdoUZDnkLMTmI9N/3A3UjF67w39sZApyn3/7kojt1yBLJOMRY89o5ZYgdhxJ/g9IHz6LeBSFlp2GCIRXIcax1Yiw8g9EQADRLA1AhIeh/mvagQhWzyBLcQA/hBwD4rUT2ocaCU63GFlKy4+4tv8CvZF4I8ci/fYjck9fR/KqBAh4F8QSCB1aGmUk+nRho7xPDNtcVGm5bVAxVxiUApd20Tk1nlW+SnIykyndV028S2H4w7Z7TZs9pdVbqvYWXT3ztvMtgJ1Y48EIxjPS2osy3KAD58ouScnuR6SrrNZqwmfr4/LLFpszzz+/kRGkjUrTZ+JyuVAG+BSH0xzCiFblyvAkx9odU5zbm5zRTynXUxllBSOb3Ag/7UY93UkZ7rlAx77dsvlk6jhqC5NbF6Zl70+qF8mK9Xs4+dqZALTPSQEF23fXFMievPlEhvRpy7GXTt+vGenaPp0/nnw4l5+dS2m5lyvu/YwfV+3itpEf89jXp+MybJ467002F2RR6Yvj5y3dSUuoZNHWLhRVJO/Z7t3Tjm/z6m2dv4nOCa1SytZllhV0bEQ3ODQfE5BBeDhij+Dg0JK8jAiS7QjavjgcQHInz9m6zzJ7/JY3ok4vz2hMWbln1qDs5JEqLIx7BFphapi3o4TCEi9Lf93NIRkJuN0uLG2zq9jLjsKqi1dMOubtwCHDn1owx9bBAIrK8r2m3J5jbR1cijS07+pvbzr+BYAxT//c18S6ybb1iRraoqgwYIFyGf/4ZsLQBrn/X/Lekqs87rjnDUPhdruwtXnH82f0fqTuI2sn9/45s7Rt37j87ycsj7b/wEb9VJ5rgI4AKzYU8PpH9XPv3rB5L5u2FWNa4XYvsQQRDTz0yg/7v2/fUxZVEAGxK+ncLp2xwzrv15pt3F7MA68s4PqHZ/HPz1bx0j1jiXcr0hIrMJRGoZkw4xIe/+Z0np1zEj9t7sasNX0pqkgGeLshggiIzlc5Rmy/B94C9iJCiYNDS5KFLNlMxxFEDh5N9EgprbJv2rCvvCJQi0LXmOFrfzaZ9Hg3qUkefD4by/+6N32aikrfumyf95+B8uOn/JBmaXVkaB0upTZo9J7wel0DAU58esFV1ba50LT1pTYcqiFeazIszSmmaX858qn5lzfoomyjldbSbtsGn0VUk4rmJqYw4jZcXmK7qDUKhQ4LcvTYmz+xc0/dMZTe/GQlp17/Psdf+g4zvvgVy4pqjLuf1z5cxne/bK21TIDS8mqUgpfzTuGZO0aRliyXnJLo4bjBHbj6gkFkpScyoGcbdhRn0PuQbZi2K2pdCnwm9tSoO2thV5tKF0o7SdkOPsVIXI3PkaUaB4eWIgsxkJ5YV0GHFkQpKy3Z2+jf+qTBbZZtL7f+sLCwvHRbmZdir41PEtGE5J1RKBQpHgPDUCTEuySuiK2p9Fn4fObb3+aN2D+B3aPtvgodPvYqdriUETZYakX3MU/Nv9y0eU4H3cYjcflQz4x5el69nS8sw+go7sZgWTZau2IurTQMw6OUK6aNS0xhxGfaFYjrX5Npd/q0pPP++rfHzxnw81mh28sqfdz+1LdE02wF2FVYTrzHxYghnTj1+O6UV5mUVcROJvjTip3kvTAv5v5IOobksTnrxMP48IlzGDGkE9eeP4jxp/TB8K/d5B6Ww4aCtgxsHzvsitbq7V1fTmhwXJakClei1qrRUfMcmpVvEfW5Ixw6tCRrkVgyjXIrdWgmtF3pUVlNstebOKDtf8t83iGbyqs/WVpUaf+wu4wleyvZVenzh3GXmCLxhnjZJHjconEwbcqqfFR5qz8PaxJGt0gLCkOxVRkqbCB3u4w11dp4mqjmFiGbNAnVlv5Tfa9Hm/SyQxLyYVmNt6UIa5JOtpUV00M3pjCSmeIqQusme3h0PXXKqGuHfrZscKdNN9839l3j6C7hAS6/WbiFF2bEDsTYJiuZiVcM49mJY5j0l6O59Mx+tQYse+iVBfuNUQFye+TQL4ahrMtQnHJsuMvvYZ0zeeuB09i0vZhHXg0u9bTNSmbT3tZ0aBUz7EqVqazJMRtWC1r5MhTace9zcHBwOIAojCKr0mzSODdl3bp4w3DHK1/VrRvWFU4vL7coN23Wl1azpLACn21jKxvDcBEI+276tSLlFVal26wINXzHQncKX7VXYFcV6kAQE6lFu9GGRtdQGCjL97JbW3eHbbOtehmg5s2e7ba07m9Z/gR8tsZrWc01Uc7QZnbMcS62zciePRVKqZg+wXXR4aSXMy+45m+v3TzyP19+vaZvt6nfn8TGwjY8ffartE0rCSv74Ks/8OL7S8RMfVMhVdWNSxI8b/E2fl4Vbtz+66ZCnp04hmG57cK2uwzFmSd055df83n4lQVYVrh65vbLjuLH5eEOMb8V5jBrXfTEg1rrpxujFQGwNG1A7a67pIODg4NDs6HYrZXZprGHP7J053kVla02o1mmPYkru3TJ+kNBcSVrNhSjbSjxwa97K1B+JxhDiSDi9ZlUeS1MU+cvyjs9TFugNe0iz6PdqWfbWkDaY0IAACAASURBVAfCDuBSlGnljhq1OzFevZPSSj8Naqfku7E+z+m065/RykaydGNSHyyybUtjmjaWaEeaZ6Jsk7KSmTE1IzFdexXYRVBckpaW2dAorCdfcse48wa+PeXX/PZtH/7iTGytUMC0+aOZcvYrPD/uRf745g1U+SRukQbue2k+3/+ylQl/HMzMN35i0hVHx0yQF4sp79ZMCOgzbZ55dxHvPnIm3y3cQklpNYd1zqRbh3QS4t2s/W0vg3u3DfPq0Vrz8ex1uEIMZHcVVuCzXPy8Ocr912z2+VR9QltHxdC01yhHXevg4OBwILH1dhSNin794JJth6GMt+OVjs9IdOOzUYWWz9MuJ4nyCh+/rNjFwD6tKfLB7qpq0AqlJRletalF96FVTZsDpVLDbRc0PpswTYehDJ+tddTx22sZf05N3T7HKEweZLhSupakrP555vlX1m/ZWceN9toWbly4DYVlaxT2b/Xtk1j0e2hOBpYuiRV9FepMlKc3aTOuC+JhUC/ajXn2ng4ZS/Ke/f4kdpemhe37ZOUgBnXYxCVHfMNz417m6hlXUG0Gm/Dtoq18u2grhlIsWL6DM07oTnZ6IhVVPk49rjuZrWKnj1i2ZgfzlkYfz2fMWsPR/dszbkyv/dvumzaPOy47ir37qvjHWz9RWFzJIzcMp1vHDJRSXHHeAEaExDVZvCZGkD6FrTV/3fPttY3PZqroiq0bnR/BwcHBwaEx6E26kXnBDCP+BEPp+AHZScQpsdLwpiawdm85+bYmJyOBtZv20b1LKvllPtomxWGjMVwKXxUYhka5ahqeak1qXec2batVvMsV1QvL1MYlBTs6tk5M8F3y2fXHz49WJipaK/PFhecbuLFtE8tl4FIG1bav6fnpfHTVhvqttiK1CiMa1mhFLyIDq9SG0v/5bGX/iaCieuLc/8W5eC03Vxz1Ja+Pf5br3r+cwvKUsDK21ixdu5ula4MrF3c9N4eM1ASOzm3HiMGdOGvkYcR5xAh6964tFCy5DAmYGZ07p35Hz86Z5B7WGtOy+eqH33j94+V4TZv0lHhev/cUcjLCV6W6d5KlxF2F5SxeHTNi8NQdX137ZR29Uisaehmu/VE4HRwcHBwODGuwGdeoI5VdmeRyEafEDVajcSlNz8xkyn1lmBkpLF2zG8tMYZ+26SCR4omPg31lFlobYOucS16bnfD6pSFxThSeugM9GC6l7dJYey3NKeWW56eRz/x44dfXDV1Qn8sZ/dT8/mZ84hADjcsAjY2ptJXmsqPGBWkQhuqFBAuMXaS2nUqp5QYqVorxqOz44rpfNGpSrP0aeGTWmVz9/lV0zcrnk78+yOhedV+rZWkKiiv5Yv4mUFBVbfLvr5ax5afr2DL3NMpKa1feVHktLsv7jF2F5bhdBt+/Np5PnxnHJaf3xWtavPrRcpKTonsyv/PpKiw76tPxY6Jh3V5n4+tC61zba66ou6CDg4ODQ3NhKGM5iuiGgHWQUV38eaVlF5o61HdFodD0zEhCKWjXOoU9eyqxtKbatlEaEhPcoMEyNYYykpZt1X1C69W2rhn53La2GoQm9NN4NZ3Q1Ka16Owz9Tcjnl5wfn2ux0bfYFmmMi2Nz7KxTBvb9K17889DC+tzfG0YSvVD6VoH+lqFEZ/FLyg9pKEn3vHlNf9QindrK/PV6n6Mfu7vfPbrIJ4990XevOgZ+rffUtshgITOvXPq94yb8DBp+Rfy7Y/L6J2zkpcWjKrz2PzCci6a9F8KiytRQK8uWdx/3fEsm3EZV5zbn8KimrY1RfuqeOWDqIbI2wxtn7P+s+uro+2sLztolwRkp1cV1y8witAVSU8/mGDir+eRjKixSAYGRWw7FMnPEaA1ktwtlM5I/ozQMo1Sa9bBDCQnS2PpiLQtQBbhidPqc/xgJEx4gGQk98sxSGK2Qf4y0d2zgnUM9p+7NqOnPtTM1huLW5BcK78H2hB+/9sRzOfTWA4l2G/d6yg7ELipnvVOIvx+HkwOITyzcAdq/tYC1PcaDaTPatVw/87oRvBeBz6dkdxABzxZ6GLzq61onT04b2GDnTWuHNKzoNr0/XHRnvKS9aVV/FZazabSKkq9mhQPtE5yk54ST1mVF4Wm3NSAJjnesz/at2EoPPFxY0LrNYwa7t5WG1U2QLnc40NfKNq2j45TvgnUFoZA6wTL4o2R/6+98w6Pqtra+G+fmcmkd5LQBES6hA5CKKKIHRWvKJZrv3rtvQHX2PF67V2wAwrYsFMUpPfea2ihpffJzJz9/bHOMJNGErCA37zPM08yZ07Z7ez17rVXeWVejyPVpe+Lczp5tf0qjxVbxOMBjwnlbnVMWv/DxYDueI+8w3JEMpJYkrXahA663oNdabsr/AbtTz1eLQrKwhj96+W8uPwdevY4h2+fbcv4J3uT1unIAd8GnrKMj4a/yJh5g2iTtJd35p/Nij3Nqy8JkBQXTufWSZzf92T6dGrM1HnbK7j/hjrtdGmbTFJC1bAqo99fSH5x5TgtOk8Z6vz6JMOrCWGR7u5oVih/2se64GokTf2X+Cetm5FcHjXhbiQHRiBr+w9wU8D3y6maxTUdyaESFXDOMYcGRoT8+wHfP6Jqwrn64CEkYZkvn8OFQH0C0F2AxBcZb33vBKxHkuQ9hpT3aSQgWk37gfcjfTIamIKM/5omuab4U8rXhgsRgX084Gr8KcVPpWKbHy1GIGR0NJJgbgY1B3FqgfRVXXAJHJ1x4h+Am5D3DYTUzoEabQPqWscQJJ9S7DGX7s/DNUg//4xEPB6NEMZ3qYdt4u+G9HQTpVaU24vrvegGGNGl8XSXt6TzvqLyT/YWe4p3F7lZmVXMzgI3yeF2TK0lRLxSFJZ7sBt2IiMdGIbCZgO7oXEYtqsvmzTpcOA1h8H0iroWM6dDF2dBpNNYgg50dNBrZ9zb/wcD77Wga7ZZVIR6tHqxpp+11srjUS+YprZ7vRqvV2N6TdweE6+n/NujaZdAnJ4+0442O4Qkhx0x5PqRt2nAY6DW5ETH17ujMmZdX1YeGnoBqGojkA3pfwpT3xrG5m9u5u7bbmJD7H+ZlD+cRie3Y+LzQxj/7/l0a1q9BkqjuOOLm5i3ozXvzT+L2dvaVzknLiqUsf85h23f38Lyz6/j++fP4d0rm/FEdzdXJu7HyKk9AvPsZbuZ8PP6yofzFZyz5+fb6hbLvlbogdQ/D8qTSArzyXU834kkJxuFCMz6oiWSLr3yeHkGyZK6ADjbOnajdWw5MBzJsvphwDXTkMnnAyQz7GLr+LWIwHUihGglklzM17nfAq8gCcq+QjQfldEYyXRbmTynIkJuBSJIHVTF2/iFBUjG2ueAIUi6+1+RtPCLq15aAZOQvumAEJGLEO3BZ0iyqZepKmivsX6Pwp99diZVNUU2pO9XAD/h13R9CryKtPl3+AXwxUi6+vkIMRuJaHvGIkn9pgG+bdjPrHusQNo6UGNWHdpYz7oRSS6XZJVjlfWscGRGfQyxOfsRSeZXEz5F2q0d0l7nACchY3wlkm23cr/dBHwMRCMBxNYgRKZzpfMciNBbgSSy89X5C/xj6hv8K/PLrTrNRRLzPQDEIIR5LSJI21jnfkPFcVmT1syHU4GvEVK3Ehlbv1n3fTLgvGSE0C6nfu9sKBXboot1/BMkIeByhHBfhRDJ2fi1boFjYAqipTIQwuNbqT0JXIFox35G2n81QtRBCNKLyDj4HGkTXxlAFjdnIe37qvX/VGQxEYosmt5DxuyvCKH0vbvDrXuMAHxBvFLxz4NjkLnjmzq1lB+zlTIG1vOaw3i0S4uMR7o0vJai3IYY3jNspverHQVlFHk0dqUJsdsoLfVSWO4hxK6IjAjBZigMAwwbGDbVPmdXkwuXLl3qAIhJPm2aob0/ADSJMGgVzdfpAwd6vrule4mh3efbTO/rNu19weZxXQ0w696+43G7u6KZWVMZTVTaoNHTT6rut65Pzb3eYxpnub3g8XrxeLx4xbV3tzvVdcw5unLsju4KtWbZLd1rjlZKHXLTmMqcYZjG4NrOqw5Z395Y6CouPBdVMT13uxYJ/OeeM/lgTxhpkwppNjaXtIn5/PPnIq4av5NDueXYmzxEk7hsujbNAKBZw2gaJkbgdNiYu60Ni3aKNnfqxlQ2Hqi6+Bl91wDOyfiOkOt7wqAGcHoMXNke7jgD7hoEFzXH87ZkZK+c88aHvMIyLj+7HYmxhwP0ZStlDN4z7Y5FR9Me1UMP1hi1pVE/VlyFaEVeQCbiwNDA1yJZYacjmUarw8vIxPR4pePTkMlkNDKBKGTCu9M6PhuZxNsGXOPbnx0FrMNPYtoj20wPIQLpHEQoTrF+PxXRHp2PCPM7qinnO8gq8b8BxwxEAE2wru2JpK+vDd2tMmxBJu36qvvjkWy8+UjbLECytEYjmW99uAshCQ8AhYiAHIBMsC9Vuue/rd8uRMjcD4igbYe03QXWPR5ECMlHyFbQFYhAaAYUAxORjLIzEcIF0v6hSBuVceRtgmaIoJuCCAyQLLlrkIy4NqsM/0SEyaXW73XJcdEAGTP5VvmnISSmCXBLwHkPI+34EFCAkMB+iICsrLm7FyFu51vnfY+Miw4IcT3fOu8ehHi/Y11zNTJemlrPGI9s2S3BTxx879L5SF8cKa/RKUi7jUfGFEhW4JuAwcANgE+dfhLSN1ci7+XZ1A1l+NviJ/zvQlvkvbkQGRsPIfPCbGRRATIGoq1nLUUIjEK2Unwr9+YIaQuzyvwFcBnSN92R97I7MhbfRQh8rd4hAc9obF0/3CrDeKStRyDvkYG0jW8sReJfsLS26vlAHZ53GF5TT1eao5JxIJqFLyeOe+i8kILYEZ2bzHy4R+N/lLs83+/IK8VutxEZ5iQ3rxSNgcfrxW4oIsLt2AwbNsOG3WbQJdn8aM7MaQsBJg9T3gZN9l40NCnn5ZC5r2c23Dql97p160IAZt7fb9XM+/veNfO+vg+ZJcbOc95Y1Ptf7y51zH5owBajoGywza/ZrQAFhnI6qyRibT/q1w5lilfcponLq3F7FV4TPF4PLpf3w1kDBx5d0K+Kzx5sYlbOKF4FtW6/OLT+3qPUx1Rk7XVG1ryHCztcNum8vPys90BfC9C9fQqz93p5fWVZFaPhg1FJjJu9k7uHdOThN84gO7+Mb146n+4dZKFmmpqtu3JZvyObU5rGsi+rmKVLp/HFbwW0bdWGlIQINuzIpl/XJvD0s5BveeRU3r13l2IbPxJX43aUDjyHqx79jjcfPYumYSala9dilpRwVnIyF96RhvvO/oz5cmXJK58v7b91yq1VVCVHiwMRSclgpsQVHzxaa2VF7Qn2FCJYMoCnkKRc9yOp1EFIyFjr/8upfs++CFnhL0JWPLnIpHA18vJ7kUlEIyvhsYAHmeTyqEh6HdZ5RdY5lQPqdEMmuP2IMHoXEU4gK7dMJGR7G6qiFBF+SxDS5UVWmA3wv6RfIRN1bXAhBOJiZDX3BKLJqQ13IsLFjawaf0LaIw4RBCFAlnVuZ0SY/WLVKwzRYCUgxKByMKZuyKpvD0JWxuC3GZpo3eMXRAA0Bw7g3yqdgfRRDLL6jECERGBejs+te/yKZC6uCT0RQXmHVY55CNlpjJBQh1X/BETwZ1ifI+FhhJiVW/WaZdXVjrR7CNKPmYi2rad17wNWPe6y/kYi7RiIbsj2WSaigRlj3atynXsgK/4MpO9BCJsTIZf3Wf/HIaTOh8BxWcEYsRJ6I8T9Tqs8y5AxcBdCdsLxa7XWINoDXxk6IxqE2hBp3T8a6eNAO7KvkPDz85HxlYGMi8AtoQnAQeTdezTguO8dDrTyP4Rox0C2NJsghGA6sNv6HE38pOnATqtsg5B5R1n1iUXmD195KmvLPqKe273rRvVdnfrMvJRTn5mRvHbEoBrdJmvCwnkzL5w4+cvnRz780HJgt1JKX/7hsmeaNkk8z+bAsBlQXOoFpXCbGjQkxIVRVlaCieTqizy0Psbl9hzeZh/Rokm39z/46Jqu3TsPMMs9b4aZZhwy1g/DFud8tMRtPrnJbW44/dWFT9psarnHY9oqSwRDabRWuMrcFewQuqXPTMz3qkk2r44qB+zKRGuFVytsqEJlHnqrvm1RHTRcaDe4trbzatWMRBXlrFeaiLyY5BZHW5h1k4eV75122/UaHgTtCQ2xcaDYrFaKHiwz+e4AlJS5ueUfnbnmgg5kN5jKZUsacNOKdjyx6RIKnVsobjWJ+fbnOal9Lo/ecTM/vnML7zzRk6fu7syPb1xGdKQTEisGsnOFt0AnWuRQgQo1Mb/7hNioUFo0jqWxUcrWQYPYdf317Ln1VjKGD2fH0KEUfvstt1/eNXzLN7fUySq5rnAo82LQ39UzY28sIghSkUl5W6Xfb6WimvocpJ8/Ria/F5CVqq9xMq3jy5DJA2TCeZaKE9l2hKwMsL4nIVqVfyDqVh/2IavETxDBuh1ZuQ9AhLTPvqDIKsOpVCTFs5EVYkdk9bYGWSWD31DrSO21F7Hp8BGO/cAuZKXbySrzbwi5OvcI9/kBWX35PpUtyttQUcPhw+tIHZOt8murTisRIfEh/pX7foT8NUEm/o5In15E9Suc2QgB7IwQgRyrblC1bZYjROMtZKXo03r1RIxrhyDbBYGofI8UqmrDQDQiIxE7pcmIAJ2NaLruRLQ2z1jHhiEr3RsQTUkqMi4q43mk3VLgcICn2QixvBMZv759751Iu52K9EFX6/+LqH7rcjbS76kIEd+OCNzq6rwIIVGvIATJZ1PVF9m6ugjZcgpE5Xs0ofoEeBOtut2FtH0you0agywOAglOV6SP+iLjdD7S59WRnU74jUH7WvWsri185TSRhUBgmX34t/WM+6xnehHSci3QHzgj4NzAVbOJEIavrHLejywkjkZuBJatund+O9ImnamoLQMhwSDzzRV1eppSGqW+s5mhdbXhOgyttZo7Z/6D/dJ643Q69viOT7y+28KDWUVTtNaYCgxMSkulWlpBYmwoNkNjMzTRIQbJIaXkOpPbDHp58VCttTH9l1/f7tql86iOHbttj4iIaO8oLCyo8mwks6+GdqapP3O7zU1aV61zWlQOPRPdhIW4D5OZNg9NidpfYn7rQrUvNxVuy4OmzDQpN03K3d63F424qN7ErDJSn/qtBaiIFY/1r3URXysZAdAwEdMcXvuZR75N5rTb/2cq44zkxMhdJe7q5Um5U5Gd3JCJszO4bHBbTuvYiHUFcyn2ZJFZtpEleVN4cEMfxu8eyTf7XuSeVT34asN45heN5NX1p/HK+l5M2DCCMncZNGxe4d7eph1RN4yUL2GAAr1LcuVcNqgNRbNm4dq6Fc+hQ3hycnBnZlI0Zw6eN94m47PJAA9qrY/ksVIvKLjSMHSdwvQGoAR5Qd9CBNxH1vFfkBexJRX3rXsgK/vJ1mcCov7vj6xmAoOt7Ub2f0MQAhFqneMz3vkVmazWIIJ0BDLBdrOeH4oInveRLYl7kYRgDyNCrb11fjGyH/8z8BpCShYiWpRXkRXvy1ZdhljPnodsQYAIow2V2mUTfmK2ELFlWIFMYr6J63/ISvg9RPVeOezyIUQYgQgMhaxgDauuIG2+FxGaN1W6fjPVr8puRbQ2b1vtoxBy8x3SjpcgJCQbIXFfI4LPp8pfZpXtI+vzAkIqzkbGwmL8xn+ZSB+WIlsmm5DJfZJ1ziyk3b9ByKavvgvxa6n2IH0chQiWQO3JTvxxhyYj2wC3W+2VhYxLn23IF0g/Pov0wTKEcFT2ctpAxXHow/VI27+NCFgDIRG+drsYWTnvtOrzNULWfRoFX7u8bZXlJUTQnoeMiwX4ie5uhEwVIH20E3nXvrLuMRURzl/jt6MA6SOfoNiJvC+xVN3y3I6MHZA+fhMRpCMQwvZfhOQctD4fIOPiP8j7MwfROgQaC5uI9uARROMy2irDV1Y54/BreBbjJ9Tb8I/TXPxjAGT8vIL0vc8u4xpkrN0OjEMIcJFVJh+WWeWehryzTmSc7aF6w9SV1m8gfTEDGadb8b/H2VS00ZqBzHFvIX31P2BjQB197wlIP19SzXOrh9afa6WurPP5FtatW5zqdIakOUPD8j22sApj2OUqfTAvz1WkgPDQEHKyS/FxqvAwBxHhDuw2xckxJtu2bsWeeLJN2cyPX/lm7gvFRUWO5q3ajU2IiehVVFSyoWmfPlXywxiojb7/Qwzom+Ljg5WqVnCQWLtndXTTgrUALR+YmpRvRE332m29xY3XS7lXU+5VeLzgLvdmYnqeq3Kjo4JxJcqcWJcz6xRvPS8m+WTT6/0xriirfT29PqqF1vq5x+eXPPLsEn/7Gm4XZoQTHa5ICjXonL+XKTe0xWG3MWrDBSzL+6Hae9mBFK9BVIi/WNGOJjR2P8RNv22FL147fLwkOpXwC86Gr184rNwrCu9L5JQ57NiTTez8X9hy2+0YbjchVk4iQxkkN2jEvn79Sf3wHYABSqkjegnVBfnRDVp5TT0lriirQz01I0EcH/CtEtP/4nLUBIUQxFWIHcFNiBBeUo97NENI5A2/e+mOX9iQbZElCNG7ARiIkLO6oj1C2o9kP3I8YhVCKo/FaLErYjc2HVnQnIIQ52O2PagnbkXITN2M/LVWqc/MXWdo86KVowZsqf0CwScfjnk5Pj7unk2bN82+/8ERAyr/fuWnK+9ITIx6XXkVeYVlNG8ejaEMTBMOZRexZ38xPcOzKV71I7mnXsH2QkhjI0kxYe/+++rLbv30wzH/zc3Py77rngereDCe/dr8niVetUChjIGJ+RSvmsryppfhCZDQChgWtlo3bd1x4JAz+vx20v1Tu+lQ+0QTW0uttRWszUShxKgWQ9s9nsu2jz7jy7q2QY1ITzdS7YPWa5s+b82j/WqNMF4nzUhs/oHtoHbmR8SfecwFFISWeirK35Py9qDDhBtluUyKGzZiyrwMAHLd/uR3Hjck5g/AphzYgJMMCLOZFBb7F29lZh5b8pZW0YyEl6yGKX4i4nGFYBt6MwBTZ68hbtgwuu7aRefMTKKHyII8MjQC7SrHtVtIvNfrrc6Lo94wtb5FacYGicgJi9kcv0QEZFz5DJe3IpqX+hARkFX2/yciAkJArkS2uTYigrS+Nl3rOfGICIhN2eZjvMdyZOtsN6JV7MufT0RAjJDr6m0ISmkFY03DXnnbp0Zs2fKjMycn+/KUlIY4nWFzqzun9bZOb5UUlX/tVSYOu8KdX0CKLkQBsbFhOB0G5VkZxCU3Zn+ZDafNIIECFrib/+uc1+aN087IC3un9a7WO2jqXX0Wh5jld8U7vS5HxiISG7eoQEQAGoebmKUFW8cuMZe3enTqSFu4c67NCGlpNwzshsKmQGGgUXhMRbnH+/H20Wd8Ved2OwJOdQw6U8POuhARqCMZAUDp1zXG3UddsoqIKA0cnnbo0QD6JInpgKkhx2vw+ZZSTK3JK/dvXZUUK25olU64EcVJBjgVrM+wcUt7v+bEa5ZT6imGJs1k4yAcUTqGU0HhbHeWY9+9ALxebri0L/v+8x82tWvLtv798OzfT2RoBOEhYgunY8SV/8CBA0efg8bCwQYNItFcruzuD2s/O4ggjhr7kG259xGvoCDqhj2Izc4HVL999HfFF8iYOVYsRoy2JyJbXScETBsfYpqXt3l+bl28fyjOjx8QERHVcMeODDqldlhY3Tnp6crU2ryp3OXdZBgQf2grh5b8Iha4ChokRGDmZlIY1hAMg5gwRajDTq5LKW0LuWpy/iktn1hsu+iG96uWad26dSHvDEmc/8/k/V8kJkRT6ohCaRMwaRiuubpLHI8PSmJHAe4tpd5VRkj4UzbDFmpTCgOFoWzYDIVdiVg0TO+qGLPgLn6nBbLS3G1oXedYT3UmI3GFWT9qpZrlRiT9HpEgI0p9NiNO0JGKbY5IQgJKc7DMJCsxmemLMyjwZB0+7iqDxIh4Uigm1Npksulo4sNjDp9jai92FSaakRBkL0eBpzwE15mPQkTc4XPts96lbNxHFE2cwKFXXsGbm4t723ZC120m0inGxybg6HgqpmmyZMmSw/t0RwtHif4X6C9j8/N/n9TMQQQRxLFgBEc2Zg7i/wHWPNovF6W+CPWof9Xl/IWLFl3SqVNn8nJzs+LjEt0rl8zvorVWa1Ys7rNwzsz7tdbGli1bnLc0OnhW55CDdzQyCrPKMjfijE3CpkxSVCmt4rwUZe8npFFrDJsixGbg9Xqx2xR2m8JmKEeXRJ7PKQ/Zcd37c18e/MqcXp9MXRWxfMncIXt2bL3x+ynfLs/YvvmqpAbJXDWoJ5Ova8+Eq9tz1xktycw3GffjAnRKh/YOm62FwwAHGpsySQ7XOG2aUJvCZoBNsTOtkXnlq/08l2ut1apVq6pGAAW01rbqjldGhyfndFLQbJW3b2Vj7xpR58iqCsx8rUdrZY6Eo0ws5EdoiQIdpQ5rKpZFpMABv7okx6XRsaF8sG4T7nZlh41byl0QHR6KDX8U9khHEsWewCBmmlAjBlKaiemyEuJj2Lx4WvWEonWwSALLKaUxf/uWvEMmoQ4nBaadhHfeIOThR8GKP5Lv9tIgrSdFRUWZF198cX3CtldBJo3CMdx3mh6zLu6lJxI6IF46R+UC/hfhFiqGyP8UMawFMXF+DvHg2I14BgTiXiTewZ3IKB6HP0iWvdK9fOgGVJ7oNiAGg5Uxyfp8UefaVIQTsVvojhjcPoHYuJxj/TaGisaBCrEr6Y8Yor6BeMlchRgN3mH9djFiGPkZYqwYiF6Id1USoqL/FlHTX4J4qHyOGDW+SsVowY9b5QvEHfg9I5oi3jsg4ysf2QpojbTxWGTNEGLVuYdV56esMp+L9OdY/MatPtgQr6Au1I5/IO3nQcZFGBIPo7FVrwmVzh+IeD9pZHxswP9++GwArkPcsBcihraBq9ImiCF2S8QY+zWrLa5HvFQW3ZYhrgAAIABJREFUI8acJ+MPGjgfGat3UzE2znvUnPD0HmRraSFVIzBPR4xVA41B70U0HoMRzzUHMu6X13D/Ewce94vaETKnW/rSt5eld69Rq6OXLnW8PnvmxdOm/ax//Hm698CBA1+1adMqZMWqlf9U2ngjKyfLFRUZ8ct773/4044dO/d7Tc/bp/Ye8L0rK/OqRm1PdyTuXcOcyR8w7Na72er14D2UQc+U5qzMcZB5MIverXNYUpJA2xgPpYsm07v7uQmRJQfu2ZLY6p412cVlq6d+4Yxr2TnT7irHHpVAdl4Bu/bs4dNPPkJ1HMLSQzYOlWiuCC9gm3mKZAhWEGJXDInfTYJ7P56WnfGWFuqxO2JWNIvy3Hy2Y8NNEyctOjW/qPhkpdRVOzZsGLB209qvGjVq+LTd6Vixe/vux99767Uuu3fvPq1p06ZVDGoDYbMZIw2tR5Ou6mxjWvdtGiC6OOtzDW2ywhOOGOe+DogotemKNvqVoIHsMpNDKfbDRCRSQaIZhrKVVbC8jXKkUOj2Z/g1lEGoLQ6i4yAs2n/c5kWvWwqZFR0edNY+YgrKiA2PIdrpJP7A/sNEBCDXhOTTeuByuardF6wPQqNcd6HNbxNKc/bUfvYJhabIZF0ZCYjA96mjDGTij0RcWUORyexU/F5AdsT7JRLxovCx9GgqTrAdEYGQhBCDxggpChwecYjrYxhCBgKxGrHQ34t4NAQy2tetcvnI5wzr44ul4EUMHZchngsTrOf8itgZVBck7aB1jzJESM/AP4G3oqIbZCQiXKMQN+JEq77VRY8FEUaBQY2+RDyaJiCeBz5ysgh/DIfAeBzDECHzKeIdMgXZrliLCMQQxN1zg1Xmbyo9z0DcOXcgAnE80nf3IXYIS6wytUDabQYyNjpbz/O178mIUA3cyC20frvSuuZ/SB+8g8TI8BGVyUi7TkCEqx3xAFmCbLdMp2p4/jMQQV9ZS9mPirFWHkA0KD8i9kI+QnQQ8VB6zXq2D42tNpxqPfdbZCzOQEh7MkJMPdbvD1DVFfU6pN2nIoTpZoQwaoQI3o2QnVuRMeXzrLkU6aMZVr0uxu/KXBlXWM+Zg4yHq/H3xRDknTsTeQd9x90ICXsLMXb9Cb9H0QmN1ekD92CaUzz2shoDI06aNMk2bs3K1z/+dNyWXbt2D+3Tu+ermfv35U+dMXOF1saTazesj5s1a+6qCZMmD1++YuXnHtNrbNy05fYuLRt9t2XLln14PeRtWUZ2djaFe7ZQXFSMsW8dauNMHHY77nbnsnHaOFps/5pG7kxMWygFGxaydObPRG/4ikZFm0ILyk1VlHuwcX5BIZtXL2XS55/zwZgxLFy4mNZ6Nx1Cs0kJV0SH2skoVBhKYTcUlzTIZNvcKcyZPYeSjBVs/u3LQz23vDP5fMeyXkuWLT9369atm9579/12E8Z/tmDvwb1pq1et7vLEE89cPeWrb+956933rt23/2DqF5+PP6Ic7PDkrB5o3aZV67R6eYrWK+eMAm+OoR61wf80nH4MxpehJZVMmux5+bTRRXRpFM5UM55DLs3BMpOGUdmSX8aAeAUuWwNKKmhBhIwU+V2ocXshxpkAyoCkprAr//BvYXOeoTJ0fHMcrU/Gu30HsQ47rhdernhC+3Y4oqIoyck5ptC4RRFJyW7MW+3Yj5XMnSjoiqwItyAGlBciwm0JIgBMZLIrQFZf3RBXzR2I0FyPBPrpiKxukxD3RV96gh8RD5EByCScibg+LkJW9Bcjq8SlyOTfhYoUeAEi3J5D3Bd9Ka6vR4TkuUhwrEOIoDsHIU1dkMk5ESEieYjgHoYIrBtraA9fIKgQ/GGsDeseMQhhWEdF7Uk367xM6zkNEEHpc9O0WW14OUKqchGX5T6IpqI5EjMlF3+k0caIy2jgYqQMCTiWjwj/MkSA+6J4luPPpROBxBEJDIBl4g8KF4JoOuz48/iEISHDnQiR6Ye4AHdHVtmTkdgYJyPjJnBuybN+f8f63hqJOzIfIQY3IeRnAEIEfXXOC6hzilWmykug4VAlqWcsolEJwR/k717EmNdrHTuI37jXQCLOBqq2PfjbU1n/51r18MVLCUyUeG2l68EfYh2kHSPwEy+QMR5BxYijN1rHZiPj4EVEk12dRret9ftg5N06YN3zGyTSrIEQuzHIO7AHeW/dVnukW9fs59jySh1XcISFPe0uLVvWIX3mR+vSB+6v/HuHDi37vPD8S2en9TntnkYpjRolpSRu35d5YPfWjO23Tv/ll7fCQkOTTu3Y3r1p05Z/9O7dK7S4qKSs5cnNJ4wZ8+EDbdu2uadR8aavpq5Zw5ArrmX2rJk0OqUt9pg43M26o4sVO8sjiD/3foxl41g3dyoFebns23+AAf3TcLnK2b1uGa68HELjI9m2dw99TutF+849OLBnF+1P7cjypUvY23oYLWNNdh3w4NGSB2dggxKKNyzE4QghJTmFub/+TMsWLUIzdu3pNWny1yfFxsUmOcNCiYmK3p+dkx325FPPXe1xu7fHxcZunTV73uC003qyI2NH9s23XF+z7ajWyvbMvP+Zynx08jBVcwK/alDvbI/xBVk/5EQl3p4bkXglxVnVhp6tA8LLvBV5zNU6k7H3pAHw8toyHlxWQl6pF09WFu1a+JeDUY5kCgO8a5R1rMDtt7sqdZkkRVvRgpObwa61NRbEVRSF48qbCUnrg7dBIoeWrsC5dy9hlveMBhy9uqO1ZsOGDcekGXEb+nlMXo0q3l97Ypy/B1Yg2pJGSETTSxEyYkOEwFaEAHyMrLLeQNTBLyGC4B9IzIGRSACxj47wrF2IAE5GhPINyGR5M7Iq7Ur13iQtEaE71ipfESJo+1rP74WsHEE0FNnISvV0ZCJfj8RR0BxdwrIzEYLzb/zB6SpHl9WI4C5BjAJvRkgZiGD+1KrH68jK9VtE6L+LaEHGIcJlK6Jp+RwJvhUYZGsb0najEHfMmvJcOKznfWJdcxNC6OYhWyY2RHhNx6/1sVv1moR4qIAIwkxkhd8fEdRtkPb/0WqXGxEN0a9U7LvRSPC4+5BxFYtoU0KsOmdYde6LaGUirXZ7HH+sGhCt3FlUTS3wLaLBUYig7o/EfXkOIbpDEGE8yTrnRfyaFx/KEFL9mHXOdiT2S3W4z6rDOOt5XRDy4Nv2uRnRtF0XcM1dVpk+Djj2CNLvvhVpa2Qh8DlCypIR7d1OJFbLF9azyxFi1xh/Xpf7kG2jMkQb1tmqf0tE49YMeS9nWmV+jYrBD09YLHuge1bHp+a+YrM7RlOxzQFo377rvK6dOx1MO63vullzZl7XrWun5+loH5raq1fm+vXr+xcXH2wfEZG0PsTlilm4atnCdevWlVx5+VUfFhTl/bBw8aJrDmRmMuya6x7939qoHr3b5F/SoHUHtTeyJaZXE2a6KC0zacYBFm7ZRI8b0vEUZtH14Fqym/Qly2UQbYfmRZmk6EM4nU68Xi/7dSRZ7S4lq1RhJJkcKoE2oQUUOeKxu6FtnEav/5G8thfjaGtzqVDzzR7hoTddcN7Zl7tcXvv8+fPHfvTp+Pg3X39p1oYNm644qWnTNw8cOtC0uLgkOTE6YVnGnp3RoWHOjqbWU/r2PatGOdjxmXlXAsVrR/SvPhbHEXBUqacNw7hTm+b0gqhGU6MLM7Nqv6IKwosDXXu1pmmM0I1Zs2b9dveA0wd0MIqhoIjUVpeyqzyWzdlLySk7QN9Wg2kR1Y0ke1+2564kt6SEc1M6YTf8dqUFJZqGjS0y0vF0WCLtYnpteMttmCHRkNAEndIWdeENOAefRUZGhj7pwftUnGFgut0UrliJe8kycpYs56RhQyksLMxetGhRzaymFuRFJAzSWneMLc6qHCjr74wrkYBNYxBBEagi32n9zar0v0+ga2Rli/U3HBE8vtWjA3+YePB7PRxEBGIYMsn6zq/OIMuG7LsPRvbKr0aIUwKiTXEi74gdWbm+iky625EJ+RFEw2AigdqOJqx/GBW3kF5BBEAgygKO5VFxe2UDol2YggQXW4QI+nBkC6MEETpnIkTqJyT+SOW4BfcggjwdEdIF+HOWBJZ1MrJKrm515CMqdqTvQdpwIkIyfIHAfIRlDKJlOB0hAP9F+iGTirY8lTEN2S4LRTRa/0CEdxhCFAoRAXwWMh58WyvPVrrPeYgwrWwb0B8RxiH4Sd8BhKj9gGivhiLt+iZC3i6mYgymIQjZO9367ov6+2mlZ4207nU2VfsdhHTcatXFR6QeRtp3cEDZn7Dqcw7yntiQ7aNZSDtfbv3vww1IPJS3ERIchbRhU4RwnI0QZJCx4lvlzkNsYXYjdijvIQuI+/ibkBGABK/79Ry7fVHHpxYMWjOqd4W8KuvXr491ez3Orr17b1+0dGG7yNjQDS1bdvep38uxgttt3LixrKCgMCU+PuG71B49tgPbHx/5yPMKtbZhgwYv/vZgN8+gJ6YucsQ2cupyTkVpIzQ0hKSQUooWzeSMgaezqthOgachYUkpFBZqvKbJfg0RtsY0KNhKZFITSrIzcTRtRkaugdagtYHN0JTl7Sc8sQUNCzWNdk/D06o/y7KMWQ5v+b3zRwxcuXr1/I86duy9Viml77ztX3svv2zo5oGDzptyxlnnV4kxsmbNsv0ff/DxzV06p9aYILZb+sxENzxlanXW0bT5UZGR2PyD23IjEt/w6PI3qGvI3QCUlZWp29o4efWXnZwS6qV7rOLafu3JyckpXLhw4SXAr53atevsiXFwKHOHeUrjfkbXtudjt9txu90UFxfzcNc5mNqk1F1GREg4pvaSYgziYMl2sgwPfVr0Ye/eve7GV9zv8LZOw3MwD6NRY2xNmuCIiwVDNNRFRUUs/O23FQsWLLgxISFhaEpKSueEhIReycnJDRrfeB2Jt99KeXk5Cxcu/DI9Pf2oAr7lxMXF4FZvKpPh6q/xuf+z0Bi/oadvReVGJul21C9PhUIE7AIkEuS1iI1HArIqbkjFbYLq8Aiivr8bEVyV++97RI2+D5ncb6ViiPT7kO2UR5AV9lRklR2KTDi+FW1nZMvmo0r3v8C6ti81YzpCwlIRIdwAPznzIRkR1juRiT+tmvv8F7/77karHmOs/9MQrcBMpN0SkX76AH/0zbkIsSpB+soXMj0w06cvr88ERJP1Nf68RiCk4yJkhf86YtR5A2KXMQER3HMQwjMDIS+NEUG/2To/DnlH1iGr9erQF7/h5KVWm2xByMF71rUDEDI1EyEua6w6f4Q/Yudwqw2qgy+Zng+jEeLQDtHYPIcQ05ut+r6ECOpPrPOXIdFnn8SflK+yAenDiJHtJGRLZj0i0H2Gwbda379B+mYHIuxGW3V9EtEshiNEaRJCuNYg83IGQkCHIltovyBt7IPP7bKjddxnA3Q3QuYOIiR+BX4i0xYZK+XWM6Ote1dOLXBCY1b6QE/qM7NvVng/6zZ6es9lj5x1eK8/9+Dekwvz85cvWLDAabPb7Cef3K1aexlvSU7Pffv3hXdo33ad79i5Z59/X1i040CnTpLBtkuniV/Gh+S+tr3E3sk0bC+A7tsgazVJrVqyPddFqWnDZkh0VJtNS9RwE1pGu8nPCSHG9BATE80hewR2w8DUGlNL/hvKymkQ5cCxZz6OqNj1M4sTRp5fNmOKT46lpvZZA2IDs2n9qqaX/OPSs5RS1cqnPRk7zzWUMtq3P7XGsO5um/11hX5j7ai+lVOU1Al1isBaHTQYeZGJM9D6w7ji7Mps/4iYPXv2a717977Tbhcu5Ha72bNnj165cuVDQ4cO/V96enpIWFhYGlBqmuYmm82WprVuHhkZmeRyuXJtNtu+1q1b3xIeHn6Sw+FIKCgoWB8REZHUrFmzlpGRkYSEhJCRkVE8Z86cS0855ZTHW7du3dswDAoKCigqKiorKyvLLCkp2ZWfn79j7969sxwOx8S77rrLlQ5GU3vKgN19284JO/fcVkqptEaNGnXLz8/fcejQodfS09OrW7nUitzIxHEKtSG26FBVg5W/D1KomIDOjQjQcxANxgZkUl6NCI8vEXJwhvXbPmTC9hmNHkS2L3oiAtOn+mqC2JWsRYjJQkSAJ+AXrJfhTwnvxm+j8TIVt0B8GUrjrfusqlSn1lbZlyAGpv0QQfkDMsl3RTQkexCNg8/7ox9CvJyIkKrsNnoSYhsxy/oearVTGCIwDlr32Gmd9woimFojQjyT2mFDVsoNEcKzC7/9hg+LqUh8uiLbUjmIMC5GyNdghIhcREUCuAZ/v2A9L1ADtRGx3wj0nFmHbFcMQOafnxCbg7YIaSq3nl2d2/tFSJuFWs/y4E8y6KvzuYh2awYijC+tdI8l1vFoq/wtqfsCoReyhbICGWtnUjE8+w78YeJBhLtvlTgNf/jz85Hx1hp/okOomNgQROMVaNScg2iYAgniQav8gakN9iHv1CBk/M5FiE5NiEHG2/fW9/OQd8G3eDgJ0fDYEdLia+9OSJtsxZ+9+W+F1GfmjVBat1s1su/VvmOfj/tocIjTER+X2OibnEN7J1w67OrK7xUA4z8d+/DWLdtHXzRkyNmdu59W2fOsCi6bNMnWJbbj3RFrv3uxrLQUb+oFbCoOs6ynFKap0Vrj1dDB2ENTez4Hd2dgKNjT+Ay25ss5Hg2YJt3CD+itP3yg2rdv++2AMwZfPnDgwGrl15o1i5v+Om3m6vOGDE1p1aqVq7pznn/2yclRUVEXnzm4X8M2bbpX2Q3p9PS8a0z0DWs8aWfWx4MmEEdNRgCyw+KbGIaaYyp9fkJRTp2z2b700kth8fHx6Q0bNkzL3bS1tOildweZ5eVZjgO5d17vPVDfXC0AvD9kSFT57tw38Xovcackzi05o88tjzzyyK709HQjLCysq9frdYSGhu4qKCg4kJ6eXu3kM9bZ4BSbh0d2eg/dmv47aTDyohJv0prhsUVZg5Vf1RnEkZGAf7vlWDAcUfuXIcTgFqomOfsj0RXRavx0DPc4HSEjnWs5L4j6IRIhasFgcEHUiMsmadumzfOmaW1+vmZU/zH1uXb0M0++HxsbfdW5F5zRsFmz1DrFlFq3btkpr7z42pb2qV3mrUkZVFDuVWmYOtpE47XsLJWCDrZ9bPh+LK3P+ScNvQdZEdaVfcXa6/bq3ab2LDBN45fUqJJfr2rraJhX7Fo8cODAGuXZ+jVLz//6q29HjHj8yT41nfPOG69s83pN921339eusuNKl2dnt/eaxg8m3v5rRw446tAXx0RGALIj4gcbynhZ2dx9jyaI17vOpJYOLy8CZqTHff0wcvNrvagavG9rMEwp9YaGTxU0v8Fz8NJPSE7y4ir3OkJba7QRorXSmpNNZe7RKK9SdHa6y8e7HCHXYBqdTaXfN2AESk1XWl+qNY2V4l/Xew5Or70EVVEQFd/b1MYn5Vr1Syo+VMUqO4g/DeGcQJEggwgiiOMHHdJnphh2xxwM9c81j6UtqP0KwbNPP/4d2oh5bNTj/et6jdZarVy6aFBkbMLsVq1audInrQtZV1jSwqN1iwK3I8F0a2e5x61ax3pCLk44yMSi1qXtI0uLl+93b3Pj2PXdv7plo1S9vFyn/fj1QytWrGr58Ij0akPhb9myxfnTd1/leb3q43sffOjWwN86PjcnDq+aa2h176pRabVqf46Eo7IZCURCcc603IjEsdrrmKzhPCVq1jrjFtfBbR/YknMwWFloczz7oUrqjuY5bajhWpurlGIf2miER71n2sw0m6GaO922cS6He4ip1QalTNcN7qzl2PUqvCpKwZlezZNj7Q3O8aIf1YQkKNN0Gkp5vOBG0VprI1MpGqApKLM5cxXKhjJPM1C7gd6Y5kQT1cgwmKe17k5FK/k6IS8muYXX6x1nmPqKpJKsIBH5axEkIkEEEcRRYV36wP2dn5x3pan056lPLRq0elSvHbVfBbHRMbObntSkXi7PSojEYXmTPqxDOWIXtCnwvHmI4VwV1Dmzjh9bt+1o2bZN2yPubOzN3GcOufC8CjlrOqSvC1HenMka/f6qUX2PiYhAPYOe1YS44qyXQW3Ij0z8aNLRqNaV2UKbOk8pnQvEmoquaH2xQvVHq2dR5i3KZvYzlG5nav1vl909Qms1RmnGKW08B+BwhZQCdqXVbJviLRvqbhNClWYOirVoM115jCFAoQEPaFiFVl8ppZqj9SOgfgblUHAQ0ZoUaK3XKa0a17c6+yOTk0yv9weUvj+mJLu+ycmC+PthkPVxUn1guCOhNRJR1IYYw9Ypb0YAfNdFIzY4v0c6h98bDRC7lKPBMWt364Du+PvtEip6MwXx/wAr/5O2RGt1H6r8h9QX5iXV5Zrb7rrvhQsvHnbcG/b26N7js5PbnFxjcrxWrVq5/nn1VQP7zJzv9ypK14bNnveRQm1YM7LfS79HOX4XMgIwvejQPQCDIxPf1vW7r1KoNsBAhbpQKxaCLgNcpma8VkxHswpFc7S6SaE3a8U2oFSh7tGWHYZ2locCplbaA8RpCdi6Vxs6zoBwMIzr2L8TOR6mIBqFCfoMZKK+UqO7aI0BaiBgM7WxA1S9Jp786Oh4J96fDaVejCvMrjbbYhDHJW5EDAR9n4zf8d4piMD1xfioDy5AXCztiDGrs4bznkbsICrDZl0Xgrh3XlOPZ/uCv/3RaIdEVa0r4pAAaL8hhsrf4XdJ/iOQgN9A9FPrexD/z7BmZNoUtHoRl57a4aX58bVfcWKgR+9+szp27HlEW48OnXssVj5v0vR0I9U+/x2AVasy7/m9ynHM2zQ+DAOvLsq6Ni8yYUJeROJ7ujjrlroYbE4iLroI9in4RUtgp/4KFQOU2JRqqk3ThVINNJyDIgZUL2WyRyvsCh2nNa1ngj3DtMWDltwUSj+otW2NwnxYm+obrXQjbddLXveeEhJBwUjDoeZ7PeZtdpt5UCmbW5d5ystwuuyUuyJJdq1nnac9qGFS/joLj/2RyUna9P6k0R/EFWa9f/StGcRfACfidnrREc75J+LN0BPxjJiMuHaGIQHb9iEeIRcgK/YPEfVqDjW/C30Rr5/AlUkSonANxe+94kLie5QhHio3IbYwPpfMRxCviLcRd9koxEPl3YDrQLw/Hkfe/TGIl811iPfECsTNsxdi2DkS8X4Zi3hGXYDEmNiOZAIuQyLOLrHK8JPVRimI14svZPxQZKvsFESYn4x408xHvKpASNO/EK+l7xCvkuZI7JdExPB4GtJPPyBurc8gJGEHYqz8pVVGAyFdqYhXTRpCVs61ru+E9ONYxGU8xWqLzdY1/0C8giYiHkcF1BxOXVnnn4Z454yzjl+HxPHw1TEW8YjahRC8LxDyeK51XWDwsiCOU6we1ff9jk/NCbWV6Omp6fPOXZ2eVtO4+FviskmTbJs2N3oXRYwj0Xklk4f9bk4ZvxsZAVDg1kXZw/OiEj/Ii0z4fEdR1DUtyDiiO+wwcvPxHA74NC4djIY0CnVgRhjYTA+ucnuIamEvd+0utYd01GjDbtjKwFxserwztd22fSB4cB9YODa0YXNV5s65kSxfcCB/FEkPwCHw8KLlJ7Ojen+Zo4nhJjYiptf7PYqX4wuzx9Z+RRDHIVohsR9AoodWthUaimyb/BeJxfAEItjbIsTjHISorEFcMmfgd4t0U32ishZUdNV0ICv+aQhBeBp/bIgHkLgTXyBumLMR4boFcZNehQRFuxwJYvY8YsPlu85Xh0cQT5KFVtkvRd6QFYjr8+VIAsACRNDvQjRH9yFxLIYg206XINFLt1vPaosQFF8CtwNWuV5BiIMLIS7TrPKPxa+Bao+QlM2I8L4EIU65iPvxBIS49UJIT4x1n9lWWX5EiN/piDvt6UgcjWuQmBtPI664/0BidgxH4mQ8ZbX5N1YZull1DkXiyrSwjp1G9QuTx6z2eM1qxwwkZk1jJMbNQ4j78ESr7d6w6jMLfw6fZxHC+Gd6egVxlFgzqt+bqc/MdWm7npn61G8XrB41oE42JCc6mqfPDN28OeQToCzeXT581i1px3/MLA1GblTi/3IjE2fvj0yu0/7aiYz86PjTciMTt+VGJlTrbx7ECYHbkEBm/7I+acj2wVLr0xQRWD5r8rvxazPaI1oREELyARKAykS2Z/6LCONEancZb4cIcR9G4g/M5UK0Jm8igvc9hPyAkIBk6/8nqBiMzHfdU4jmxIdViCD/DtFAgMRo8ZGwH/FHUv0p4P8oqx6hVr19ZWiOxHKZhMSKuRUhD7sCnlmMP4ng10hQtP5IaHkf/ocE9mqLEIpJVptcZn3vh9jw+Z57r3V8KBKxdDn++B6xiCtiGELInrOOX4w/JkiEdY4TIR3vWc/05Uu6A7/Go4iKsUFWILFyApGDEBAQW5glVtuU4t/C3o4/Ous7wKMEcUKh01Nzh6Y+PXdb6tNzT/ury/JHIzV9XlLqM3Nnd3x63ouk69/NvCMQf8hNFZhxhVkPaBjvxDs3P/qYs/wet8iOSrxZm8anhqmviCvKrtEIKIgTAjvxh7ieh6zSz7I+vgBQPk2fB3+uETeyzWAghGUMon3wUvs71gQRuj74ol62tu7ZvZprnkIE+HJES+IrT2C4/ZqyqHZChG5DhGDtQYSnrwyB0V0D77kTv/DvhZADX1v4NJHPIW1yKxIIy2fMHpiTxU3FdvNpZ5MRDZEDic+yB9E27LLul2ndrwQhQ4XI9grWXzv+pIYrEHuXtoiGJxA19R/W/T9FyNhdCPGoySC/k/W8XfjbxbfltgsxOgZpK19gORf+KMA1tUMQJwhWjer7lcIcDozr+NTsm//q8vxR6PzkvB7YmatMxq8ZmXb/0QY1qw1/6AsQX5T1bk5U0lrTNCfkRjR4I7b40OuqakjuExLZ8fHRhtt4A00Tu1b9IoPuu38HnIsIZh9aUH0k0JpgIuRgLCJMq41mWAk3INtDPsPSbGSlPxcRVnsrlQlkS6gVYk/i04AY/L5gAAAFs0lEQVRMQKKCPs2R4UC0KhFIQLiNiFbBp6UITOj2BbLFcqZVps+sepVSvSHsd4hGIw0R1PVBDmIL0gAJ1z4WIXMPI3YgPuPcHxF7mhGItmIUsi10LmKTcol1zhOIFmghQjx8hKM2fIFsm+zhyHPV84gdzX1I29+JEKWhiB3RR0gCvd3IllAQf0OsGtl/cYf/Lu5rKy+fkPr0vH5hHtsdi9JPq2khcGIhPd1IdZx5p9b6DsM0r1v5n/7z/sjH/RlucRRENU7w6vL3QEdjt98cl7c/48947h+FrIiEM+1KvaVRn8YWHXouGFk1iEpwUHfhB6I9qSz4FLIqr2lbx4GMu8DrQqhbnB+ftqbyM6srt8Mqgz7COYGwWece7aKj8v3tSD0DAzm9Zj3nJUTr0AohbT4hcBZi+7ICISe9qJiqoL5lqA6V+6y6tq/vOAjiBMVlk7Rt4+a5jyrUNVrr29eM6jej9quOX3R+bkFz0+sdg6KgXDn+tfGxXtl/9DP/FDLie1ZuRMLVwJMK9WZMcdZr9Q2Q9lejMDI5yaM9o1GqszK5ObYkqzqDxCCCCOKPx/mIwWgKYnD6NH67nZaI3c/JyJbJi9Qtn08QQRwTOj45p5tSaoxWeqXyGI+caN42HdInhdjsje4Cblfo/6wa2W8clcK//1H4M8kIAAVRjRJNXf6shjSUHhFbmD2lcqz74w2ZNAoPj3LdoVG3YfLqtuKsN7oHVzxBBBFEEEFUwunpM+3ZDsedSnO3Rr0V4sl5Y1n6hcd3FGitVcfnFlyEaT6jUPMcoc7Hlj1QNSHeH4k/nYz4kBveoIsyzOfQKs4weDqqMOv7442U7E9OjnAWmTeBvhulfrBjPBVVdOCEYrpBBBFEEEH8+UhNn5ek7HqUhvNRxquEFI5d/eDZxX91uSpAa5X6zNwLwBgJ5KK8j60e0X/5X1GUv4yM+JAdldRHmeZjStHCQL8ZHaLHqZycv9QAKC8muQUe8xat9JUaPQWv+UJ8ae6u2q8MIogggggiCD86jJ57kuHhQQUXKaUmaNP+bl3z2/xR6JW+MLrU7r1ao28Hdtgwnl05ss/8v7JMfzkZ8SErMqGdDeM20BejmKW96rPskphfWrG1Lh4Jx4z86Oh4UzsvQuurgKZa6fftlL8fXVj4hxvuBBFEEEEE8fdG22dnJDjMkBsV6kZgt9LGeJet9NuNjw36U2TMKXf+6AxLij4TGK7Qp2ulvtHa+9baUQM2/BnPrw3HDRnxQdM8ND+y+EKNOUyj+ij0AqXUNAN+iyrM2vx7beVoOoTkRO/rqrQaqLQ6G0VzrdUPKD6LKzw073jbMgoiiCCCCOJvAK1Vp2fmpWn0cFDno3UGhpqKZmbJgYIVW18/7/dZgGutUp+e11obxgClzcFoeqNYoNETEzye72alDzxidPQ/G8cdGQmEpklYQUR5f69hDjJM+mlFE4Var5Re49VsNrS5w6vY68ZxyF3kKGzCHpcvjokG26EGDcKMIjPGpowkbLqpadJSKdqi6aQUTRV6jan4zfCq6TElWcv/LjFQgggiiCCCOAGQro1T7fO6Goqz0GoAWncEvVspY5WpvRuVzdiGNvcobT/g8bjy27c/vXTyMCWhJNLTjd7Rg53FBTpKGboBSjU2DdXc0LoN6I4a2qPYg2aOUsaM8DBmL7ivT2ktJfrLcFyTkcrYTZOwqPCy9lrpU5WiNagWWnJAJCJBkZz46+RFKRda54M6iDZ3K2Vs98Imh9KrowqztgXjgwQRRBBBBHG84LJJk2ybtzZsqb06FcPWRmtONtBNgSQNMQqcGmxoQKFRuJSmSEMWqL2gdwCbtU2vjXTa1h/P5ONvD32CEawggggiiCCCqB90UM4FEUQQQQQRRBBBBBFEEEEEEUQQQQQRRBBBBBFEEEEEEUQQQQQRRBBBBBFEEEEEEUQQQQQRxLHg/wD+LxZZlCF9MwAAAABJRU5ErkJggg=='                                
                            } );
                            },
                        },

                    ]
                });
            });
        </script>
        <!--  End Tabel Barang -->

        <!-- Tabel Mitra -->
        <script>
            $(document).ready(function() {
                $('#dataTableMitra').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                            extend: 'pdfHtml5',
                            oriented: 'landscape',
                            pageSize: 'legal',
                            title: 'Data Barang Anugrah Semesta Lampung',
                            download: 'open',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5, 6],
                            },
                            customize: function(doc) {
                                doc.styles.tableBodyEven.alignment = 'center';
                                doc.styles.tableBodyOdd.alignment = 'center';
                            },
                        },

                    ]
                });
            });
        </script>
        <!--  End Tabel Mitra -->
        <!-- Tabel Stok-->
        <script>
            $(document).ready(function() {
                $('#dataTableStok').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                            extend: 'pdfHtml5',
                            oriented: 'portrait',
                            pageSize: 'legal',
                            title: 'Data Barang Anugrah Semesta Lampung',
                            download: 'open',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5],
                            },
                            customize: function(doc) {
                                doc.styles.tableBodyEven.alignment = 'center';
                                doc.styles.tableBodyOdd.alignment = 'center';


                            },
                        },

                    ]
                });
            });
        </script>
        <!--  End Tabel stok -->
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