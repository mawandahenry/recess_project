<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iam admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ;?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/rs-plugin/css/settings.css">
    <link rel="stylesheet" href= "<?php echo base_url(); ?>cs/style.cs">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ;?>css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


    <body style="background-color:#CCC">
	
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

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        ADMIN
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>/index.php/welcome/fire">Enter cutoffs</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>/index.php/update">Upload results</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>/index.php/studentupload">Enter Students names</a>
                </li>
                 <li>
                    <a href="<?php echo base_url(); ?>/index.php/pass/logout">Log Out</a>
                </li>
                
                
                
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <table class="table"><tr><td> <h3>WELCOME TO THE ADMINISTRATORS PAGE</h3><p> Dear Mr/Miss Administrator, you are  
                     supposed to upload olevel and Alevel results ,input courses and their cutoffs and make important changes . The changes
                         will come in when the public university change the cutoffs. The uploaded results should be verified by the 
                             Uganda National Examination Board 
                                 </p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menue</a></td><td><div align="right">
                            <img src="../../../codeig/gif.gif"
                              ></div>
                       </td></tr></table>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    </section>
    
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ;?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ;?>js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
