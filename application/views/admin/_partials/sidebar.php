<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?= site_url('adminpanel/dashboard') ?>" class="site_title"><i class="fa fa-graduation-cap"></i> <span>SASIKA</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <!-- <div class="profile_pic">
                <img src="<?php echo base_url() . 'assets/foto_profil/' . $this->session->userdata('profil') ?>" alt="..." class="img-circle profile_img">
            </div> -->
            <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php print_r($_SESSION['nama']); ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="<?php echo site_url('murid'); ?>"><i class="fa fa-book"></i> MURID </a></li>
                    <li><a href="<?php echo site_url('jadwal'); ?>"><i class=" fa fa-calendar-o"></i> JADWAL </a></li>
                    <li><a href="<?php echo site_url('presensi'); ?>"><i class="fa fa-check-square-o"></i> PRESENSI </a></li>
                    <li><a href="<?php echo site_url('adminpanel/contact_person'); ?>"><i class="fa fa-commenting"></i> PESAN MASUK </a></li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Live on</h3>
                <ul class="nav side-menu">
                    <li><a href="<?php echo site_url('buku'); ?>"><i class="fa fa-bar-chart-o"></i> BUKU </a></li>
                    <li><a href="<?php echo site_url('adminpanel/logout'); ?>"><i class="fa fa-sign-out"></i> LOGOUT </a></li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <!-- <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div> -->
        <!-- /menu footer buttons -->
    </div>
</div>