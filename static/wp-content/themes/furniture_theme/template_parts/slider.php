
    <!-- Swiper -->

    <?php

    $args = array(
        'post_type' => 'slides',
        'orderby' =>    'menu_order',
        'posts_per_page' => -1
        );

    $slides = new WP_Query( $args );

    ?>

    <?php if( $slides->have_posts() ) : ?>

    <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php while ( $slides->have_posts() ) : $slides->the_post(); ?>

            <div class="swiper-slide">
                <?php the_post_thumbnail('slides' ); ?>
            </div>

            <?php endwhile; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <?php endif; ?>
