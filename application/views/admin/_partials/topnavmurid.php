<nav class="navbar navbar-expand-lg" style="background-color: #8ACDD7;">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo site_url('main/dashboard'); ?>" style="color: black !important; font-weight: bold;">
        <img src="<?= base_url() . 'assets/dashboard/images/logoo.png' ?>" alt="Logo" style="height: 50px; width: 200px; margin-right: 10px;">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?php echo site_url('main/dashboard'); ?>" style="color: black !important; font-weight: bold;">Home</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?php echo site_url('main/jadwal'); ?>" style="color: black !important; font-weight: bold;">Jadwal</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?php echo site_url('main/presensi'); ?>" style="color: black !important; font-weight: bold;">Presensi</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?php echo site_url('main/profile'); ?>" style="color: black !important; font-weight: bold;"><?php echo $_SESSION['nama']; ?></a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?php echo site_url('adminpanel/logout'); ?>" style="color: black !important; font-weight: bold;">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
