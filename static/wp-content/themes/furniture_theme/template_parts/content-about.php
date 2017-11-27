<?php

        if( have_posts() ):

            while( have_posts() ): the_post(); ?>

                   <div class="block-about">

                                <?php
                                    $post = get_post();
                                    wpb_child_page($post->ID);
                                ?>
                            <div class="clear"></div>
                    </div>

            <?php endwhile;

        endif;

        ?>