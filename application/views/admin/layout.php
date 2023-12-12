<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head') ?>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- sidebar -->
            <?php $this->load->view('admin/_partials/sidebar') ?>

            <!-- top navigation -->
            <?php $this->load->view('admin/_partials/topnav') ?>

            <!-- page content -->
            <div class="right_col" role="main">
                <?php $this->load->view($view) ?>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <?php $this->load->view('admin/_partials/footer') ?>
        </div>
    </div>

    <!-- script -->
    <?php $this->load->view('admin/_partials/js') ?>

</body>

</html>