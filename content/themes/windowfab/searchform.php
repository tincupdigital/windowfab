<?php
/**
 * Search form template
 *
 * @link https://developer.wordpress.org/reference/functions/get_search_form
 *
 * @package _s
 */
?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="search" class="search-field" />
		<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" class="search-submit" />
	</div>
</form>
