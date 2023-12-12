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
                            <h3>Data Presensi</h3>
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
                                <?php if ($this->session->flashdata('alert_pesan') != '') : ?>
                                    <div class="alert <?= 'alert-' . $this->session->flashdata('alert_warna') ?> alert-dismissible fade show" role="alert">
                                        <?= $this->session->flashdata('alert_pesan') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>

                                <div class="card-footer clearfix">
                                    <a href="<?php echo site_url('presensi/create'); ?>" class="btn btn-sm btn-info float-left">Tambah Presensi</a>
                                    
                                </div>

                                <div class="x_content">

                                    <!-- start project list -->
                                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Guru</th>
                                                <th>Murid</th>
                                                <th>Kelas</th>
                                                <th>Jadwal</th>
                                                <th>Tanggal</th>
                                                <th>Keterangan</th>
                                                <th>Catatan</th>
                                                <th style="width: 200px">aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($data_presensi as $val) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $no; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->nama_guru; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->nama_murid; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->id_kelas; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->subTopik; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->tgl_presensi; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->ket_hadir; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->catatan; ?>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="<?php echo site_url('presensi/edit/' . $val->id_presensi); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                            <a href="<?php echo site_url('presensi/delete/' . $val->id_presensi); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
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