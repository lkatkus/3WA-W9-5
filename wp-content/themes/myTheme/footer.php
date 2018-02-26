
<!-- START OF FOOTER.PHP -->

				<div class="clear"></div>
			</div>
		</main>
		<footer>

			<?php get_clients(); ?>
			<div class="container">
				<div class="legal">&copy; <?php _e('Mūsų pirmas tinklalapis','green'); ?> <?= date('Y') ?></div>
				<div class="social-links">

					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar')) ?>

				</div>
				<div class="clear"></div>
			</div>
		</footer>
		<!-- START OF WP_FOOTER -->
		<?php wp_footer(); ?>
		<!-- END OF WP_FOOTER -->
	</body>
</html>

<!-- END OF FOOTER PHP -->
