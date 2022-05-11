<?php
/**
 * Template Name: FE Dev - Gallery
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package chekes-team
 */

// get header
get_header();

// open main content wrappers
do_action( 'chekes-team_before_main_content' );

// get content blocks
get_template_part( 'template-views/blocks/banner-big/_fe-banner-big--gallery' );
get_template_part( 'template-views/blocks/gallery/_fe-gallery--gallery' );
get_template_part( 'template-views/blocks/banner-text/_fe-banner-text' );
get_template_part( 'template-views/blocks/contact-from/_fe-contact-from' );

// close main content wrappers
do_action( 'chekes-team_after_main_content' );

// get footer
get_footer();
