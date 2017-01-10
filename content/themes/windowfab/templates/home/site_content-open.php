<?php
/**
 * Template used for the home page .site-content
 * opening div, used to load background images
 *
 * @package _s
 */

// set upload directory to variable
$uploads = wp_upload_dir();

// set backgrounds URL and directory
$bg_dir = $uploads['basedir'] . '/backgrounds/';
$bg_url = $uploads['baseurl'] . '/backgrounds/';

// loop over jpgs in directory
$dh = opendir( $bg_dir );
while ( ( $filename = readdir( $dh ) ) !== false ) {
  $files[] = $filename;
}
$images = preg_grep( '/\.jpg$/i', $files );

// pick random image from array
$image = $images[array_rand($images)];

// combine $bg_url and image filename
$img_url = $bg_url . $image;

// check if random image is present
if ( $image ) { ?>
  <div id="content" class="site-content site-content--bg" style="background-image: url('<?php echo $img_url; ?>');">
<?php } else { ?>
  <div id="content" class="site-content">
<?php }