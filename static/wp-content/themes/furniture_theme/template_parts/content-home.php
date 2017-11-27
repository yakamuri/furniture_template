
    <div class="block-slider">
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