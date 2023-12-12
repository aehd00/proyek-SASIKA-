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
                            <h3>Data Murid</h3>
                        </div>

                        <!-- <div class="title_right">
                            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">

                                <div class="card-footer clearfix">
                                    <a href="<?php echo site_url('murid/add'); ?>" class="btn btn-sm btn-info float-left">Tambah Murid</a>
                                </div>

                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="x_content">
                                            <div class="table-responsive">
                                                <!-- start project list -->
                                                <table class="table table-striped table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>id Murid</th>
                                                            <th>id Kelas</th>
                                                            <th>Username</th>
                                                            <th>Password</th>
                                                            <th>Nama</th>
                                                            <th>Jenis Kelamin</th>
                                                            <th>Alamat</th>
                                                            <th>Tanggal Lahir</th>
                                                            <th>Nama Orang tua</th>
                                                            <th>Kontak</th>
                                                            <th>Foto Profil</th>
                                                            <th>Status Aktif</th>
                                                            <th>Agama</th>
                                                            <th>NIK</th>
                                                            <th>Email Orangtua</th>
                                                            <th style="width: 200px">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1;
                                                        foreach ($murid as $val) { ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $no; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->id_kelas; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->username; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->password; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->nama; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->jenkel; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->alamat; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->tgl_lahir; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->nama_ortu; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->kontak; ?>
                                                                </td>
                                                                <td>
                                                                    <img src="<?php echo base_url() . 'assets/foto_profil/' . $val->foto_profil ?>" width="150" height="110">
                                                                </td>
                                                                <td>
                                                                    <?php if ($val->statusAktif == "Y") {
                                                                        echo "Aktif";
                                                                    } else {
                                                                        echo "Tidak Aktif";
                                                                    } ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->agama; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->nik; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->email_ortu; ?>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a href="<?php echo site_url('murid/ubah_status/' . $val->id_murid); ?>" class="btn btn-warning"><i class="fa fa-check-square-o"></i>Ubah Status</a>
                                                                        <a href="<?php echo site_url('murid/edit/' . $val->id_murid); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                                        <a href="<?php echo site_url('murid/delete/' . $val->id_murid); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php $no++;
                                                        } ?>
                                                    </tbody>
                                                </table>
                                                <!-- end project list -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

    <!-- script -->
    <?php $this->load->view('admin/_partials/js') ?>
</body>

</html>