<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/dist/css/AdminLTE.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/plugins/iCheck/square/blue.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
	folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/dist/css/skins/_all-skins.min.css">
<!-- Morris chart -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/plugins/morris/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/plugins/datepicker/datepicker3.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/plugins/daterangepicker/daterangepicker-bs3.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/plugins/datatables/dataTables.bootstrap.css">

<?php 
if($page=='login'){ ?>
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/dist/css/AdminLTE.min.css">
<?php 
}else if($page=='matter'){ ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte'); ?>/plugins/datatables/dataTables.bootstrap.css">
<?php } ?>