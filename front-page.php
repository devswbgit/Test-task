<?php get_header(); ?>

<div class="container">
	<div class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>

	<?php if( get_field('small_description') ): ?>
		<div class="small-description"><?php the_field('small_description'); ?></div>
	<?php endif; ?>

	<?php if( get_field('text_link') && get_field('link_app') ): ?>
		<div class="main-btn-listen">
			<div class="btn-listen">
				<a href="<?php the_field('link_app'); ?>"><?php the_field('text_link'); ?></a>
				<div class="text-after-btn"><?php the_field('text_after_btn'); ?></div>
			</div>
		</div>
	<?php endif; ?>

	<div class="main-arrow-down">
		<span class="arrow-down"></span>
	</div>

</div>

</div> <!-- End Design main header template -->

<main id="main-content">

	<div class="main-news">
		<div class="container">

		<?php if( get_field('title_hot_news', 'theme_pages_options') ): ?>
			<h2 class='title-h2'><?php the_field('title_hot_news', 'theme_pages_options'); ?></h2>
		<?php endif; ?>

		<?php if( get_field('small_description_hot_news', 'theme_pages_options') ): ?>
			<div class="small-description-block">
				<?php the_field('small_description_hot_news', 'theme_pages_options'); ?>
			</div>
		<?php endif; ?>

		<?php echo do_shortcode( '[get_news posttype="news"]' ); ?>
			
		</div>
	</div>

	<div class="main-merch">
		<div class="container">

			<?php if( get_field('title_merch', 'theme_pages_options') ): ?>
				<h2 class='title-h2'><?php the_field('title_merch', 'theme_pages_options'); ?><span class="dot-title"></span></h2>
			<?php endif; ?>

			<?php if( get_field('small_description_merch', 'theme_pages_options') ): ?>
				<div class="small-description-block">
					<?php the_field('small_description_merch', 'theme_pages_options'); ?>
				</div>
			<?php endif; ?>

			<?php echo do_shortcode( '[get_merch_slider]' ); ?>

		</div>
	</div>

	<div class="main-clients">
		<div class="container">

			<?php if( get_field('title_block_clients', 'theme_pages_options') ): ?>
				<h2 class='title-h2'><?php the_field('title_block_clients', 'theme_pages_options'); ?></h2>
			<?php endif; ?>

			<?php echo do_shortcode( '[get_clients posttype="clients"]' ); ?>

		</div>
	</div>

	<div class="main-about-us">
		<div class="container">

			<?php if( get_field('about_block_title') ): ?>
				<div class="about-block-title"><?php the_field('about_block_title'); ?></div>
			<?php endif; ?>

			<?php if( get_field('about_block_text') ): ?>
				<div class="about-block-text">
					<?php the_field('about_block_text'); ?>
				</div>
			<?php endif; ?>
			
		</div>
	</div>

</main>

<?php get_footer();