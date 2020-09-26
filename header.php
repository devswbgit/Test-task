<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <?php
        wp_head();
    ?>
</head>
<body <?php body_class(); ?>>

<!-- Design main header template -->
<?php if( !is_page_template( 'page-fullwidth.php' ) ){ ?>
    <div class="main-header-template">
<?php } ?>

<header id="main-header">

    <div class="container">
        <div class="header-inner">
            <div class="logo">
                <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }
                ?>
            </div>

            <div class="main-manu-search">
                <div class="main-menu-wrap">
                
                    <?php wp_nav_menu( array(
                                'theme_location'  => 'menu-header',
                                'container'       => 'nav',
                                'container_class' => 'navbar',
                                'menu_class'      => 'nav-menu',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul><div class="overlay"></div>'
                    ) ); ?>

                </div>
                
                <div class="menu-bar">
                    <?php esc_html_e('Menu'); ?>
                </div>

                <div class="header-search">
                    <div class="form-dropdown">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="form-open-icon"></div>
                </div>
            </div>

        </div>
    </div>

</header>