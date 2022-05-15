<?php
/**
 * Template View for displaying Blocks
 *
 * @link https://internal.forwardslashny.com/starter-theme/#blocks-and-parts
 *
 * @package chekes-team
 */

// get template view values
$query_var = get_query_var( 'content-blocks', [] );

// set and escape template view values
//$icon = $query_var['fws_svg_icon'] ?? '';
$title = $query_var['title'] ?? '';
$description = $query_var['description'] ?? '';

//shop link
$shopLink = $query_var['shop_link'] ?? [];
$shopLinkTitle = $shopLink['title'] ?? '';
$shopLinkUrl = $shopLink['url'] ?? '';
$shopLinkTarget = $shopLink['target'] ?? '';

//call us link
$callUsLink = $query_var['call_us_link'] ?? [];
$callUsLinkTitle = $callUsLink['title'] ?? '';
$callUsLinkUrl = $callUsLink['url'] ?? '';
$callUsLinkTarget = $callUsLink['target'] ?? '';

//banner image
$bannerImage = $query_var['banner_image'] ?? [];
$bannerImageAlt = $bannerImage['alt'] ?? '';
?>

<div class="banner">
	<?php get_template_part( 'template-views/parts/background-image/background-image' ); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="banner__content">
					<?php if ($title): ?>
					<h1 class="page-title gsap-page-title"><?= esc_html($title); ?></h1>
					<?php endif; if ($description): ?>
					<div class="entry-content">
						<p><?= nl2br($description); ?></p>
					</div>
					<?php endif; if ($shopLinkTitle || $callUsLinkTitle): ?>
					<div class="banner__buttons">
						<?php if ($shopLinkTitle): ?>
						<a class="btn banner__btn gasp-bottom" href="<?= esc_url($shopLinkUrl); ?>" target="<?= ($shopLinkTarget) ? '_blank' : '_self' ?>"><?= esc_html($shopLinkTitle); ?></a>
						<?php endif; if ($callUsLinkTitle): ?>
						<span class="banner__text gasp-top">or</span>
						<span class="banner__link-holder gasp-bottom">Call Us: <a class="banner__link" href="<?= esc_url($callUsLinkUrl); ?>" target="<?= ($callUsLinkTarget) ? '_blank' : '_self' ?>"><?= esc_html($callUsLinkTitle); ?></a></span>
						<?php endif; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php if ($bannerImage): ?>
			<div class="col-lg-6">
				<div class="banner__image gasp-bottom">
					<img src="<?php echo fws()->resizer()->newImageSize($bannerImage, 430, 808, false); ?>" alt="<?php echo esc_attr($bannerImageAlt); ?>">
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>

</div><!-- .banner -->

