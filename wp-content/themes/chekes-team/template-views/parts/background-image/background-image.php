<?php
/**
 * Template View for displaying Parts
 *
 * @link https://internal.forwardslashny.com/starter-theme/#blocks-and-parts
 *
 * @package chekes-team
 */

// get template view values
$query_var = get_query_var( 'content-parts', [] );

// set and escape template view values
//$desktop_image = $query_var['desktop_image'] ?? [];
//$tablet_image = $query_var['tablet_image'] ?? [];
//$mobile_image = $query_var['mobile_image'] ?? [];
//$loader_image = fws()->resizer()->newImageSize($desktop_image['url'], 20, 7);
?>

<picture class="background-image">
	<source media="(min-width: 1200px)" srcset="<?php echo fws()->images()->assetsSrc( 'banner-01.png', true ); ?>">
	<source media="(min-width: 640px)" srcset="<?php echo fws()->images()->assetsSrc( 'banner-01.png', true ); ?>">
	<source media="(min-width: 320px)" srcset="<?php echo fws()->images()->assetsSrc( 'banner-01.png', true ); ?>">
	<img class="cover-img" src="<?php echo fws()->images()->assetsSrc( 'banner-01.png', true ); ?>" alt="">
</picture>

