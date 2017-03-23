<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('head'); ?>
</head><!--/head-->

<body class="homepage">

    <header id="header">
       <?php $this->load->view('top-bar'); ?>

       <?php $this->load->view('main-nav'); ?>
		
    </header><!--/header-->

    <?php if($this->uri->segment(2)=='home') {?>
        <?php $this->load->view('main-slider'); ?>
    <?php }?>
    <!-- main-content -->
    <?php $this->load->view($temp, $this->data_layout);?>
    <!-- /main-content -->

    <!-- footer content -->
    <?php $this->load->view('footer');?>
    <!-- /footer content -->

    <?php $this->load->view('js-load');?>


</body>
</html>