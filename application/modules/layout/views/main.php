<!DOCTYPE html>
<html lang="en">
  <head>
<<<<<<< HEAD
    <?php 
    $this->load->view('head');
    ?>

  </head>
=======
  <?php $this->load->view('head'); ?>
  </head>

>>>>>>> origin/master
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
<<<<<<< HEAD
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>LOGO</span></a>
=======
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>My CMS</span></a>
>>>>>>> origin/master
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
<<<<<<< HEAD
            <!--<div class="profile clearfix">
              <div class="profile_pic">
                   <img src="<?php echo admin_theme('');?>/production/images/img.jpg" alt="..." class="img-circle profile_img">
                <?php if ($my_avatar == null) {?>
                <img src="<?php echo admin_theme('');?>/production/images/img.jpg" alt="..." class="img-circle profile_img">
                <?php }?>
                <?php if($my_avatar!=null){?>
                <img src="<?php echo base_url('public/upload/avatar/'.$my_avatar) ;?>" alt="..." class=" img-circle profile_img img-responsive">
                <?php }?>
              </div>
              <div class="profile_info">
                <span>Xin chào !,</span>
                <h2><?php echo $my_name; ?></h2>
              </div>
            </div>-->
=======
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo admin_theme('');?>/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Xin chào,</span>
                <h2>Admin</h2>
              </div>
            </div>
>>>>>>> origin/master
            <!-- /menu profile quick info -->

            <br />

<<<<<<< HEAD
            <!--<?php $this->load->view('left-menu'); ?>            -->
=======
            <!-- sidebar menu -->
            <?php $this->load->view('left-menu'); ?>
            
            <!-- /sidebar menu -->
>>>>>>> origin/master

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
<<<<<<< HEAD
              <a data-toggle="tooltip" data-placement="top" title="Logout">
=======
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
>>>>>>> origin/master
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
<<<<<<< HEAD

        <!--<?php $this->load->view('top-nav'); ?>-->
        <!-- page content -->
        <div class="right_col" role="main">

          <?php $this->load->view($temp, $this->data_layout);?> 

        </div>
      </div>
      </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
        <!--<?php $this->load->view('footer');?>-->
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    
=======
        <!-- top navigation -->
        <?php $this->load->view('top-nav'); ?>
        <!-- /top navigation -->
        
        <!-- page content -->
        <div class="right_col" role="main">
          <?php $this->load->view($temp, $this->data_layout);?> 
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php $this->load->view('footer');?>
        <!-- /footer content -->
      </div>
    </div>
    <?php $this->load->view('js-load');?>
    
	
>>>>>>> origin/master
  </body>
</html>
