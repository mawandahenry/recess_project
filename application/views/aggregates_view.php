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
     <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/rs-plugin/css/settings.css">
    <link rel="stylesheet" href= <?php echo base_url(); ?>cs/style.cs">
     
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>mat/dist/css/material.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>mat/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
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
                    <div class="container">
   <div class="jumbotron">
       <div class="container">
   <h2 style="text-align:center">
       Student Results Slip</h2>
   </div>
   </div>
   
 
    
       
   
  <div style="width:432px; margin-left:275px">
   
  <strong>Name:</strong><?php echo $names[0]->name;?>
		
    <table border=1 class="table">
     <tr> 
	<th>Subject</th>
	<th>Grade</th>
	 </tr> 
	 <?php $opt=1?>
	 <?php $aggregate=0;?>
     <?php foreach($names as $post){?>
	 
		
	 
     
         <tr><td>Physics</td><td><?php echo $post->physics;?></td></tr>
         <tr><td>Chemistry</td><td><?php echo $post->chemistry;?></td></tr>
		<tr> <td>Biology</td><td><?php echo $post->biology;?></td></tr>
		<tr><td>Mathematics</td><td><?php echo $post->mathematics;?></td></tr>
		<tr><td>History</td><td><?php echo $post->history;?></td></tr>
		<tr><td>Geography</td><td><?php echo $post->geography;?></td></tr>
		<tr><td>English</td><td><?php echo $post->english;?></td></tr>
 	    <tr><td>Art</td><td><?php echo $post->art;?></td></tr>
		<tr><td>commerce</td><td><?php echo $post->commerce;?></td></tr>
		<tr><td>Accounts</td><td><?php echo $post->accounts;?></td></tr>
		<tr><td>Islam</td><td><?php echo $post->islam;?></td></tr>
		<tr><td>computer</td><td><?php echo $post->computer;?></td></tr>
		<tr><td>Enterprenuership</td><td><?php echo $post->enterprenuership;?></td></tr>
          <?php
		  $p=$post->physics;
		  $c=$post->chemistry;
		  $b=$post->biology;
		  $m=$post->mathematics;
		  $h=$post->history;
		  $g=$post->geography;
		  $e=$post->english;
		  $a=$post->art;
		  $co=$post->commerce;
		  $ac=$post->accounts;
		  $i=$post->islam;
		  $en=$post->enterprenuership;
		  //$opt=min($a,$co,$ac,$i,$en);
		  
		  $aggregate+=$p+$c+$b+$m+$h+$g+$e+$opt;
		  ?>
        <?php }?>  
		
   </table>
   <strong>Aggregate:</strong><?php echo $aggregate;?>&nbsp;&nbsp;&nbsp;aggregates in best eight.
   </div>
   </div>
 
  </body>
</html>