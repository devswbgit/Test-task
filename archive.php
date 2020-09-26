<?php get_header(); ?>

	<div class="container head-title-page">
		<h1 class="page-title styled-title"><?php the_archive_title(); ?></h1>
	</div>

</div> <!-- End Design main header template -->

<main id="main-content">

	<div class="container">
		<div class="inner_container">

			<?php if ( is_active_sidebar( 'sidebar-primary' ) ) { ?>
			<div class="page-content with-sidebar">
			<?php } else { ?>
			<div class="page-content">
			<?php } ?>

				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<div class="breadcrumbs">', '</div>' );
				} ?>
				
				<div class="posts-list">
					<?php if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/entry/content', get_post_type() );
							endwhile;
						else :
							get_template_part( 'template-parts/entry/content', 'none' );
						endif; ?>
				</div>

				<?php
				 if(function_exists('wp_paginate')){
					wp_paginate();
				 }
				?>

			</div>

			<div class="sidebar-primary">
				<?php get_sidebar('primary'); ?>
			</div>

		</div>
	</div>
</main>

<?php get_footer();