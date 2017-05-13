<?php 
	
/*
	Template Name: Template About
*/
	
get_header(); ?>

<section class="middle">
	<div class="row">

		<div class="col-sm-2 col-xs-12">
			<?php get_template_part( 'template_parts/_menu'); ?>
		</div>

		<div class="col-sm-10 col-xs-12">

			<?php

        if( have_posts() ):

            while( have_posts() ): the_post(); ?>

			<!--<?php get_template_part( 'template_parts/_home_text'); ?>-->

			<div class="text">
				<p><?php the_content(); ?></p>
			</div>

			<?php endwhile;

        endif;

        ?>

		</div>

	</div>
</section>

<?php get_footer(); ?>