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
                            <h3>Form Tambah Murid</h3>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Design</h2>
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
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="<?php echo site_url('murid/update'); ?>">
                                        <input type="hidden" name="id_murid" value="<?= $murid->id_murid ?>">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID Kelas <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select id="heard" name="id_kelas" class="form-control" required="required">
                                                    <option value="">-- Pilih --</option>
                                                    <option value="TK A" <?= $murid->id_kelas == 'TK A' ? 'selected' : '' ?>>TK A</option>
                                                    <option value="TK B" <?= $murid->id_kelas == 'TK B' ? 'selected' : '' ?>>TK B</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Username <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="username" value="<?php echo $murid->username ?>" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Password <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="password" value="<?php echo $murid->password ?>" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Nama</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="nama" value="<?php echo $murid->nama ?>" required="required" class="form-control">
                                            </div>
                                        </div>
                                         <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" value="<?php echo $murid->jenkel ?>">Gender</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <div id="gender" class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-secondary <?= $murid->jenkel == 'Laki-laki' ? 'focus active' : '' ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" <?= $murid->jenkel == 'Laki-laki' ? 'checked' : '' ?>>
                                                        <input type="radio" name="jenkel" value="Laki-laki" class="join-btn">Male
                                                    </label>
                                                    <label class="btn btn-primary" <?= $murid->jenkel == 'Perempuan' ? 'focus active' : '' ?> data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" <?= $murid->jenkel == 'Perempuan' ? 'checked' : '' ?>>
                                                        <input type="radio" name="jenkel" value="Perempuan" class="join-btn"> Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Alamat</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="alamat" value="<?php echo $murid->alamat ?>" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" name="tgl_lahir" value="<?php echo $murid->tgl_lahir ?>" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Nama Orang tua</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="nama_ortu" value="<?php echo $murid->nama_ortu ?>" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Kontak</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="kontak" required="required" value="<?php echo $murid->kontak ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Foto Profil</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" id="image-input" name="foto_profil" placeholder="Foto Profil" />
                                                <p class="help-block text-danger"></p>
                                                <img id="image-preview" src="<?php echo base_url() . "/assets/foto_profil/" . $murid->foto_profil; ?>" width="100" /><br><br>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Agama</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="agama" required="required" value="<?php echo $murid->agama ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"> NIK</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="nik" required="required" value="<?php echo $murid->nik ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Email Orangtua</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="email_ortu" required="required" value="<?php echo $murid->email_ortu ?>" class="form-control">
                                            </div>
                                        </div>
                                        <!-- <div class="item form-group">
                                            Foto<a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                        </div> -->


                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <button type="submit" class="btn btn-success">Simpan</button>
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

    <script>
        // Menanggapi perubahan pada elemen input file
        document.getElementById('image-input').addEventListener('change', function() {
            previewImage(this);
        });

        // Fungsi untuk menampilkan preview gambar
        function previewImage(input) {
            var preview = document.getElementById('image-preview');
            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(file);
            } else {
                // Jika pengguna membatalkan pemilihan gambar
                preview.src = "";
            }
        }
    </script>

</body>

</html>