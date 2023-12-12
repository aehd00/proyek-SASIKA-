<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php $this->load->view('admin/_partials/head') ?>
</head>

<body class="bg-light" style="overflow: hidden;">
    <?php $this->load->view('admin/_partials/topnavmurid') ?>
    <div class="container-fluid">
        <div class="main_container" style="background-image: url('<?= base_url() . 'assets/dashboard/images/hero.png' ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 80vh; backgorund-opacity: 0.5;">
            
            <!-- sidebar menu -->
           
            <!-- /sidebar menu -->

            <!-- top navigation -->
        
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main" style="margin-bottom: -130px">
                <div class="">
                    <div class="clearfix"></div>
                    <div class="row justify-content-center" style="margin-top: 150px;">
                        <div class="col-md-3">
                            <div class="card" style="background-color: #F9F9E0; border-radius: 20px;">
                                <div class="card-body">
                                    <h4 class="font-weight-bold text-black mt-4">
                                        <a href="#modalPribadi" data-toggle="modal" data-target="#modalPribadi">
                                            <center><i class="fa fa-solid fa-user" style="font-size: 98px;"></i><br><br>Data Pribadi</center>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="background-color: #F9F9E0; border-radius: 20px;">
                                <div class="card-body">
                                    <h4 class="font-weight-bold text-black mt-4">
                                        <a href="#modalDarurat" data-toggle="modal" data-target="#modalDarurat">
                                            <center><i class="bi bi-telephone-fill" style="font-size: 80px;"></i><br><br>Kontak Darurat</center>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL KONTAK PRIBADI -->
            </div>
        </div>
    </div>
        <div class="modal fade pt-5" id="modalPribadi" tabindex="-1" aria-labelledby="modalPribadi" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPribadi">Data Pribadi</h5>
                    </div>
                    <div class="modal-body">
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" for="first-name">Nama</label>
                        </div>
                        <div class="item form-group">
                            <input disabled type="text" name="nama" class=" rounded form-control" value="<?= $this->session->userdata('nama')  ?>">
                        </div>

                        <div class="item form-group ">
                            <label class="col-form-label col-md-3 col-sm-3 " for="first-name">Kelas</label>
                        </div>
                        <div class="item form-group">
                            <input disabled type="text" name="kelas" class=" rounded form-control" value="<?= $this->session->userdata('kelas')  ?>">
                        </div>

                        <div class="item form-group ">
                            <label class="col-form-label col-md-3 col-sm-3 " for="first-name">Jenis Kelamin</label>
                        </div>
                        <div class="item form-group">
                            <input disabled type="text" name="jenkel" class=" rounded form-control" value="<?= $this->session->userdata('jenis') ?>">
                        </div>
                        <!-- <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 "> Tempat Kelahiran</label>
                        </div>
                        <div class="item form-group">
                            <input disabled type="text" name="tempatKelahiran" class="rounded form-control" value="<?= $this->session->userdata('tempatKelahiran')  ?>">
                        </div> -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 ">Tanggal Lahir </label>
                        </div>
                        <div class="item form-group">
                            <input disabled type="text" name="tgl_lahir" class="rounded form-control" value="<?= $this->session->userdata('tgl')  ?>">
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" for="last-name">Agama</label>
                        </div>
                        <div class="item form-group">
                            <input disabled type="text" name="agama" class="rounded form-control" value="<?= $this->session->userdata('agama')  ?>">
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 "> NIK</label>
                        </div>
                        <div class="item form-group mb-4 mb-3">
                            <input disabled type="text" name="nik" class="rounded form-control" value="<?= $this->session->userdata('nik')  ?>">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="#modalPribadi" data-toggle="modal" data-target="#modalPribadi" role="Button">Close</a>
                        <!-- <button type="submit" class="btn-close btn btn-secondary" data-bs-dismiss="#modalPribadi">Close</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL DATA ORANG TUA -->
        <!-- <div class="modal fade pt-5" id="modalOrangTua" tabindex="-1" aria-labelledby="modalOrangTua" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalOrangTua">Data Orang Tua</h5>
                    </div>
                    <div class="modal-body">
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" for="first-name">Nama Ayah</label>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 ">
                                <input disabled type="text" name="namaAyah" class=" rounded form-control" value="<?php // print_r($_SESSION['namaAyah'])  ?>">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 " for="first-name">Email Ayah</label>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 ">
                                <input disabled type="text" name="emailAyah" class=" rounded form-control" value="<?php // print_r($_SESSION['emailAyah'])  ?>">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 ">Telepon Ayah</label>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6">
                                <input disabled type="text" name="tlpnAyah" class="rounded form-control" value="<?php // print_r($_SESSION['teleponAyah'])  ?>">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 ">Nama Ibu </label>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6">
                                <input disabled type="text" name="nama ibu" class="rounded form-control" value="<?php // print_r($_SESSION['namaIbu'])  ?>">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" for="last-name">Email Ibu</label>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 ">
                                <input disabled type="text" class="rounded form-control" value="<?php // print_r($_SESSION['emailIbu'])  ?>">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 "> Telepone Ibu</label>
                        </div>
                        <div class="item form-group mb-4 mb-3">
                            <div class="col-md-6 col-sm-6 ">
                                <input disabled type="text" class="rounded form-control" value="<?php // print_r($_SESSION['teleponIbu'])  ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="#modalOrangTua" data-toggle="modal" data-target="#modalOrangTua" role="Button">Close</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- MODAL DARURAT -->
        <div class="modal fade pt-5" id="modalDarurat" tabindex="-1" aria-labelledby="modalDarurat" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalOrangTua">Kontak Darurat</h5>
                    </div>
                    <div class="modal-body">
                        <div class="item form-group">
                            <label class="col-form-label" for="first-name">Nama Orang Tua</label>
                        </div>
                        <div class="item form-group">
                            <input disabled type="text" name="nama" class=" rounded form-control" value="<?= $this->session->userdata('nama_ortu') ?>">
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label " for="first-name">No Telp Ortu</label>
                        </div>
                        <div class="item form-group">
                            <input disabled type="text" name="emailAyah" class=" rounded form-control" value="<?= $this->session->userdata('notelp_ortu') ?>">
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label ">Email</label>
                        </div>
                        <div class="item form-group">
                            <input disabled type="text" name="tlpnAyah" class="rounded form-control" value="<?= $this->session->userdata('email_ortu') ?>">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="#modalDarurat" data-toggle="modal" data-target="#modalDarurat" role="Button">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- script -->
        <?php $this->load->view('admin/_partials/footermurid') ?>
        <?php $this->load->view('admin/_partials/js') ?>
      
</body>

</html>