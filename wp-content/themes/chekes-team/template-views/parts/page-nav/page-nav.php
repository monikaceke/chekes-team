<?php
/**
 * Template View for displaying Parts
 *
 * @link https://internal.forwardslashny.com/starter-theme/#blocks-and-parts
 *
 * @package chekes-team
 */

// get template view values
$links = get_query_var( 'content-parts' );
?>

<nav class="page-nav" role="navigation">
	<?php echo $links; ?>
</nav><!-- .page-nav -->

