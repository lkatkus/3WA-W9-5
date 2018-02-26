<?php get_header(); ?>

<!-- ARCHIVES PHP -->

	<section class="article-list">

		<h1><?php _e( 'Archyvas', 'green' ); ?></h1>

		<?php get_template_part('loop'); ?>

	</section>

<?php get_template_part('pagination'); ?>

<!-- ARCHIVE PHP -->

<?php get_footer(); ?>
