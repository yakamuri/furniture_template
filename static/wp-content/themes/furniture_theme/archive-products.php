<?php get_header(); ?>


<section class="middle">
	<div class="row">

		<div class="col-sm-2 col-12 mobile-nav">
			<?php get_template_part( 'template_parts/menu'); ?>
		</div>

		<div class="col-sm-10 col-12">

			<div class="row">
			<?php

        	if( have_posts() ):

            while( have_posts() ): the_post(); ?>


			<div class="col-md-4 col-sm-6 col-12">
				<!--<?php get_template_part( 'template_parts/products/content', 'product'); ?>-->
				<?php get_template_part('content', 'products'); ?>
				<div class="clear"></div>
			</div>

			<?php endwhile; ?>



			<div class="col-12 text-center">
				<?php the_posts_navigation(); ?>
			</div>

       		<?php endif; ?>

		</div>
			<div class="clear"></div>

		</div>

		<div class="clear"></div>
	</div>
</section>

<?php get_footer(); ?>