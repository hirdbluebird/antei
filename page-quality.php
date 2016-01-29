<?php get_header(); ?>

<div id="content" class="container">
	<div class="row">
		<?php if( have_rows('quality_images') ): ?>
			<?php while( have_rows('quality_images') ): the_row(); ?>

				<div class="col-md-12 quality-image-container margin-top-20">
					<a href="#<?php the_sub_field('quality_id'); ?>" class="quality-link" data-toggle="modal">
						<img src="<?php the_sub_field('quality_image'); ?>" alt="">
					</a>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>



<?php get_footer(); ?>