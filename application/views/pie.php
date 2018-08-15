<form action="" method="post">
    <select name=" names">
   <?php
   foreach($schoolnames as $key=>$value){
       echo "<option>".$value['name']."</option>";
   }
   ?>
    </select>
    <input type="submit" value="submit" name="submit"/>
    </form>
    
    
    <?php if(isset($males)){
        ?>
        <script type="text/javascript">
     var female = <?php  echo $females; ?>;
     var male = <?php echo $males; ?>;
   //  alert(female);

 </script>

<!DOCTYPE HTML>
<html>
	<head>
         <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>school project</title>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

	
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/rs-plugin/css/settings.css">
    <link rel="stylesheet" href= <?php echo base_url(); ?>cs/style.cs">
     
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>mat/dist/css/material.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>mat/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: "Pie Chart"
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Male',
                y: male
            }, {
                name: 'Female',
                y: female,
                sliced: true,
                selected: true
            }]
        }]
    });
});
		</script>
	</head>
	<body style="background-color:cornflowerblue">

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
								<a href="<?php echo base_url() ;?>"> <button class="glyphicon glyphicon-home btn btn-primary">Back</button></a>
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
				
                
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<section>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
</section>
	</body>
</html>

        
        <?php
    }