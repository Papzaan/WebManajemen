<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Barang (Total) Card -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Barang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_stok; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cubes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="#" data-toggle="modal" data-target="#BarangModal" class="small-box-footer">
                    <center><i class="fa fa-arrow-circle-right"> Selengkapnya</i></center>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Kategori Barang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_kategori; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="/barang/stok" class="small-box-footer">
                    <center><i class="fa fa-arrow-circle-right"> Selengkapnya</i></center>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Penjualan
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $total_penjualan; ?></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="#" data-toggle="modal" data-target="#PenjualanModal" class="small-box-footer">
                    <center><i class="fa fa-arrow-circle-right"> Selengkapnya</i></center>
                </a>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Penjualan </h6> 
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Total Barang Berdasarkan Kategori</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                    </div>
                </div>
                <!-- Card Body -->


                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->



    </div>

</div>
<!-- /.container-fluid -->

<!-- Stok Barang Modal-->
<div class="modal fade" id="BarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row col-sm-12">
                    <div class="col-sm-6">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Total Barang</h5>
                                <h5 class="card-title">Admin</h5>
                                <p class="card-text"> <b><?= $stok_admin; ?></b> </p>
                                <a class="nav-link" href="/barang/stok">
                                <button class="btn btn-success" type="button">Lihat</button></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Total Barang</h5>
                                <h5 class="card-title">Mitra</h5>
                                <p class="card-text"><b><?= $stok_mitra; ?></b> </p>
                                <a class="nav-link" href="#">
                                <button class="btn btn-success"type="button">Lihat</button></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- total penjualan Barang Modal-->
<div class="modal fade" id="PenjualanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row col-sm-12">
                    <div class="col-sm-6">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Total Penjualan</h5>
                                <h5 class="card-title">Admin</h5>
                                <p class="card-text"> <b><?= $tot_pen_admin; ?></b> </p>
                                <a class="nav-link" href="<?php echo base_url() ?>/penjualan/catatan">
                                <button class="btn btn-success" type="button">Lihat</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Total Penjualan</h5>
                                <h5 class="card-title">Mitra</h5>
                                <p class="card-text"><b><?= $tot_pen_mitra; ?></b> </p>
                                <a class="nav-link" href="<?php echo base_url() ?>/penjualan/laporan_penmitra">
                                <button class="btn btn-success"type="button">Lihat</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Total Penjualan</h5>
                                <h5 class="card-title">Sales</h5>
                                <p class="card-text"><b><?= $tot_pen_sales; ?></b> </p>
                                <a class="nav-link" href="<?php echo base_url() ?>/penjualan/laporan_pensales">
                                <button class="btn btn-success"type="button">Lihat</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Total Penjualan</h5>
                                <h5 class="card-title">Salesnya Mitra</h5>
                                <p class="card-text"><b><?= $tot_pen_sales; ?></b> </p>
                                <a class="nav-link" href="#">
                                <button class="btn btn-success"type="button">belum di ada kodingan</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
</div>

<!-- End of Main Content -->
<?= $this->endSection(); ?>