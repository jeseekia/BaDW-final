<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Sundance
 * @since Sundance 1.0
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @since Sundance 1.0
 */
function sundance_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'sundance_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Sundance 1.0
 */
function sundance_body_classes( $classes ) {
	$options = sundance_get_theme_options();
	$background_image = get_background_image();
	// Adds a class of group-blog to blogs with more than 1 published author
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar when all syndicate links are disabled and no widgets
	if ( 'off' == $options['show_rss_link']
		&& ''  == $options['twitter_url']
		&& ''  == $options['facebook_url']
		&& ''  == $options['google_url']
		&& ''  == $options['flickr_url']
		&& ! is_active_sidebar( 'sidebar-1' ) ) {
			$classes[] = 'no-sidebar';
	}

	// Add a class if background image is empty
	if ( empty( $background_image ) )
		$classes[] = 'custom-background-image-empty';

	return $classes;
}
add_filter( 'body_class', 'sundance_body_classes' );

/**
 * Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
 *
 * @since Sundance 1.0
 */
function sundance_enhanced_image_navigation( $url, $id ) {
	if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
		return $url;

	$image = get_post( $id );
	if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
		$url .= '#main';

	return $url;
}
add_filter( 'attachment_link', 'sundance_enhanced_image_navigation', 10, 2 );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @since Sundance 1.2
 */
function sundance_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $sep $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $sep " . sprintf( __( 'Page %s', 'sundance' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'sundance_wp_title', 10, 2 );

/**
 * Adds a wrapper to videos
 *
 * @return string
 */
function sundance_embed_html( $html ) {
	if ( empty( $html ) || ! is_string( $html ) )
		return $html;

	wp_enqueue_script( 'sundance-responsive-videos' );

	$html = '<div class="video-wrapper">' . $html . '</div>';
	return $html;
}
add_filter( 'embed_oembed_html', 'sundance_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'sundance_embed_html' );
