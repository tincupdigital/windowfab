<?php
/**
 * Template for displaying social icons in a list.
 *
 * @package _s
 */

// set social profile links to variables
$fb_url = get_theme_mod( 'facebook_url' );
$ig_url = get_theme_mod( 'instagram_url' );
$pi_url = get_theme_mod( 'pinterest_url' );

// check for icons
if ( $fb_url || $ig_url || $pi_url ) { ?>
	<ul class="social-icons social-icons__list">
		<?php
		/* Facebook */
		if ( $fb_url ) { ?>
			<li><a class="icon-facebook-circled facebook" href="<?php echo $fb_url; ?>" target="_blank"></a></li>
		<?php }

		/* Instagram */
		if ( $ig_url ) { ?>
			<li><a class="icon-instagram-circled instagram" href="<?php echo $ig_url; ?>" target="_blank"></a></li>
		<?php }

		/* Pinterest */
		if ( $pi_url ) { ?>
			<li><a class="icon-pinterest-circled pinterest" href="<?php echo $pi_url; ?>" target="_blank"></a></li>
		<?php } ?>
	</ul>
<?php }
