<footer class="main-footer">

    <div class="container">
        <div class="footer-inner">

        <div class="logo">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?>
        </div>

        <?php if (is_active_sidebar('sidebar-primary')) {
            dynamic_sidebar('footer-primary');
        } ?>

        <div class="footer-latest-post">
            <?php if (is_active_sidebar('latest-posts')) {
                dynamic_sidebar('latest-posts');
            } ?>
        </div>
    </div>
    
</footer>

<?php wp_footer(); ?>

</body>
</html>