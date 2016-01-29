<?php get_header(); ?>


<div id="content" class="container">
    <div class="row margin-vert-30">
		<?php get_sidebar(); ?>
		<!-- Main Column -->
		<div class="col-md-9">
			<div class="blog-post">
				<div class="blog-item-header">
					<h2>
					<a href="#">
						<?php the_title(); ?>
					</a>
					</h2>
				</div>	
				<div class="blog-item">
					<div class="clearfix"></div>
					<div class="blog-post-body row margin-top-15">
						<div class="col-md-12 single-container">
							<div class="post-thumbnail-container">
								<?php 
									$post_ID = get_the_ID();
									echo get_the_post_thumbnail($post_ID);
								?>
							</div>
							<p>
								<?php 
									echo get_post_field('post_content', $post_ID); 
								?>
							</p>
							<a href="http://antey-keramika.com/contacts/" class="btn btn-primary buy-button">Заказать</a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<!-- End Main Column -->






<?php get_footer(); ?> 