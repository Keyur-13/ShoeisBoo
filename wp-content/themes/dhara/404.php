<?php
/**
 * The template for displaying 404 pages (Not Found).
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
			?>

			<div class="inside-article">

				<?php
				/**
				 * dhara_before_content hook.
				 *
				 *
				 * @hooked dhara_featured_page_header_inside_single - 10
				 */
				do_action( 'dhara_before_content' );
				?>

				<header class="entry-header">
					<h1 class="entry-title" itemprop="headline"><?php echo esc_html( apply_filters( 'dhara_404_title', __( 'Oops! That page can&rsquo;t be found.', 'dhara' ) ) ); // WPCS: XSS OK. ?></h1>
				</header><!-- .entry-header -->

				<?php
				/**
				 * dhara_after_entry_header hook.
				 *
				 *
				 * @hooked dhara_post_image - 10
				 */
				do_action( 'dhara_after_entry_header' );
				?>

				<div class="entry-content" itemprop="text">
					<?php
					echo '<p>' . esc_html( apply_filters( 'dhara_404_text', __( 'It looks like nothing was found at this location. Maybe try searching?', 'dhara' ) ) ) . '</p>'; // WPCS: XSS OK.

					get_search_form();
					?>
				</div><!-- .entry-content -->

				<?php
				/**
				 * dhara_after_content hook.
				 *
				 */
				do_action( 'dhara_after_content' );
				?>

			</div><!-- .inside-article -->

			<?php
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
