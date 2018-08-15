<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Results mangement Project</title>
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/rs-plugin/css/settings.css">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/simple-sidebar.css" rel="stylesheet">
    </head>

    <body>

      <div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
								<a href="index-2.html">SCHOOLS PLATFORM</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="<?php echo base_url(); ?>" class="active"><button class="glyphicon glyphicon-home btn btn-primary">Back</button></a></li>
									<li><a href="#" class="has-submenu">Performance</a>
										<ul class="sub-menu">
											<li><a href="<?php echo base_url(); ?>/index.php/points_controller">Best schools</a></li>
											<li><a href="<?php echo base_url(); ?>/index.php/fetcher">Best districts</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Statistics</a>
										<ul class="sub-menu">
											<li><a href="<?php echo base_url(); ?>/index.php/pp">Pie charts</a></li>
											<li><a href="<?php echo base_url(); ?>/index.php/generate">Line graphs</a></li>
											
										</ul>
									</li>
									
									
									
								</ul>
							</nav>
						</div>
					</div>
				</header>
				</div>
				</div>
				</div>

        <div class="container" style="margin-top:211px ">    
             <br>
             
            <?php if (isset($error)): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success') == TRUE): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php endif; ?>
             
            <h2> Marks Uploading Section UACE</h2>
            <p> By clicking on the upload button, direct the system to the root directory of the excel file that should be uploaded.</p>
                <form method="post" action="<?php echo base_url(); ?>/index.php/DDA/importcsv" enctype="multipart/form-data" multiple="multiple">
                    <input type="file" name="userfile" ><br><br>
                    <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">
                </form>
            
            <br><br></div>
           


            
    <footer class="footer">
      <div class="three spacing"></div>
      <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1>
            <a href="index.html">
             SCHOOLS SITE
            </a>
          </h1>
          <p>©2016 . All rights reserved.</p>
          <div class="spacing"></div>
          <ul class="socials">
            <li>
              <a href="http://facebook.com">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="http://twitter.com">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="http://dribbble.com">
                <i class="fa fa-dribbble"></i>
              </a>
            </li>
            <li>
              <a href="http://tumblr.com">
                <i class="fa fa-tumblr"></i>
              </a>
            </li>
          </ul>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>Some pages</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">View some works here</a></li>
              <li><a href="#">Follow our blog</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Our services</a></li>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
       
         
      <div class="two spacing"></div>
    </footer>
       



    </body>
</html>
