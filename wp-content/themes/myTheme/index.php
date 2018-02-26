<?php get_header(); ?>

<!-- INDEX PHP -->

	<section class="article-list homepage">

		<h1><?php _e( 'Naujausi irasai', 'green' ); ?></h1>

		<?php get_template_part('loop'); ?>

	</section>

<?php get_template_part('pagination'); ?>

<!-- INDEX PHP -->

<?php get_footer(); ?>
