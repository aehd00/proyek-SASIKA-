<!DOCTYPE html>
<html style="position: relative; " lang="en">

<head>
    <?php $this->load->view('admin/_partials/head') ?>
</head>

<body style="margin: 0px;" class="bg-dark">
    <div class="container align-items-center">

        <div role="main d-flex">
            <div class="row justify-content-center" style="margin-top: 2em;">
                <div class="col-md-6 col-sm-12">
                    <div class="x_panel rounded">
                        <div class="x_title">
                            <h2 class="font-weight-bold text-dark">Data Pribadi</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="modal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <form action="<?php echo site_url('main/dashboard') ?>">
                                <?php  ?>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-12 col-sm-12" for="first-name">Nama Panjansg</label>
                                </div>
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 ">
                                        <input disabled type="text" name="nama" class=" rounded form-control" value="<?= $murid->nama ?? ''; ?>">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-6 col-sm-12 " for="first-name">Jenis Kelamin</label>
                                </div>
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 ">
                                        <input disabled type="text" name="jenkel" class=" rounded form-control" value="<?= $murid->jenkel ?? ''; ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-12 col-sm-12 "> Alamat</label>
                                </div>
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12">
                                        <input disabled type="text" name="alamat" class="rounded form-control" value="<?= $murid->alamat ?? ''; ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-12 col-sm-12 ">Tanggal Lahir </label>
                                </div>
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12">
                                        <input disabled type="text" name="tgl_lahir" class="rounded form-control" value="<?= $murid->tgl_lahir ?? ''; ?>">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-12 col-sm-12" for="last-name">Agama</label>
                                </div>
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 ">
                                        <input disabled type="text" name="agama" class="rounded form-control" value="<?= $murid->agama ?? ''; ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-12 col-sm-12 "> NIK</label>
                                </div>
                                <div class="item form-group mb-4 mb-3">
                                    <div class="col-md-12 col-sm-12 ">
                                        <input disabled type="text" name="nik" class="rounded form-control" value="<?php echo $murid->nik ?? ''; ?>">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <div class="col-md-9 col-sm-9 offset-md-5">
                                        <button type="submit" class="btn btn-warning">Kembali</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /page content -->


    <!-- /footer content -->
    </div>
    </div>

    <!-- script -->
    <?php $this->load->view('admin/_partials/js') ?>

</body>

</html>