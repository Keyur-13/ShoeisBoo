<?php
/**
 * Nozama_Lite onboarding related code.
 */

if ( ! defined( 'NOZAMA_LITE_WHITELABEL' ) || false === (bool) NOZAMA_LITE_WHITELABEL ) {
	add_action( 'pt-ocdi/after_import', 'nozama_lite_ocdi_after_import_setup' );
}

add_filter( 'pt-ocdi/timeout_for_downloading_import_file', 'nozama_lite_ocdi_download_timeout' );
function nozama_lite_ocdi_download_timeout( $timeout ) {
	return 60;
}

add_filter( 'pt-ocdi/plugin_intro_text', 'nozama_lite_ocdi_intro_text' );
function nozama_lite_ocdi_intro_text( $html ) {
	$sample_content_url = nozama_lite_documentation_url() . '#sample-content';

	ob_start();
	?>
	<p><?php
		/* translators: %s is a url. */
		echo wp_kses_post( sprintf( __( 'Looking for the Nozama Lite sample content files? Download them <a href="%s" target="_blank">here</a>.', 'nozama-lite' ), esc_url( $sample_content_url ) ) );
	?></p>
	<hr>
	<?php

	$append_html = ob_get_clean();

	return $html . $append_html;
}

function nozama_lite_ocdi_after_import_setup() {

	// Set up nav menus.
	$main_menu  = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$main_right = get_term_by( 'name', 'Account', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
		'menu-1' => $main_menu->term_id,
		'menu-2' => $main_right->term_id,
	) );

	// Set up home and blog pages.
	$front_page_id = get_page_by_title( 'Home - SlideShow' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

	// WooCommerce
	if ( class_exists( 'WooCommerce' ) ) {
		$wc_shop_page_id      = get_page_by_title( 'Shop' );
		$wc_cart_page_id      = get_page_by_title( 'Cart' );
		$wc_checkout_page_id  = get_page_by_title( 'Checkout' );
		$wc_myaccount_page_id = get_page_by_title( 'My account' );

		if ( ! empty( $wc_shop_page_id ) ) {
			update_option( 'woocommerce_shop_page_id', $wc_shop_page_id->ID );
		}
		if ( ! empty( $wc_cart_page_id ) ) {
			update_option( 'woocommerce_cart_page_id', $wc_cart_page_id->ID );
		}
		if ( ! empty( $wc_checkout_page_id ) ) {
			update_option( 'woocommerce_checkout_page_id', $wc_checkout_page_id->ID );
		}
		if ( ! empty( $wc_myaccount_page_id ) ) {
			update_option( 'woocommerce_myaccount_page_id', $wc_myaccount_page_id->ID );
		}
	}

	// Try to force a term recount.
	// wp_defer_term_counting( false ) doesn't work properly as there are post imported from different AJAX requests.
	$taxonomies = get_taxonomies( array(), 'names' );
	foreach ( $taxonomies as $taxonomy ) {
		$terms             = get_terms( $taxonomy, array( 'hide_empty' => false ) );
		$term_taxonomy_ids = wp_list_pluck( $terms, 'term_taxonomy_id' );

		wp_update_term_count( $term_taxonomy_ids, $taxonomy );
	}
}

function nozama_lite_get_theme_required_plugins() {
	return apply_filters( 'nozama_lite_theme_required_plugins', array() );
}

