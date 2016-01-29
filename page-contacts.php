<?php get_header(); ?>


<div id="content" class="container">
		<!-- === BEGIN CONTENT === -->	<div class="row margin-vert-30">
		<!-- Main Column -->
		<div class="col-md-9 contact-content">
			<h2>Телефоны</h2>
			<ul class="list-unstyled">
				<li><i class="fa-phone color-primary"></i>+38(099) 030-08-58</li>
				<li><i class="fa-phone color-primary"></i>+38(095) 023-25-57</li>
				<li><i class="fa-phone color-primary"></i>+38(096) 484-36-15</li>
			</ul>
			<h2>Почта</h2>
			<ul class="list-unstyled">
				<li><i class="fa-envelope color-primary"></i>
					<?php the_field('corp_email'); ?>
				</li>
			</ul>
			<h2>Время работы</h2>
			<ul class="list-unstyled"> 
				<li><strong class="color-primary">Будние дни:</strong> 8:00 до 17:00</li>
				<li><strong class="color-primary">В субботу:</strong> с 10:00 до 12:00</li>
				<li><strong class="color-primary">В воскресенье:</strong> выходной</li>
			</ul>
			<!-- Main Content -->
			<div class="headline contact-form"><h2>Контактная форма</h2></div>
			<p>Укажите в соответствующих полях своё имя и адрес электронной почты. 
				В сообщении вы можете написать какое количество товара вы хотели бы заказать, а так же задать
				интерeсующие вас вопросы по поводу нашей продукции, контактов и работы. </p><br>
			<!-- Contact Form -->
			<form>
				<label>Имя</label>
				<div class="row margin-bottom-20">
					<div class="col-md-6 col-md-offset-0">
						<input name="subject" class="form-control" type="text">
					</div>
				</div>
				
				<label>Email <span class="color-red">*</span></label>
				<div class="row margin-bottom-20">
					<div class="col-md-6 col-md-offset-0">
						<input name="email" class="form-control" type="text">
					</div>
				</div>
				
				<label>Сообщение</label>
				<div class="row margin-bottom-20">
					<div class="col-md-8 col-md-offset-0">
						<textarea name="comment" rows="8" class="form-control"></textarea>
					</div>
				</div>
				
				<p><button type="submit" class="btn btn-primary buy-button">Отправить сообщение</button></p>
			</form>
			<!-- End Contact Form -->
			<?php
				//if "email" variable is filled out, send email
				  if (isset($_REQUEST['email']))  {
				  
				  //Email information
				  $admin_email = "antey-2010@mail.ru";
				  $email = $_REQUEST['email'];
				  $subject = $_REQUEST['subject'];
				  $comment = $_REQUEST['comment'];
				  
				  //send email
				  mail($admin_email, "$subject", $comment, "From:" . $email);
				}
  			?>
			<!-- End Main Content -->
		</div>
		<!-- End Main Column -->
		<!-- Side Column -->
	</div>
</div>

<?php get_footer(); ?>