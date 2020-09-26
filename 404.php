<?php get_header(); ?>

	<div class="container head-title-page">
		<h1 class="page-title styled-title">404</h1>
	</div>

</div> <!-- End Design main header template -->

<main id="main-content">
	<div class="container">
		<div class="inner_container content-formatting">

			<?php if ( is_active_sidebar( 'sidebar-primary' ) ) { ?>
			<div class="page-content with-sidebar">
			<?php } else { ?>
			<div class="page-content">
			<?php } ?>
					
				<div class="subtitle"><?php esc_html_e( 'Ooops... Page Not Found!', 'ideals' ); ?></div>
				<div class="desc">
					<?php esc_html_e( 'Sorry, but the page you are looking for doesn\'t exist.', 'ideals' ); ?>
				</div>

				<div class="btn-back-home">
					<a href="<?php echo esc_url( get_home_url() ); ?>"><?php esc_html_e( 'Back To Home Page', 'ideals' ); ?></a>
				</div>
			</div>

			<div class="sidebar-primary">
				<?php get_sidebar('primary'); ?>
			</div>
        </div>
	</div>
</main>

<?php get_footer();