<?php
/**
 * The template for displaying Archive pages.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php dhara_content_class(); ?>>
		<main id="main" <?php dhara_main_class(); ?>>
			<?php
			/**
			 * dhara_before_main_content hook.
			 *
			 */
			do_action( 'dhara_before_main_content' );

			if ( have_posts() ) :

				/**
				 * dhara_archive_title hook.
				 *
				 *
				 * @hooked dhara_archive_title - 10
				 */
				do_action( 'dhara_archive_title' );

				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;

				dhara_content_nav( 'nav-below' );

			else :

				get_template_part( 'no-results', 'archive' );

			endif;

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
