<?php
/**
 * The template for displaying search forms in VW Automobile Lite
 *
 * @package VW Automobile Lite
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_attr_x( 'Search for:', 'label', 'vw-automobile-lite' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'vw-automobile-lite' ); ?>" value="<?php echo esc_attr(get_search_query()) ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'vw-automobile-lite' ); ?>">
</form>