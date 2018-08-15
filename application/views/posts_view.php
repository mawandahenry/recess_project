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
    <link rel="stylesheet" href= " <?php echo base_url(); ?>cs/style.cs">
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
   <?php $total_sum=0; ?>
   <div width="20">
   <table class="table-hover" cellspacing="3">
 <tr>
     <td><h4>first name</h4></td> <td>.</td><td style="font-size:23px"><?php echo $posts[2]->fname;?></td>
 </tr>
 <tr>
     <td><h4> last name </h4></td> <td>.</td>  <td style="font-size:25px"><?php echo $posts[1]->sname;?></td>
 </tr>
	 
    
     
         
        
         
   </table>
		</div>
    <table border=1 class="table">
     <tr> 
	 <th>Subject</th>
	 <th>Paper 1</th>
	 <th>Paper 2</th>
	 <th>Paper 3</th>
	 <th>Grade</th>
	 
	 </tr> 
     <?php foreach($posts as $post){?>
	 
     <tr>
         <td class="btn-default"><?php echo $post->subjectName;?></td>
         <td class="btn-info"><?php echo $post->P1;?></td>
		 <td class="btn-warning"><?php echo $post->P2;?></td>
		 <td class="btn-primary"><?php echo $post->P3;?></td>
         <td class="btn-success"><?php echo $post->grade;?></td>
		  <?php $total_sum+=$post->value; ?>
		 
      </tr>    
        <?php }?>  
       
       
   </table>
    <span style="color:purple">Total Points: </span><?php echo $total_sum; ?>
      <table border=1>
     <tr> 
	 
	 <th>Values</th>
	 
	 
	 
	 </tr> 
	 <?php  $total=0;?>
     <?php foreach($values as $post){?>
	 
     <tr>
         
         <td><?php echo $post->value;?></td>
		<?php if($post->subjectName=='physics' || $post->subjectName=='mathematics')
				{
					$total+=$post->value*3;
				}
				elseif($post->subjectName=='computer'||$post->subjectName=='general paper')
					{
						$total+=$post->value*1;
					}
				else
					{
						$total+=$post->value*2;
					}
		
		?>
 	 
      </tr>    
        <?php }?>  
		
   
  
		
    <table border=1 class="table" style="width:395px; margin-left:352px; margin-top:-192px">
        <caption> <h4>List Of Possible Courses </h4></caption>
     <tr> 
	 <th>courses</th>
	 <th>Value</th>
	  </tr> 
	  
	Total Weight&nbsp;&nbsp;<?php echo $total;?>
     <?php foreach($courses as $get){
	  $cutoff=$get->cutoff;
	 //print_r($cutoff);
		if($total>$cutoff){
     echo "<tr>";
         echo "<td>";
		 echo $get->courseName;
		 echo "</td>";
         echo "<td>";
		  echo $get->cutoff;
		 echo "</td>";
		
		
 	 
      echo "</tr>";  
	  }  
         }?> 
		 
		
		
		
   </table>
 <div>
 </section>
   <footer class="footer">
      <div class="three spacing"></div>
	  <div class="container      <div class="row">">

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
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>Recent posts</h4>
            <ul>
              <li><a href="#">Hello World!</a></li>
              <li><a href="#">This is the post title here</a></li>
              <li><a href="#">Our happy day</a></li>
              <li><a href="#">The first works done</a></li>
              <li><a href="#">The cats and dogs</a></li>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <h4>Email updats</h4>
          <p>We want to share our latest trends, news and insights with you.</p>
          <form>
            <input class="email-address" placeholder="Your email address" type="text">
            <input class="btn btn-info btn-sm" type="submit" value="submit">
          </form>
          <div class="spacing"></div>
        </div>
      </div>
	  </div>
      <div class="two spacing"></div>
    </footer>
				
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>

		<nav class="sidebar-menu slide-from-left">
			<div class="nano">
				<div class="content">
					<nav class="responsive-menu">
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li class="menu-item-has-children"><a href="#">Pages</a>
								<ul class="sub-menu">
									<li><a href="services.html">Services</a></li>
									<li><a href="clients.html">Clients</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Blog</a>
								<ul class="sub-menu">
									<li><a href="blog.html">Blog Classic</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-single.html">Single Post</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li class="menu-item-has-children"><a href="#">Works</a>
								<ul class="sub-menu">
									<li><a href="work-3columns.html">Three Columns</a></li>
									<li><a href="work-4columns.html">Four Columns</a></li>
									<li><a href="single-project.html">Single Project</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>

	</div>

 
  </body>
   
</html>