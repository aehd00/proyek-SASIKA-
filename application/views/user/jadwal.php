<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head') ?>
</head>

<body class="bg-light">
<?php $this->load->view('admin/_partials/topnavmurid') ?>
            <!-- /top navigation -->
    <div class="container-fluid">
        <div class="main_container text-dark">
            <!-- sidebar menu -->
          
            <!-- /sidebar menu -->

            <!-- top navigation -->
           

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Jadwal</h3>
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
                                                <th>Tanggal</th>
                                                <th>Guru</th>
                                                <th>Kelas</th>
                                                <th>Topik</th>
                                                <th>SubTopik</th>
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
            
        </div>
    </div>

    <!-- script -->
    <?php $this->load->view('admin/_partials/footermurid') ?>
    <?php $this->load->view('admin/_partials/js') ?>
</body>

</html>