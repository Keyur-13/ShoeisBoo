<?php
	class Nozama_Lite_Onboarding_Page_Lite extends Nozama_Lite_Onboarding_Page {
		/**
		 * Populate the support tab
		 *
		 * @return void
		 */
		public function upgrade_pro() {
			?>
			<h3><?php echo wp_kses( __( 'Did you know there is a <strong>pro</strong> version?', 'nozama-lite' ), nozama_lite_get_allowed_tags() ); ?></h3>
			<div class="three-col">
				<table class="nozama-lite-onboarding-table">
					<tr>
						<th class="nozama-lite-onboarding-feature"></th>
						<th class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'Lite', 'nozama-lite' ); ?></th>
						<th class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Pro', 'nozama-lite' ); ?></th>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( '24/7 Support', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Responsive Layout', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Documentation', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Upload Your Own Logo', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Social Networking Options', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'WooCommerce Support', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Translation Ready', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Typography Settings', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'No', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Custom Elementor Widgets', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'No', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Elementor Pro Support', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'No', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Sticky Menu', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'No', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Product Catalog settings', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'No', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Mini cart', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'No', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'AJAX Search', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'No', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Yes', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Shop Layouts', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite">1</td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro">4</td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Product Layouts', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite">1</td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro">4</td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Custom Widgets', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite">6</td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro">10</td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"><?php esc_html_e( 'Color settings', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"><?php esc_html_e( 'Basic', 'nozama-lite' ); ?></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-pro"><?php esc_html_e( 'Advanced', 'nozama-lite' ); ?></td>
					</tr>
					<tr>
						<td class="nozama-lite-onboarding-feature"></td>
						<td class="nozama-lite-onboarding-col nozama-lite-onboarding-lite"></td>
						<td class="nozama-lite-onboarding-col">
							<a href="https://www.cssigniter.com/themes/nozama/" class="button button-primary button-action" target="_blank"><?php esc_html_e( 'Upgrade Today!', 'nozama-lite' ); ?></a>
						</td>
					</tr>
				</table>
			</div>
			<?php
		}
	}

