<?php
/*
Template Name: Full width
*/
?>

<?php get_header(); ?>

<main id="main-content">
	<div class="container">
		<div class="inner_container content-formatting">

			<div class="page-content">

				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<div class="breadcrumbs">', '</div>' );
				} ?>

				<div class="head-title-page">
					<?php the_title( '<h1 class="entry-title styled-title">', '</h1>' ); ?>
				</div>

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
        </div>
	</div>
</main>

<?php get_footer();