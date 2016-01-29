<?php get_header(); ?>




<div id="content" class="container">
    <div class="row margin-vert-30">

    	<?php get_sidebar(); ?>

		<div class="col-md-9">
            <!-- Paragraph and Heading Examples -->
            <div class="row">
                <!-- Paragraph Examples -->
                <div class="portfolio-group col-md-12 no-padding">
					<div class="row">
						<!-- Portfolio Item -->

						<?php 
							$args = array(
								'posts_per_page'   => 500,
								'category'         => '',
								'category_name'    => 'Огнеупорная керамика',
								'orderby'          => 'date',
								'order'            => 'ASC',
								'include'          => '',
								'exclude'          => '',
								'meta_key'         => '',
								'meta_value'       => '',
								'post_type'        => 'post',
								'post_mime_type'   => '',
								'post_parent'      => '',
								'author'	   => '',
								'post_status'      => 'publish',
								'suppress_filters' => true 
							);

							$all_posts = wp_get_recent_posts( $args );
							foreach ( $all_posts as $single_post ) { 
						?>
				
						<div class="portfolio-item col-md-6 code">
							<div class="image-hover">
								<a href="#">
									<figure>
										<?php $post_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $single_post["ID"] ), 'catalog-thumbnail-size'); ?>
										<img src="<?php echo $post_image_url[0]; ?>" alt="image1" width="330" height="250">
										<div class="overlay">
											<a class="expand" href="<?php echo get_permalink( $single_post["ID"] ); ?>"></a>
										</div>
									</figure>
									<h3 class="margin-top-20"><a href="<?php echo get_permalink( $single_post["ID"] ); ?>"><?php echo $single_post["post_title"]; ?></a></h3>
									<p class="margin-top-10"><?php echo $single_post["post_excerpt"]; ?></p>
								</a>
							</div>
						</div>

						<?php } ?>
						
					</div>
				</div>
			</div>                  	 
        	<div class="clearfix margin-bottom-10">
        	</div>
    	</div>
	</div>



<?php get_footer(); ?>