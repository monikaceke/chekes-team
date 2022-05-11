<div class="contact-form" id="contactForm">
	<div class="container">
		<h2 class="section-title section-title--center gsap-section-title">Contact Us</h2>
		<div class="row">
			<div class="col-lg-8 gasp-top">
				<div class="js-cf7-holder cf7-holder">
					<div class="cf7-holder__popup">
						<div class="cf7-holder__popup-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/thank-you.png" alt="">
						</div>
						<span class="cf7-holder__popup-title">Message is sent!</span>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="7" title="Contact form"]'); ?>
				</div>
			</div>
			<div class="col-lg-4 gasp-bottom">
				<div class="contact-form__image">
					<img class="contact-form__image-img" src="<?php echo fws()->images()->assetsSrc( 'diego.png', true ); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</div><!-- .contact-form -->