function nozama_lite_get_theme_recommended_plugins() {
	return apply_filters( 'nozama_lite_theme_recommended_plugins', array(
		'gutenbee'              => array(
			'title'       => __( 'GutenBee', 'nozama-lite' ),
			'description' => __( 'Premium blocks for WordPress.', 'nozama-lite' ),
		),
		'woocommerce'           => array(
			'title'              => __( 'WooCommerce', 'nozama-lite' ),
			'description'        => __( 'Sell anything, beautifully.', 'nozama-lite' ),
			'required_by_sample' => true,
		),
		'maxslider'             => array(
			'title'              => __( 'MaxSlider', 'nozama-lite' ),
			'description'        => __( 'Add a custom responsive slider to any page of your website.', 'nozama-lite' ),
			'required_by_sample' => true,
		),
		'elementor'             => array(
			'title'              => __( 'Elementor', 'nozama-lite' ),
			'description'        => __( 'Elementor is a front-end drag & drop page builder for WordPress.', 'nozama-lite' ),
			'required_by_sample' => true,
		),
		'wp-smushit'            => array(
			'title'       => __( 'Smush by WPMU DEV', 'nozama-lite' ),
			'description' => __( 'Compress, Optimize and Lazy Load Images.', 'nozama-lite' ),
			'plugin_file' => 'wp-smush.php',
		),
		'wpforms-lite'          => array(
			'title'       => __( 'Contact Form by WPForms', 'nozama-lite' ),
			'description' => __( 'Drag & Drop Form Builder for WordPress.', 'nozama-lite' ),
			'plugin_file' => 'wpforms.php',
			'is_callable' => 'wpforms',
		),
		'one-click-demo-import' => array(
			'title'              => __( 'One Click Demo Import', 'nozama-lite' ),
			'description'        => __( 'Import your demo content, widgets and theme settings with one click.', 'nozama-lite' ),
			'required_by_sample' => true,
		),
	) );
}

add_action( 'init', 'nozama_lite_onboarding_page_init' );
function nozama_lite_onboarding_page_init() {

	$data = array(
		'show_page'                => true,
		'redirect_on_activation'   => false,
		'description'              => __( 'Nozama Lite is a powerful e-commerce theme for WordPress.', 'nozama-lite' ),
		'default_tab'              => 'recommended_plugins',
		'tabs'                     => array(
			'required_plugins'    => '',
			'recommended_plugins' => __( 'Recommended Plugins', 'nozama-lite' ),
			'sample_content'      => __( 'Sample Content', 'nozama-lite' ),
			'support'             => __( 'Support', 'nozama-lite' ),
			'upgrade_pro'         => __( 'Upgrade to Pro', 'nozama-lite' ),
		),
		'required_plugins_page'    => array(
			'plugins' => nozama_lite_get_theme_required_plugins(),
		),
		'recommended_plugins_page' => array(
			'plugins' => nozama_lite_get_theme_recommended_plugins(),
		),
		'support_page'             => array(
			'sections' => array(
				'documentation' => array(
					'title'       => __( 'Theme Documentation', 'nozama-lite' ),
					'description' => __( "If you don't want to import our demo sample content, just visit this page and learn how to set things up individually.", 'nozama-lite' ),
					'link_url'    => 'https://www.cssigniter.com/docs/' . NOZAMA_LITE_NAME . '/',
				),
				'kb'            => array(
					'title'       => __( 'Knowledge Base', 'nozama-lite' ),
					'description' => __( 'Browse our library of step by step how-to articles, tutorials, and guides to get quick answers.', 'nozama-lite' ),
					'link_url'    => 'https://www.cssigniter.com/docs/knowledgebase/',
				),
				'support'       => array(
					'title'       => __( 'Request Support', 'nozama-lite' ),
					'description' => __( 'Got stuck? No worries, just visit our support page, submit your ticket and we will be there for you within 24 hours.', 'nozama-lite' ),
					'link_url'    => 'https://wordpress.org/support/theme/nozama-lite',
				),
			),
		),
	);

	require_once get_theme_file_path( '/inc/class-onboarding-page-lite.php' );

	$onboarding = new Nozama_Lite_Onboarding_Page_Lite();
	$onboarding->init( apply_filters( 'nozama_lite_onboarding_page_array', $data ) );
}

/**
 * User onboarding.
 */
require_once get_theme_file_path( '/inc/onboarding/onboarding-page.php' );
