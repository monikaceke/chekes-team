<?php
/**
 * The template for displaying Blog page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chekes-team
 */

// get header
get_header();

// open main content wrappers
do_action( 'chekes-team_before_main_content' );

// listing blog posts
$blog = [
	'title' => __( 'Blog', 'chekes-team' ),
	'subtitle' => ''
];
fws()->render()->templateView( $blog, 'blog-listing', 'listings' );

do_action( 'chekes-team_after_main_content' );

// get footer
get_footer();
