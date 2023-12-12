<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/head') ?>
</head>

<body class="bg-light text-dark">
  <?php $this->load->view('admin/_partials/topnavmurid') ?>

  <div class="container-fluid">
    <div class="main_container">

      <!-- top navigation -->

      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Data Presensi</h3>
            </div>

            <!-- <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div> -->
            <br>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>id Presensi</th>
                        <th>Guru</th>
                        <th>Murid</th>
                        <th>Kelas</th>
                        <th>Jadwal</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Catatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($presensi as $val) { ?>
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
                        </tr>
                      <?php $no++;
                      } ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <!-- end project list -->

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