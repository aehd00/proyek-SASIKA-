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
                            <h3>Data buku</h3>
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
                                    <a href="<?php echo site_url('buku/add'); ?>" class="btn btn-sm btn-info float-left">Tambah Buku</a>
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
                                                            <th>ID Buku</th>
                                                            <th>Nama buku</th>
                                                            <th>Harga</th>
                                                            <th>Stok</th>
                                                            <th>Gambar</th>
                                                            <th>Tanggal Post</th>

                                                            <th style="width: 200px">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1;
                                                        foreach ($buku as $val) { ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $no; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->nama_buku; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->harga; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->stok; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $val->tanggal_post; ?>
                                                                </td>
                                                                <td>
                                                                    <img src="<?php echo base_url() . 'assets/foto_buku/' . $val->foto_buku ?>" width="150" height="110">
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a href="<?php echo site_url('buku/edit/' . $val->id_buku); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                                        <a href="<?php echo site_url('buku/delete/' . $val->id_buku); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
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