<?php
/**
 * Template for the social navigation bar
 *
 * @package _s
 */
?>

<div class="social-nav social-navigation mb2 py1 px2">
	<div class="row middle-xs">
		<div class="col-xs-6">
			<span class="button-text">Share this post</span>
		</div>

		<div class="col-xs-6 right-align">
			<?php get_template_part( 'templates/global/social', 'icons' ); ?>
		</div>
	</div>
</div>