<div class="block-product" id="post-<?php the_ID(); ?>">

	<?php if( has_post_thumbnail() ): ?>

	<div class="block-product--image">

		<?php the_post_thumbnail('medium', array('class'=>'show')); ?>
		<?php
			$featured_images = feature_image();
			if (count($featured_images)){
				echo "<img src='".$featured_images[0]['full']."' class='hover'>";
			}
		?>
	</div>

	<?php endif; ?>

	<div class="block-product--text">
		<?php the_title( sprintf('<h5><a href="%s">', esc_url( get_permalink() ) ),'</a></h5>' ); ?>
		<p><?php the_excerpt(); ?></p>
	</div>
</div>