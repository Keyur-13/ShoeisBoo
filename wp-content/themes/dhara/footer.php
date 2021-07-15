<?php
/**
 * The template for displaying the footer.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php
/**
 * dhara_before_footer hook.
 *
 */
do_action( 'dhara_before_footer' );
?>

<div <?php dhara_footer_class(); ?>>
	<?php
	/**
	 * dhara_before_footer_content hook.
	 *
	 */
	do_action( 'dhara_before_footer_content' );

	/**
	 * dhara_footer hook.
	 *
	 *
	 * @hooked dhara_construct_footer_widgets - 5
	 * @hooked dhara_construct_footer - 10
	 */
	do_action( 'dhara_footer' );

	/**
	 * dhara_after_footer_content hook.
	 *
	 */
	do_action( 'dhara_after_footer_content' );
	?>
</div><!-- .site-footer -->

<?php
/**
 * dhara_after_footer hook.
 *
 */
do_action( 'dhara_after_footer' );

wp_footer();
?>

</body>
</html>
