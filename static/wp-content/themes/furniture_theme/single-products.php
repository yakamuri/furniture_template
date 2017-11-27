<?php get_header(); ?>

<div class="middle">
<div class="row">

	<div class="col-sm-2 col-12 mobile-nav">
		<?php get_template_part( 'template_parts/menu'); ?>
	</div>


	<?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

		<div class="col-12 col-sm-8">

			<article id="post-<?php the_ID(); ?>" class="product-detail" <?php post_class(); ?>>

				<?php if( has_post_thumbnail() ): ?>

					<div class="detail-slider">

						<div class="swiper-container gallery-top">
							<div class="swiper-wrapper">

									<?php
										$featured_images = feature_image();
											foreach($featured_images as $featured_image) {
											echo "<div class='swiper-slide'>";
												echo "<img src='".$featured_image['full']."'>";
											echo "</div>";
											}
									?>

							</div>
							<!-- Add Arrows -->
							<div class="swiper-button-next swiper-button-white"></div>
							<div class="swiper-button-prev swiper-button-white"></div>
						</div>
						<div class="swiper-container gallery-thumbs">
							<div class="swiper-wrapper">

									<?php
										$featured_images = feature_image();
											foreach($featured_images as $featured_image) {
											echo "<div class='swiper-slide'>";
												echo "<img src='".$featured_image['full']."'>";
											echo "</div>";
														}
									?>
							</div>
						</div>
					</div>

				<?php

				endif; ?>

				<div class="slider">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>

				<hr>

				<div class="row">
					<div class="col-xs-6 text-left"><?php previous_post_link(); ?></div>
					<div class="col-xs-6 text-right"><?php next_post_link(); ?></div>
				</div>


			</article>

		</div>

		<div class="col-12 col-sm-2">
			<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
			<?php the_content(); ?>
		</div>

		<?php endwhile;
	endif;
	?>
</div>
</div>

<?php get_footer(); ?>