
<!-- START OF HEADER.PHP -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">

		<!-- FOR PLUGIN INTEGRATION. A PLACEHOLDER FOR FUTURE INJECTION OF CODE BY PLUGINS AND ETC. MUST BE PLACED INSIDE HEAD TAG-->
		<?php wp_head(); ?>
		<!-- END OF WP_HEAD -->

	</head>
	<body>
		<header>
			<div class="container">
			<h1><?php bloginfo('name'); ?></h1>
			<p><?php bloginfo('description'); ?></p>
			</div>
		</header>

		<nav>
			<div class="container">
				<?php header_navigation(); ?>
			</div>
		</nav>

		<main>
			<div class="container">

<!-- END OF HEADER PHP -->
