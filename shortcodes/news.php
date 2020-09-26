<?php

function def_get_news($atts, $content = null) {
    extract(shortcode_atts(array(
        'posttype' => '',
    ), $atts));

    ob_start();
    
    $news_list = get_posts( array(
        'post_type'   => $posttype,
        'numberposts' => 3,
        'order'       => 'DESC',
    ) );

    ?>
    <div class="main-container-block">
        <?php foreach($news_list as $item){  ?>
                <?php 
                    $title = get_the_title($item->ID);
                    $excerpt_content = get_the_excerpt($item->ID);
                    $img = get_the_post_thumbnail( $item->ID, 'image-size-302', array( 'class' => 'img-responsive' ) );
                ?>

                <div class="row-item">
                    <div class="img_item"><?php echo $img; ?></div>
                    <div class="title_item"><span><?php echo $title; ?></span></div>
                    <div class="excerpt_content"><?php echo $excerpt_content; ?></div>
                </div>
        <?php } ?>
    </div>
    <?php
    wp_reset_postdata();
    return ob_get_clean();
}

add_shortcode('get_news', 'def_get_news');