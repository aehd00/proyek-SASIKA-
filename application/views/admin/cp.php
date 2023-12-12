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
                            <h3>Pesan Masuk</h3>
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
                                <div class="x_content">

                                    <!-- start project list -->
                                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Murid</th>
                                                <th>Kelas</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Nama Orangtua</th>
                                                <th>Kontak</th>
                                                <th>Email</th>
                                                <th>Tanggal</th>
                                                <th>Pesan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($main as $val) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $no; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->cp_namamurid; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->cp_kelas; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->cp_jenkel; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->cp_namaortu; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->cp_kontak; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->cp_email; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->cp_tanggal; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->cp_pesan; ?>
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