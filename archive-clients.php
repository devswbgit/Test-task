<?php get_header(); ?>

	<div class="container head-title-page">
		<h1 class="page-title styled-title"><?php the_archive_title(); ?></h1>
	</div>

</div> <!-- End Design main header template -->

<main id="main-content">

	<div class="container">
		
		<div class="inner_container">

			<div class="page-content">

				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<div class="breadcrumbs">', '</div>' );
				} ?>

				<?php
				$clients_list = get_posts( array(
				    'post_type'   => 'clients',
				    'numberposts' => -1,
				    'order'       => 'ASC',
				) ); ?>

				<div class="posts-list all-clients">
					<?php foreach($clients_list as $item){ ?>
					    <?php 
					    $image = get_field('white_image_client', $item->ID );
					    $size = 'client-image-size';
					    $link_client = get_permalink($item->ID);
					    ?>

					    <div class="row-item">
					        <div class="img_item">
					        	<a href="<?php echo $link_client;?>">
					        		<?php echo wp_get_attachment_image( $image, $size ); ?>
					        	</a>
					        </div>
					    </div>
					<?php } ?>
				</div>

			</div>

		</div>

	</div>

</main>

<?php get_footer();