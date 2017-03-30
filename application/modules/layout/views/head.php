<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Blog</title>

<?php if($this->uri->segment(1)=='admin' && $this->uri->segment(2)=='home') {?>
    <!-- Bootstrap -->
    <link href="<?php echo admin_theme('');?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo admin_theme('');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo admin_theme('');?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo admin_theme('');?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo admin_theme('');?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo admin_theme('');?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo admin_theme('');?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo admin_theme('');?>/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo admin_theme('');?>/build/css/custom.min.css" rel="stylesheet">

<?php }?>


<?php if($this->uri->segment(3)==null) {?>
    <?php if(($this->uri->segment(1)=='admin' && $this->uri->segment(2)=='post') || ($this->uri->segment(1)=='admin' && $this->uri->segment(2)=='category')) {?>
        <!-- Bootstrap -->
        <link href="<?php echo admin_theme('');?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo admin_theme('');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo admin_theme('');?>/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo admin_theme('');?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- Datatables -->
        <link href="<?php echo admin_theme('');?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo admin_theme('');?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo admin_theme('');?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo admin_theme('');?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo admin_theme('');?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo admin_theme('');?>/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="<?php echo admin_theme('');?>/build/css/custom.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo public_url('temp/admin');?>/swal2/sweetalert2.min.css" type="text/css" />
    
    <?php }?>
<?php }?>

<?php if($this->uri->segment(3)=='add') {?>
    <!-- Bootstrap -->
    <link href="<?php echo admin_theme('');?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo admin_theme('');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo admin_theme('');?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo admin_theme('');?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo admin_theme('');?>/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo admin_theme('');?>/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo admin_theme('');?>/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo admin_theme('');?>/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo admin_theme('');?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo admin_theme('');?>/build/css/custom.min.css" rel="stylesheet">
<?php }?>

    <!-- My Custom Theme Style -->
    <link href="<?php echo base_url('public/temp/admin');?>/mycss.css" rel="stylesheet">    