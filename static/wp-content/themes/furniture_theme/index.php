<?php

get_header(); ?>

<section class="middle">

<div class="row">

	<div class="col-12 col-sm-2">

		<div class="logo">
			<a href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_sandor_attila.png" alt="">
			</a>
		</div>

		<?php get_template_part('template_parts/menu'); ?>

	</div>

	<div class="col-12 col-sm-10">

		<?php
		$post = get_post();

			get_template_part('template_parts/content', $post->post_name);

			?>
	</div>
	<div class="clear"></div>
</div>
</section>


<?php get_footer(); ?>