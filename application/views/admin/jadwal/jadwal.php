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
                            <h3>JADWAL</h3>
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
                                <div class="clearfix">
                                    <a href="<?php echo site_url('jadwal/addJadwal'); ?>" class="btn btn-sm btn-info float-left">Tambah Jadwal</a>
                                </div>
                                <div class="x_content">

                                    <!-- start project list -->
                                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Guru</th>
                                                <th>Kelas</th>
                                                <th>Topik</th>
                                                <th>SubTopik</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($jadwal as $val) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $no; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->tanggal; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->id_guru; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->id_kelas; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->materi; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->subTopik; ?>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="<?php echo site_url('jadwal/get_by_id_jadwal/' . $val->id_jadwal); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                            <a href="<?php echo site_url('jadwal/deleteJadwal/' . $val->id_jadwal); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
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