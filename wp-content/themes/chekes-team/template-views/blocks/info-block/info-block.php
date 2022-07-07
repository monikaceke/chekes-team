<?php
/**
 * Template View for displaying Blocks
 *
 * @link https://internal.forwardslashny.com/starter-theme/#blocks-and-parts
 *
 * @package fws_starter_s
 */

// get template view values
$query_var = get_query_var( 'content-blocks', [] );

// set and escape template view values
$title = $query_var['title'] ?? '';
$content = $query_var['content'] ?? '';
$emails = $query_var['emails'] ?? [];
?>

<div class="info-block" id="aboutUs">
	<picture class="background-image gasp-bottom">
		<source media="(min-width: 1200px)" srcset="<?php echo fws()->images()->assetsSrc( 'info01.png', true ); ?>">
		<source media="(min-width: 640px)" srcset="<?php echo fws()->images()->assetsSrc( 'info01.png', true ); ?>">
		<source media="(min-width: 320px)" srcset="<?php echo fws()->images()->assetsSrc( 'info01.png', true ); ?>">
		<img class="cover-img" src="<?php echo fws()->images()->assetsSrc( 'info01.png', true ); ?>" alt="">
	</picture>
	<div class="container">
		<div class="row">
			<?php if ($title || $content): ?>
			<div class="col-lg-6">
				<div class="info-block__content">
					<?php if ($title): ?>
					<h2 class="section-title gsap-section-title"><?php echo esc_html($title); ?></h2>
					<?php endif; ?>
					<?php if ($content): ?>
					<div class="entry-content gsap-entry-content">
						<p><?php echo nl2br($content); ?></p>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
			<?php if ($emails): ?>
			<div class="col-lg-6">
				<div class="info-block__cards">
					<div class="container">
						<div class="row">
							<?php foreach ($emails as $email):
								$label = $email['label'] ?? '';
								$url = $email['url'] ?? '';
								?>
							<?php if ($label || $url): ?>
							<div class="col-6">
								<a class="info-block__cards--inner gasp-top" href="<?= esc_url($url); ?>">
									<?php echo fws()->render()->inlineSVG('ico-letter', 'info-block__cards-icon'); ?>
									<div class="info-block__cards-text">
										<span><?php echo esc_html($label); ?></span>
									</div>
								</a>
							</div>
							<?php endif; ?>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div><!-- .info-block -->

