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
                            <h3>Form Tambah Presensi</h3>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Presensi</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="#">Settings 1</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('presensi/savePresensi') ?>" method="post" enctype="multipart/form-data">

                                        <?php if ($this->session->flashdata('alert_pesan') != '') : ?>
                                            <div class="alert <?= 'alert-' . $this->session->flashdata('alert_warna') ?> alert-dismissible fade show" role="alert">
                                                <?= $this->session->flashdata('alert_pesan') ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <?php endif ?>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Guru<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="guru" class="form-control" required>
                                                    <option value="">-- Pilih --</option>
                                                    <?php foreach ($idg as $val) : ?>
                                                        <option value="<?= $val->id_guru; ?>"><?= $val->nama . ' ( '. $val->id_guru .' )'; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Murid<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="murid" class="form-control" required>
                                                    <option value="">-- Pilih --</option>
                                                    <?php foreach ($idm as $val) : ?>
                                                        <option value="<?= $val->id_murid; ?>"><?= $val->nama; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kelas <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select id="heard" name="kelas" class="form-control" required="required">
                                                    <option value="">-- Pilih --</option>
                                                    <option value="TK A">TK A</option>
                                                    <option value="TK B">TK B</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Jadwal <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="jadwal" class="form-control" required>
                                                    <option value="">-- Pilih --</option>
                                                    <?php foreach ($idj as $val) { ?>
                                                        <option value="<?php echo $val->id_jadwal; ?>"><?php echo ($val->subTopik) ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" name="tanggal" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                                <script>
                                                    function timeFunctionLong(input) {
                                                        setTimeout(function() {
                                                            input.type = 'text';
                                                        }, 60000);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Keterangan<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <div id="keterangan" class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="keterangan" value="Hadir" class="join-btn"> &nbsp; Hadir &nbsp;
                                                    </label>
                                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="keterangan" value="Sakit" class="join-btn"> Sakit
                                                    </label>
                                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="keterangan" value="Izin" class="join-btn"> Izin
                                                    </label>
                                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="keterangan" value="Tanpa Keterangan" class="join-btn"> Tanpa Keterangan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Catatan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="catatan" required="required" class="form-control">
                                            </div>
                                        </div>

                                        <!-- <div class="item form-group">
                                            Foto<a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                        </div> -->


                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <a href="<?php echo site_url('presensi') ?>" class="btn btn-danger" type="button">Cancel</a>
                                                <button class="btn btn-warning" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <?php $this->load->view('admin/_partials/footer') ?>
            <!-- /footer content -->
        </div>
    </div>

    <!-- script -->
    <?php $this->load->view('admin/_partials/js') ?>

</body>

</html>