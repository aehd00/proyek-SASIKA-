<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head') ?>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- sidebar menu -->
            <?php $this->load->view('admin/_partials/sidebarUser') ?>
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
                                <div class="x_content">

                                    <!-- start project list -->
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>id Murid</th>
                                                <th>id Kelas</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Nama Orang tua</th>
                                                <th>Kontak</th>
                                                <th>Foto Profil</th>
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
           
            <!-- /footer content -->
        </div>
    </div>

    <!-- script -->
    <?php $this->load->view('admin/_partials/footermurid') ?>
    <?php $this->load->view('admin/_partials/js') ?>
</body>

</html>