<?php get_header(); ?>

<section class="middle">

<div class="row">

	<div class="col-xs-12 col-sm-2 mobile-nav">

		<?php get_template_part('template_parts/menu'); ?>

	</div>

	<div class="col-xs-12 col-sm-10 slider">
		<?php get_template_part('template_parts/slider'); ?>

		<?php

			if( have_posts() ):

				while( have_posts() ): the_post(); ?>


						<div class="text">
							<?php the_content(); ?>
						</div>


				<?php endwhile;

			endif;

			?>
	</div>
	<div class="clear"></div>
</section>


<?php get_footer(); ?>