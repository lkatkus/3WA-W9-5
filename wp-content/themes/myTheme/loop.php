<?php $x = 0; if (have_posts()): while (have_posts()) : the_post(); $x++ ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- FEATURED IMAGE -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php if(is_home()){
					the_post_thumbnail('home-paveikslelis'); // Declare pixel size you need inside the array
				}else{
					the_post_thumbnail('didelis-paveikslelis'); // Declare pixel size you need inside the array
				}?>
			</a>
		<?php endif; ?>

		<!-- TITLE -->
		<h3>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h3>

		<!-- CONTENT -->
		<p><?php html5wp_excerpt('html5wp_index'); ?></p>

	</article>

	<!-- FOR INDEX PHP FILE WHEN DISPLAYING TWO ELEMENTS ON ONE ROW -->
	<?php if(is_home() && $x == 2): ?>
		<div class="clear"></div>
		<?php $x = 0; ?>
	<?php endif;?>


<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>

		<!-- "_e" is used for future translations -->

		<h2><?php _e( 'Nera, ka rodyti.', 'green' ); ?></h2>

	</article>
	<!-- /article -->

<?php endif; ?>
