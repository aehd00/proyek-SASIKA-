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
                            <h3>Form Edit Jadwal</h3>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Jadwal Sasika</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('jadwal/updateJd') ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="idj" value="<?php echo $jd->id_jadwal; ?>">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Id Kelas <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="kelas" class="form-control" value="<?php echo $jd->id_kelas; ?> " required>
                                                    <option hidden value="<?php echo $jd->id_kelas; ?>"><?php echo $jd->id_kelas; ?></option>
                                                    <option value="1">TK A</option>
                                                    <option value="2">TK B</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Id Guru <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 " aria-placeholder="test">
                                                <select name="guru" class="form-control">
                                                    <?php foreach ($idg as $val) { ?>
                                                        <option value="<?php echo $jd->id_guru; ?>" selected hidden><?php echo $jd->id_guru; ?></option>
                                                        <option value="<?php echo $val->id_guru; ?>"><?php echo $val->id_guru; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input value="<?php echo $jd->tanggal; ?>" name="tanggal" class="date-picker form-control" placeholder="yyyy-mm-dd" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Materi <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input value="<?php echo $jd->materi; ?>" type="text" name="materi" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"> SubTopik</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input value="<?php echo $jd->subTopik; ?>" type="text" name="subTopik" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <a href="<?php echo site_url('jadwal/jadwal') ?>" class="btn btn-danger" type="button">Cancel</a>
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