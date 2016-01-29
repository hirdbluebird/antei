<?php get_header(); ?>

<!-- === BEGIN CONTENT === -->
<div id="content" class="container">
	<div class="row margin-top-10">
		<!-- Carousel Slideshow -->
		<div id="carousel-example" class="carousel slide carousel-mainpage" data-ride="carousel">
			<!-- Carousel Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
				<?php if(have_rows('mainpage-slider')): ?>
				<?php while(have_rows('mainpage-slider')): the_row(); ?>
					<li data-target="#carousel-example" data-slide-to="<?php echo get_sub_field('slide-id'); ?>"></li>
				<?php endwhile; ?>
				<?php endif; ?>
			</ol>
			<!-- End Carousel Indicators -->
			<!-- Carousel Images -->
			<div class="carousel-inner">
				<?php $first_slide = wp_get_attachment_image_src( get_field('first-slide'), "full" ); ?>
				<div class="item active">
						<img src="<?php echo $first_slide[0]; ?>">
				</div>
				<?php if(have_rows('mainpage-slider')): ?>
				<?php while(have_rows('mainpage-slider')): the_row(); ?>
					<?php $image_attributes = wp_get_attachment_image_src( get_sub_field('mainpage-slide-image'), "full" ) ?>
					<div class="item">
						<img src="<?php echo $image_attributes[0]; ?>">
					</div>
				<?php endwhile; ?>
				<?php endif; ?>	
			</div>
			<!-- End Carousel Images -->
			<!-- Carousel Controls -->
			<a class="left carousel-control" href="#carousel-example" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
			<!-- End Carousel Controls -->
		</div>
		<!-- End Carousel Slideshow -->
	</div>
	<div class="row margin-vert-30">
		<!-- Main Text -->
		<div class="col-md-12 ">
		</div>
	</div>
	<div class="row benefits">
		<h2 class="uppercase">наши преимущества</h2>

		<div class="portfolio-item col-sm-4 col-md-4 animate fadeIn">
			<div class="box-shadow-class" id="image-box-1">
				<a href="#">
					<div class="benefits-image">	
						<img class="image-select"  src="<?php echo get_template_directory_uri(); ?>/assets/img/medal-hover.png" alt="image1">
						<img class="image-select default-img"  src="<?php echo get_template_directory_uri(); ?>/assets/img/medal.png" alt="image1">
					</div>
					<h3 class="margin-top-20">Отличное качество выпускаемой продукции</h3>
					<p class="margin-top-10 margin-bottom-20">Мы следим за качеством выпускаемого товара, который высоко ценится нашими постоянными заказчиками. Работая с нами, вы делаете правильный выбор.</p>
				</a>
			</div>
		</div>
		<!-- //Portfolio Item// -->
		<!-- Portfolio Item -->
		<div class="portfolio-item col-sm-4 col-md-4 animate fadeIn ">
			<div class="box-shadow-class" id="image-box-2">
				<a href="#">
					<div class="benefits-image">
						<img class="image-select" src="<?php echo get_template_directory_uri(); ?>/assets/img/manufacture-hover.png" alt="image2">
						<img class="image-select default-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/manufacture.png" alt="image2">
					</div>
					<h3 class="margin-top-20">Работа непосредственно с заводами</h3>
					<p class="margin-top-10 margin-bottom-20">Мы работаем напрямую с заводами, что позволяет нам обеспечивать непрерывность процесса производства и уверенность в выполнении заказа в полном объёме.</p>
				</a>
			</div>
		</div>
		<!-- //Portfolio Item// -->
		<!-- Portfolio Item -->
		<div class="portfolio-item col-sm-4 col-md-4 animate fadeIn">
			<div class="box-shadow-class" id="image-box-3">
				<a href="#">
					<div class="benefits-image">
						<img class="image-select" src="<?php echo get_template_directory_uri(); ?>/assets/img/pen-hover.png" alt="image2">
						<img class="image-select default-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pen.png" alt="image2">
					</div>
					<h3 class="margin-top-20">Выполнение работы по чертежам</h3>
					<p class="margin-top-10 margin-bottom-20">Вы всегда можете предоставить нам свои чертежи и специально по ним мы изготовим продукцию любой конфигурации, быстро и качественно.</p>
				</a>
			</div>
		</div>
		<!-- //Portfolio Item// -->
		<!-- Portfolio -->
	</div>
	<div class="row benefits">
		<!-- Portfolio Item -->
		<div class="portfolio-item col-sm-3 col-md-3 animate fadeIn">
			<div class="box-shadow-class" id="image-box-1">
				<a href="#">
					<div class="benefits-image">	
						<img class="image-select"  src="<?php echo get_template_directory_uri(); ?>/assets/img/approval-hover.png" alt="image1">
						<img class="image-select default-img"  src="<?php echo get_template_directory_uri(); ?>/assets/img/approval.png" alt="image1">
					</div>
					<h3 class="margin-top-20">Заключение договора</h3><br>
					<p class="margin-top-10 margin-bottom-20"></p>
				</a>
			</div>
		</div>
		<!-- //Portfolio Item// -->
		<!-- Portfolio Item -->
		<div class="portfolio-item col-sm-3 col-md-3 animate fadeIn ">
			<div class="box-shadow-class" id="image-box-2">
				<a href="#">
					<div class="benefits-image">
						<img class="image-select" src="<?php echo get_template_directory_uri(); ?>/assets/img/tenyears-hover.png" alt="image2">
						<img class="image-select default-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/tenyears.png" alt="image2">
					</div>
					<h3 class="margin-top-20">Более десяти лет на рынке</h3>
					<p class="margin-top-10 margin-bottom-20"></p>
				</a>
			</div>
		</div>
		<!-- //Portfolio Item// -->
		<!-- Portfolio Item -->
		<div class="portfolio-item col-sm-3 col-md-3 animate fadeIn">
			<div class="box-shadow-class" id="image-box-3">
				<a href="#">
					<div class="benefits-image">
						<img class="image-select" src="<?php echo get_template_directory_uri(); ?>/assets/img/time-hover.png" alt="image2">
						<img class="image-select default-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/time.png" alt="image2">
					</div>
					<h3 class="margin-top-20">Выполнение работ в указанный срок</h3>
					<p class="margin-top-10 margin-bottom-20"></p>
				</a>
			</div>
		</div>
		<!-- //Portfolio Item// -->
		<!-- Portfolio Item -->
		<div class="portfolio-item col-sm-3 col-md-3 animate fadeIn">
			<div class="box-shadow-class" id="image-box-4">
				<a href="#">
					<div class="benefits-image">
						<img class="image-select" src="<?php echo get_template_directory_uri(); ?>/assets/img/hands-hover.png" alt="image2">
						<img class="image-select default-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/hands.png" alt="image2">
					</div>
					<h3 class="margin-top-20">Работа с иностранными партнёрами</h3>
					<p class="margin-top-10 margin-bottom-20"></p>
				</a>
			</div>
		</div>
		<!-- //Portfolio Item// -->
		<!-- End Portfolio -->
	</div>
</div>

	<!-- === END CONTENT === -->
<?php get_footer(); ?>