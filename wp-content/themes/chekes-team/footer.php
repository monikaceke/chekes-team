<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package team_c
 */

?>

	</div><!-- #content -->
	
	<footer id="colophon" class="site-footer">
		<div class="popup-form">
			<div class="popup-form-overlay js-close-form"></div>
			<div class="popup-form-wrapper">
				<div class="popup-form__close js-close-form">
					<?php echo fws()->render()->inlineSVG('ico-xmark-solid', 'close-icon'); ?>
				</div>
				<div class="js-cf7-holder cf7-holder">
					<div class="cf7-holder__popup">
						<div class="cf7-holder__popup-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/thank-you.png" alt="">
						</div>
						<span class="cf7-holder__popup-title">Message is sent!</span>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="20" title="Popup form"]'); ?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12">
					<div class="site-footer__branding">
						<a class="site-footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="site-footer__logo-img" src="<?php echo fws()->images()->assetsSrc('logo.png'); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" title="<?php bloginfo( 'name' ); ?>">
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="site-footer__contact">
						<span class="site-footer__contact-title">Contact</span>
						<ul class="contact-list">
							<li>
								<a class="contact-list-link" href="https://maps.google.com/maps?q=Josifa%20Pan%C4%8Di%C4%87a%2042,%2023000%20Zrenjanin&t=&z=13&ie=UTF8&iwloc=&output=embed" target="_blank" rel="noopener noreferrer" >
									<?php echo fws()->render()->inlineSVG( 'ico-house', 'footer-icon footer-icon-links' ); ?>
									<span>Josifa Pančića 42, 23000 Zrenjanin, <br>Serbia</span>
								</a>
							</li>
							<li>
								<a class="contact-list-link" href="tel:+0603039619" target="_blank" rel="noopener noreferrer">
									<?php echo fws()->render()->inlineSVG( 'ico-phone', 'footer-icon footer-icon-links' ); ?>
									<span>060/303-96-19</span>
								</a>
							</li>
							<li>
								<a class="contact-list-link contact-list-link--email" href="mailto:damir.haski@gmail.com" target="_blank" rel="noopener noreferrer">
									<?php echo fws()->render()->inlineSVG( 'ico-email', ' footer-icon footer-icon-links' ); ?>
									<span>damir.haski@gmail.com</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="site-footer__social-icon">
						<span class="site-footer__contact-title">Follow Us</span>
						<ul class="follow-list">
							<li>
								<a class="follow__link" href="javascript:;" target="_blank" rel="noopener noreferrer">
									<?php echo fws()->render()->inlineSVG( 'ico-instagram', 'footer-icon' ); ?>
								</a>
							</li>
							<li>
								<a class="follow__link" href="https://sr-rs.facebook.com/damir.ceke" target="_blank" rel="noopener noreferrer">
									<?php echo fws()->render()->inlineSVG( 'ico-facebook', 'footer-icon footer-icon--fb' ); ?>
								</a>
							</li>
							<li>
								<a class="follow__link" href="javascript:;" target="_blank" rel="noopener noreferrer">
									<?php echo fws()->render()->inlineSVG( 'ico-letter', 'footer-icon' ); ?>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copyright">
				<p>&copy; <?php echo date( 'Y' ); ?> Cheke's Team. All Rights Reserved.</p>
			</div> <!-- .copyright -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</body>
</html>
