<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo lang('App.web_app_name'); ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?=base_url('');?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('');?>/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url('');?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?=base_url('');?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url('');?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url('');?>/dist/css/admin.css">
    <!-- jQuery -->
    <script src="<?=base_url('');?>/plugins/jquery/jquery.min.js"></script>
    <!-- datatable -->
    <script src="<?=base_url('');?>/dist/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?=base_url('');?>/dist/js/validation.js" type="text/javascript"></script>
       <!-- <script src="<?=base_url('');?>/plugins/datepicker/jquery.datetimepicker.min.css"></script> -->
    <?=$this->renderSection("styles");?>
 
</head>

<body class="sidebar-mini">
    <div class="wrapper">



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?=$this->renderSection("content");?>
            <!-- /.content-header -->

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->


    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->


    <!-- Bootstrap 4 -->
    <script src="<?=base_url('');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url('');?>/dist/js/adminlte.min.js"></script>
    <!-- app -->

    <script src="<?=base_url('');?>/plugins/datatables/jquery.dataTables.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('');?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('');?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('');?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('');?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('');?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('');?>/plugins/jszip/jszip.min.js" type="text/javascript"></script>
    <script src="<?=base_url('');?>/plugins/pdfmake/pdfmake.min.js" type="text/javascript"></script>
    <script src="<?=base_url('');?>/plugins/pdfmake/vfs_fonts.js" type="text/javascript"></script>
    <script src="<?=base_url('');?>/plugins/datatables-buttons/js/buttons.html5.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('');?>/plugins/datatables-buttons/js/buttons.print.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('');?>/plugins/datatables-buttons/js/buttons.colVis.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('');?>/dist/js/pincode.js"></script>

    <?=$this->renderSection("scripts");?>
</body>

</html>