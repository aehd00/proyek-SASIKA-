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
                            <h3>Form Ubah Presensi</h3>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Edit</h2>
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
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('presensi/updatePres'); ?>" enctype="multipart/form-data">
                                        <?php if ($this->session->flashdata('alert_pesan') != '') : ?>
                                            <div class="alert <?= 'alert-' . $this->session->flashdata('alert_warna') ?> alert-dismissible fade show" role="alert">
                                                <?= $this->session->flashdata('alert_pesan') ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <?php endif ?>

                                        <input type="hidden" name="idpres" value="<?php echo $presensi->id_presensi; ?>">

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Guru<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select class="form-control" name="guru" required='required'>
                                                    <?php foreach ($idg as $val) : ?>
                                                        <option value="<?= $val->id_guru; ?>" <?= $presensi->id_guru == $val->id_guru ? 'selected' : '' ?>>
                                                            <?= $val->nama . ' ( ' . $val->id_guru . ' )'; ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Murid <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select class="form-control" name="murid" required='required'>
                                                    <?php foreach ($idm as $val) : ?>
                                                        <option value="<?= $val->id_murid; ?>" <?= ($presensi->id_murid == $val->id_murid) ? 'selected' : '' ?>>
                                                            <?= $val->nama; ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Kelas <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select id="heard" class="form-control" name="kelas" required='required'>
                                                    <option value="">-- Pilih --</option>
                                                    <option value="TK A" <?= $presensi->id_kelas == 'TK A' ? 'selected' : '' ?>>TK A</option>
                                                    <option value="TK B" <?= $presensi->id_kelas == 'TK B' ? 'selected' : '' ?>>TK B</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Jadwal <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select class="form-control" name="jadwal" required='required'>
                                                    <?php foreach ($idj as $val) { ?>
                                                        <option value="<?php echo $val->id_jadwal; ?>" <?php echo ($presensi->id_jadwal == $val->id_jadwal) ? 'selected' : ''; ?>>
                                                            <?php echo $val->subTopik; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" name="tanggal" value="<?php echo $presensi->tgl_presensi ?>" <?php echo ($presensi->tgl_presensi) ? 'selected' : ''; ?> onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Keterangan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <div id="keterangan" class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="keterangan" value="Hadir" class="join-btn" <?php echo ($presensi->ket_hadir == 'Hadir') ? 'checked' : ''; ?>> &nbsp; Hadir &nbsp;
                                                    </label>
                                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="keterangan" value="Sakit" class="join-btn" <?php echo ($presensi->ket_hadir == 'Sakit') ? 'checked' : ''; ?>> Sakit
                                                    </label>
                                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="keterangan" value="Izin" class="join-btn" <?php echo ($presensi->ket_hadir == 'Izin') ? 'checked' : ''; ?>> Izin
                                                    </label>
                                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="keterangan" value="Tanpa Keterangan" class="join-btn" <?php echo ($presensi->ket_hadir == 'Tanpa Keterangan') ? 'checked' : ''; ?>> Tanpa Keterangan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Catatan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="catatan" required="required" class="form-control" value="<?php echo $presensi->catatan; ?>">
                                            </div>
                                        </div>

                                        <!-- <div class="item form-group">
                                            Foto<a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                        </div> -->


                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <a href="<?php echo site_url('presensi') ?>" class="btn btn-danger" type="button">Cancel</a></button>
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