<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head') ?>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- sidebar menu -->
            <?php $this->load->view('admin/_partials/sidebar') ?>
            <!-- /sidebar menu -->

            <!-- top navigation -->
            <?php $this->load->view('admin/_partials/topnav') ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Dashboard</h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_content">

                                <!-- start project list -->
                                
                                    <div class="row">
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-users"></i>
                                                </div>
                                                <div class="count">
                                                    <?= $jml_murid ?>
                                                </div>

                                                <h3>Murid</h3>
                                                <p>
                                                    Jumlah murid yang terdaftar.
                                                    <a href="<?= site_url('murid') ?>" class="btn-link btn-xs">Lihat data</a>.
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-calendar-o"></i>
                                                </div>
                                                <div class="count">
                                                    <?= $jml_presensi ?>
                                                </div>

                                                <h3>Presensi</h3>
                                                <p>
                                                    Jumlah presensi siswa.
                                                    <a href="<?= site_url('presensi') ?>" class="btn-link btn-xs">Lihat data</a>.
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-commenting"></i>
                                                </div>
                                                <div class="count">
                                                    <?= $jml_cp ?>
                                                </div>

                                                <h3>Pesan Masuk</h3>
                                                <p>
                                                    Jumlah pesan masuk. 
                                                    <a href="<?= site_url('adminpanel/contact_person') ?>" class="btn-link btn-xs">Lihat data</a>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <!-- end project list -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
           
            <!-- /footer content -->
        </div>
    </div>

    <!-- script -->
    <?php $this->load->view('admin/_partials/footer') ?>
    <?php $this->load->view('admin/_partials/js') ?>
</body>

</html>