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
$contactList = $query_var['contact_list'] ?? [];
?>

<div class="icons-list">
	<div class="container">
		<?php if ($contactList): ?>
		<div class="icons-list__contact">
			<?php foreach ($contactList as $link):
				$icon = $link['icon'];
				$label = $link['label'] ?? '';
				$url = $link['url'] ?? '';
				?>
			<?php if ($label || $url): ?>
			<a class="icons-list__contact-link gasp-bottom" href="<?= esc_url($url); ?>">
				<span class="icons-list__contact-link-icon">
					<?php echo fws()->render()->inlineSVG($icon, 'icons-list-contact-icon'); ?>
				</span>
				<?php if ($label): ?>
				<span class="icons-list__contact-link-name"><?php echo esc_html($label); ?></span>
				<?php endif; ?>
			</a>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
	</div>
</div><!-- .icons-list -->

