<?php
/**
 * The template for displaying search form.
 *
 * @package     Online Startup Business
 * @since       0.1
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'online-startup-business' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search …', 'online-startup-business' ); ?>" value="" name="s">
	</label>
	<button type="submit" class="search-submit" value="<?php esc_attr_e( 'Search', 'online-startup-business' ); ?>">
		<i class="fa fa-search"></i>
	</button>
</form>