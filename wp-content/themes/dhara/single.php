<?php
/**
 * The Template for displaying all single WPKoi events.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php dhara_content_class();?>>
		<main id="main" <?php dhara_main_class(); ?>>
			<?php
			/**
			 * dhara_before_main_content hook.
			 *
			 */
			do_action( 'dhara_before_main_content' );

			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'single' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || '0' != get_comments_number() ) :
					/**
					 * dhara_before_comments_container hook.
					 *
					 */
					do_action( 'dhara_before_comments_container' );
					?>

					<div class="comments-area">
						<?php comments_template(); ?>
					</div>

					<?php
				endif;

			endwhile;

			/**
			 * dhara_after_main_content hook.
			 *
			 */
			do_action( 'dhara_after_main_content' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	/**
	 * dhara_after_primary_content_area hook.
	 *
	 */
	 do_action( 'dhara_after_primary_content_area' );

	 dhara_construct_sidebars();

get_footer();
