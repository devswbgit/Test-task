<?php

function def_get_merch($atts, $content = null) {
    extract(shortcode_atts(array(

    ), $atts));

    ob_start();
    
    $merch_list = get_posts( array(
        'post_type'   => 'merch',
        'numberposts' => -1,
        'order'       => 'DESC',
    ) );

    ?>
    <div class="owl-carousel">
        <?php foreach($merch_list as $item){ ?>
                <?php 
                    $title = get_the_title($item->ID);
                    $img = get_the_post_thumbnail( $item->ID, 'merch-image-size', array( 'class' => 'img-responsive' ) );
                ?>
                <div class="item">
                    <div class="title-description">
                        <div class="title_item"><span><?php echo $title; ?></span></div>
                        <div class="description"><?php echo $item->post_content; ?></div>
                    </div>
                    <div class="image">
                        <div class="img_item"><?php echo $img; ?></div>    
                    </div>
                </div>
        <?php } ?>
    </div>
    <?php
    wp_reset_postdata();
    return ob_get_clean();
}

add_shortcode('get_merch_slider', 'def_get_merch');