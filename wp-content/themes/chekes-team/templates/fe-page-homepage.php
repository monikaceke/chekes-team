<?php
/**
 * Template Name: FE Dev - Homepage
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
get_template_part( 'template-views/blocks/banner/_fe-banner' );
get_template_part( 'template-views/blocks/icons-list/_fe-icons-list' );
get_template_part( 'template-views/blocks/info-block/_fe-info-block' );
get_template_part( 'template-views/blocks/slider/_fe-slider' );
get_template_part( 'template-views/blocks/block-steps/_fe-block-steps' );
get_template_part( 'template-views/blocks/testimonial/_fe-testimonial' );
get_template_part( 'template-views/blocks/banner-text/_fe-banner-text' );
get_template_part( 'template-views/blocks/contact-from/_fe-contact-from' );

// close main content wrappers
do_action( 'chekes-team_after_main_content' );

// get footer
get_footer();
