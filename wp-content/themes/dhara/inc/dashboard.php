<?php
/**
 * Builds our admin page.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'dhara_create_menu' ) ) {
	add_action( 'admin_menu', 'dhara_create_menu' );
	/**
	 * Adds our "Dhara" dashboard menu item
	 *
	 */
	function dhara_create_menu() {
		$dhara_page = add_theme_page( 'Dhara', 'Dhara', apply_filters( 'dhara_dashboard_page_capability', 'edit_theme_options' ), 'dhara-options', 'dhara_settings_page' );
		add_action( "admin_print_styles-$dhara_page", 'dhara_options_styles' );
	}
}

if ( ! function_exists( 'dhara_options_styles' ) ) {
	/**
	 * Adds any necessary scripts to the Dhara dashboard page
	 *
	 */
	function dhara_options_styles() {
		wp_enqueue_style( 'dhara-options', get_template_directory_uri() . '/css/admin/admin-style.css', array(), DHARA_VERSION );
	}
}

if ( ! function_exists( 'dhara_settings_page' ) ) {
	/**
	 * Builds the content of our Dhara dashboard page
	 *
	 */
	function dhara_settings_page() {
		?>
		<div class="wrap">
			<div class="metabox-holder">
				<div class="dhara-masthead clearfix">
					<div class="dhara-container">
						<div class="dhara-title">
							<a href="<?php echo esc_url(DHARA_THEME_URL); ?>" target="_blank"><?php esc_html_e( 'Dhara', 'dhara' ); ?></a> <span class="dhara-version"><?php echo esc_html( DHARA_VERSION ); ?></span>
						</div>
						<div class="dhara-masthead-links">
							<?php if ( ! defined( 'DHARA_PREMIUM_VERSION' ) ) : ?>
								<a class="dhara-masthead-links-bold" href="<?php echo esc_url(DHARA_THEME_URL); ?>" target="_blank"><?php esc_html_e( 'Premium', 'dhara' );?></a>
							<?php endif; ?>
							<a href="<?php echo esc_url(DHARA_WPKOI_AUTHOR_URL); ?>" target="_blank"><?php esc_html_e( 'WPKoi', 'dhara' ); ?></a>
                            <a href="<?php echo esc_url(DHARA_DOCUMENTATION); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'dhara' ); ?></a>
						</div>
					</div>
				</div>

				<?php
				/**
				 * dhara_dashboard_after_header hook.
				 *
				 */
				 do_action( 'dhara_dashboard_after_header' );
				 ?>

				<div class="dhara-container">
					<div class="postbox-container clearfix" style="float: none;">
						<div class="grid-container grid-parent">

							<?php
							/**
							 * dhara_dashboard_inside_container hook.
							 *
							 */
							 do_action( 'dhara_dashboard_inside_container' );
							 ?>

							<div class="form-metabox grid-70" style="padding-left: 0;">
								<h2 style="height:0;margin:0;"><!-- admin notices below this element --></h2>
								<form method="post" action="options.php">
									<?php settings_fields( 'dhara-settings-group' ); ?>
									<?php do_settings_sections( 'dhara-settings-group' ); ?>
									<div class="customize-button hide-on-desktop">
										<?php
										printf( '<a id="dhara_customize_button" class="button button-primary" href="%1$s">%2$s</a>',
											esc_url( admin_url( 'customize.php' ) ),
											esc_html__( 'Customize', 'dhara' )
										);
										?>
									</div>

									<?php
									/**
									 * dhara_inside_options_form hook.
									 *
									 */
									 do_action( 'dhara_inside_options_form' );
									 ?>
								</form>

								<?php
								$modules = array(
									'Backgrounds' => array(
											'url' => DHARA_THEME_URL,
									),
									'Blog' => array(
											'url' => DHARA_THEME_URL,
									),
									'Colors' => array(
											'url' => DHARA_THEME_URL,
									),
									'Copyright' => array(
											'url' => DHARA_THEME_URL,
									),
									'Disable Elements' => array(
											'url' => DHARA_THEME_URL,
									),
									'Demo Import' => array(
											'url' => DHARA_THEME_URL,
									),
									'Hooks' => array(
											'url' => DHARA_THEME_URL,
									),
									'Import / Export' => array(
											'url' => DHARA_THEME_URL,
									),
									'Menu Plus' => array(
											'url' => DHARA_THEME_URL,
									),
									'Page Header' => array(
											'url' => DHARA_THEME_URL,
									),
									'Secondary Nav' => array(
											'url' => DHARA_THEME_URL,
									),
									'Spacing' => array(
											'url' => DHARA_THEME_URL,
									),
									'Typography' => array(
											'url' => DHARA_THEME_URL,
									),
									'Elementor Addon' => array(
											'url' => DHARA_THEME_URL,
									)
								);

								if ( ! defined( 'DHARA_PREMIUM_VERSION' ) ) : ?>
									<div class="postbox dhara-metabox">
										<h3 class="hndle"><?php esc_html_e( 'Premium Modules', 'dhara' ); ?></h3>
										<div class="inside" style="margin:0;padding:0;">
											<div class="premium-addons">
												<?php foreach( $modules as $module => $info ) { ?>
												<div class="add-on activated dhara-clear addon-container grid-parent">
													<div class="addon-name column-addon-name" style="">
														<a href="<?php echo esc_url( $info[ 'url' ] ); ?>" target="_blank"><?php echo esc_html( $module ); ?></a>
													</div>
													<div class="addon-action addon-addon-action" style="text-align:right;">
														<a href="<?php echo esc_url( $info[ 'url' ] ); ?>" target="_blank"><?php esc_html_e( 'More info', 'dhara' ); ?></a>
													</div>
												</div>
												<div class="dhara-clear"></div>
												<?php } ?>
											</div>
										</div>
									</div>
								<?php
								endif;

								/**
								 * dhara_options_items hook.
								 *
								 */
								do_action( 'dhara_options_items' );
								?>
							</div>

							<div class="dhara-right-sidebar grid-30" style="padding-right: 0;">
								<div class="customize-button hide-on-mobile">
									<?php
									printf( '<a id="dhara_customize_button" class="button button-primary" href="%1$s">%2$s</a>',
										esc_url( admin_url( 'customize.php' ) ),
										esc_html__( 'Customize', 'dhara' )
									);
									?>
								</div>

								<?php
								/**
								 * dhara_admin_right_panel hook.
								 *
								 */
								 do_action( 'dhara_admin_right_panel' );

								  ?>
                                
                                <div class="wpkoi-doc">
                                	<h3><?php esc_html_e( 'Dhara documentation', 'dhara' ); ?></h3>
                                	<p><?php esc_html_e( 'If You`ve stuck, the documentation may help on WPKoi.com', 'dhara' ); ?></p>
                                    <a href="<?php echo esc_url(DHARA_DOCUMENTATION); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Dhara documentation', 'dhara' ); ?></a>
                                </div>
                                
                                <div class="wpkoi-social">
                                	<h3><?php esc_html_e( 'WPKoi on Facebook', 'dhara' ); ?></h3>
                                	<p><?php esc_html_e( 'If You want to get useful info about WordPress and the theme, follow WPKoi on Facebook.', 'dhara' ); ?></p>
                                    <a href="<?php echo esc_url(DHARA_WPKOI_SOCIAL_URL); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Go to Facebook', 'dhara' ); ?></a>
                                </div>
                                
                                <div class="wpkoi-review">
                                	<h3><?php esc_html_e( 'Help with You review', 'dhara' ); ?></h3>
                                	<p><?php esc_html_e( 'If You like Dhara theme, show it to the world with Your review. Your feedback helps a lot.', 'dhara' ); ?></p>
                                    <a href="<?php echo esc_url(DHARA_WORDPRESS_REVIEW); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Add my review', 'dhara' ); ?></a>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists( 'dhara_admin_errors' ) ) {
	add_action( 'admin_notices', 'dhara_admin_errors' );
	/**
	 * Add our admin notices
	 *
	 */
	function dhara_admin_errors() {
		$screen = get_current_screen();

		if ( 'appearance_page_dhara-options' !== $screen->base ) {
			return;
		}

		if ( isset( $_GET['settings-updated'] ) && 'true' == $_GET['settings-updated'] ) {
			 add_settings_error( 'dhara-notices', 'true', esc_html__( 'Settings saved.', 'dhara' ), 'updated' );
		}

		if ( isset( $_GET['status'] ) && 'imported' == $_GET['status'] ) {
			 add_settings_error( 'dhara-notices', 'imported', esc_html__( 'Import successful.', 'dhara' ), 'updated' );
		}

		if ( isset( $_GET['status'] ) && 'reset' == $_GET['status'] ) {
			 add_settings_error( 'dhara-notices', 'reset', esc_html__( 'Settings removed.', 'dhara' ), 'updated' );
		}

		settings_errors( 'dhara-notices' );
	}
}
