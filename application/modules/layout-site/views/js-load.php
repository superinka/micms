    <script src="<?php echo fe_url('');?>/js/jquery.js"></script>
    <script src="<?php echo fe_url('');?>/js/bootstrap.min.js"></script>
    <script src="<?php echo fe_url('');?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo fe_url('');?>/js/jquery.isotope.min.js"></script>
    <script src="<?php echo fe_url('');?>/js/main.js"></script>
    <script src="<?php echo fe_url('');?>/js/wow.min.js"></script>


    <?php  $page_title = $this->uri->segment(2);?>
    <script>
      var t = <?php echo json_encode($page_title); ?>;
      var c ='.' + t;
      $(c).addClass('active');
    </script>