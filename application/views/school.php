<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>school project</title>

    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/naco.css">
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

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
								<a href="<?php echo base_url() ; ?>">SCHOOLS PLATFORM</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="<?php echo base_url(); ?>" class="active">Home</a></li>
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
                <section>
                <div class="container" id="size">
              

<table class="table" id="ipo" style="background-color:dodgerblue">
<?php
foreach($results as $row){?>

	    <tr>
       <td>
        <table class="table">
        <tr>
        <td>School Name:</td><td><?php echo $row->name?></td></tr>
       <tr> <td>District:</td><td><?php echo $row->region?></td></tr>
         <tr> <td>CentreNo.:</td><td><?php echo $row->centreno?></td></tr>
           <tr> <td>YearStarted:</td><td><?php echo $row->yearstarted?></td></tr>
             <tr> <td>Ownership:</td><td><?php echo $row->type?></td></tr></table></td><td>
             <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key= AIzaSyAqEfraVj6FNiINwNQuQVjML9hRKPtfOVw '></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:520px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://www.add-map.net/'>add a google map to website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=7a025b1d169be0c0809d7c4ef74ae15df603cdc6'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(<?php echo $row->lat;?>,<?php echo $row->lng; ?>),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng( <?php echo $row->lat; ?>,<?php echo $row->lng; ?>)});infowindow = new google.maps.InfoWindow({content:'<strong></strong><br><?php echo $row->name;?><br> <?php echo $row->region; ?><br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></td></tr>

      
    
    
<?php   
}
?>
 </table>
 
 


 
<h2 style="text-align:center">Search results</h2>
<table class="table">
    
     
    
    <tr>
        <td>
            <h3>UACE</h3>
<form  action="<?php echo base_url() ;?>/index.php/post" method="post">
              </br>
      <label>IndexNo.:</label>
    <input type="text"  required data-validation-required-message="indexNo" name="id">
    <div class="col-md- -6">
     <p class="help-block"></p>
     </div>
    <input type="submit" name="generate" value="generate passlip" class="btn btn-info btn-bg col-md-5">
     </form>
    </td>
            
            
              <td>
                   <h3>UCE</h3>
                  <form action="<?php echo base_url() ;?>/index.php/aggregate_control/compute_aggregate" method="post">
                      
                        <div class="controls">
                            <label>IndexNo.:</label>
                            <input type="text"  required data-validation-required-message="indexNo" name="id">
                            <div class="col-md-15">
                            <p class="help-block"></p>
                        </div>
                        <input type="submit" name="generate" value="generate passlip" class="btn btn-info btn-bg col-md-5">
                         </form> 
                        
                    </td></tr></table>
            
             
             
             
        <!-- /.row -->
              </div>
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      
                   
                    <!-- /.input-group -->
               

     </section>
        <!-- Footer -->
      <footer class="footer">
      <div class="three spacing"></div>
      <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1>
            <a href="<?php echo base_url(); ?>">
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
          
    </footer>

    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
