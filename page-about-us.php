<?php get_header(); ?>

<div id="content" class="container">
	<div class="row margin-vert-30">
		<div class="col-md-12">
			<div class="col-md-7 pull-right">
				<!-- Carousel Slideshow -->
				<div id="carousel-example-1" class="carousel slide carousel-about" data-ride="carousel">
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
					<a class="left carousel-control" href="#carousel-example-1" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-1" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
					<!-- End Carousel Controls -->
				</div>
				<!-- End Carousel Slideshow -->
			</div>
			<h2>О нас</h2>
			<div class="">
				<p>Частное предприятие фирма «Антей» создано 1997 году.
				С 2000 года наше предприятие изготавливает техническую керамику (хим.посуда, трубка МКР, литниковые системы, для сталелитейных заводов, лодочки сжигания ЛС-2; ЛС-3, лодочки зольности ЛЗ-2; ЛЗ-3; ЛЗ-4), а также керамику по чертежам заказчика. 
				Предприятие имеет все разрешительные и подтверждающие документы: заключение лаборатории, радиационный контроль, сертификат от предприятия заключение государственной санитарно-эпидемиологической экспертизы, справка о внесении к единому государственному реестру.
				Наше предприятие сотрудничало с: ОАО "Металлургический комбинат Азовсталь», ОАО "Міттал Стіл Кривий Ріг", ПрАО «Донецксталь» металлургический завод, ОАО «Макеевский Металлургический Комбинат», ООО «Химсервис», ООО «Реагент-Альфа», ООО «Югсинтез» ООО «АТОМХИМСНАБ»,
				ООО (НПКФ) термо-инжиниринг, ПАО "Кременчугский Сталелитейный Завод" и др.</p>
				<p>С 2014 по 2015 предприятие было модернизировано. На данный момент мы динамично развиваемся на рынке технической керамики. </p>
			</div>
			</div>
			<!-- Our Experts -->
			<!-- End Our Experts -->
		</div>
		<hr class="margin-vert-30">
	</div>
</div>












<?php get_footer(); ?>