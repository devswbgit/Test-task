<?php get_header(); ?>

	<div class="container head-title-page">
		<?php the_title( '<h1 class="entry-title styled-title">', '</h1>' ); ?>
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

				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<div class="container breadcrumbs">', '</div>' );
				} ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class( 'single-content' ); ?>>

						<div class="preview-image">
						    <?php the_post_thumbnail(); ?>
						</div>

						<div class="entry-content">
							<?php the_content(); ?>
						</div>

					</article>
				<?php endwhile; ?>
			</div>

			<div class="sidebar-primary">
				<?php get_sidebar('primary'); ?>
			</div>
        </div>
	</div>
</main>

<?php get_footer();