<?php

function def_get_clients($atts, $content = null) {
    extract(shortcode_atts(array(
        'posttype' => 'clients',
    ), $atts));

    ob_start();
    
    $clients_list = get_posts( array(
        'post_type'   => $posttype,
        'numberposts' => -1,
        'order'       => 'ASC',
    ) );

    ?>
    <div class="main-container-block">
        <?php foreach($clients_list as $item){  ?>
                <?php 
                    $img = get_the_post_thumbnail( $item->ID, 'client-image-size', array( 'class' => 'img-responsive' ) );
                ?>

                <div class="row-item">
                    <div class="img_item"><?php echo $img; ?></div>
                </div>
        <?php } ?>
    </div>
    <?php
    wp_reset_postdata();
    return ob_get_clean();
}

add_shortcode('get_clients', 'def_get_clients');