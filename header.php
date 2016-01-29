<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<!-- Title -->
	<title>Antey</title>
	<!-- Meta -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<!-- Favicon -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/logo-icon.png" rel="shortcut icon">
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nexus.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<!-- Google Fonts-->
	<link href="http://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="pre_header" class=""></div>
	<div class="header_info">
		<div class="container">
			<div class="col-lg-7 col-md-7 col-sm-7">
				<div class="card-container">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.jpg" alt="">
				</div>
				<div class="company-info">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/17.png" alt="">
					<img class="shine" src="<?php echo get_template_directory_uri(); ?>/assets/img/shine.png" alt="">
				</div>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-3 pull-right phone-block">
				<p class="phone-numbers">Телефоны:</p>
				<span class="bold-text"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-number.png" alt="" height="25"> +38(099) 030-08-58</span><br>
				<span class="bold-text"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-number.png" alt="" height="25"> +38(096)	484-36-15</span><br>
				<span class="bold-text"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-number.png" alt="" height="25"> +38(095) 023-25-57</span>
			</div>
		</div>
	</div>
	<div id="header" class="container">
		<div class="row">
			<!-- Top Menu -->	
			<div class="col-md-12 margin-top-30">
				<?php 

					$defaults = array(
						'container' 	  => 'div',
						'container_class' => 'align-center-navbar',
						'container_id'	  => 'hornav',
						'items_wrap' 	  => '<ul class="nav navbar-nav">%3$s</ul>'
					);

					wp_nav_menu($defaults);
			
				?>
			</div>


			<div class="clear"></div>
				<!-- End Top Menu -->
			</div>
		</div>
		<!-- === END HEADER === -->