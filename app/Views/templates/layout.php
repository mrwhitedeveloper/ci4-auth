<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo env('web_app_name'); ?> </title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="
						<?=base_url('');?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="
							<?=base_url('');?>/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="
								<?=base_url('');?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="
									<?=base_url('');?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="
										<?=base_url('');?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="
											<?=base_url('');?>/dist/css/admin.css">
    <!-- jQuery -->
    <script src="
												<?=base_url('');?>/plugins/jquery/jquery.min.js">
    </script>
    <!-- datatable -->
    <script src="
												<?=base_url('');?>/dist/js/jquery.validate.js" type="text/javascript">
    </script>
    <script src="
												<?=base_url('');?>/dist/js/validation.js" type="text/javascript">
    </script>
    <!-- <script src="
											<?=base_url('');?>/plugins/datepicker/jquery.datetimepicker.min.css"></script> --> <?=$this->renderSection("styles");?>
  </head>
  <body class="layout-top-nav">
    <div class="wrapper">
	
      <nav class="main-header navbar navbar-expand navbar-primary navbar-light text-sm">
        <div class="container">
          <a href="/" class="navbar-brand">
            <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?= env('web_app_name');?></span>
          </a>
          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="index3.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
              </li>
           </ul>
          </div>
        </div>
      </nav>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
       <?=$this->renderSection("content");?>
        <!-- /.content-header -->
      </div>
      <!-- /.content-wrapper -->
	  
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

    <?=$this->renderSection("scripts");?>
</body>

</html>