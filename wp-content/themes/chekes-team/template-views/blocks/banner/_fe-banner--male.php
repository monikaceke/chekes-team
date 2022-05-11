<div class="banner">
	<?php get_template_part( 'template-views/parts/background-image/_fe-background-image' ); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="banner__content">
					<h1 class="page-title gsap-page-title">Big Boy</h1>
					<div class="entry-content gsap-entry-content">
						<p>Here goes description paragraph</p>
					</div>
					<div class="banner__buttons">
						<a class="btn banner__btn gasp-bottom" href="http://localhost/chekes-team/fe-available-puppies/">Shop now</a>
						<span class="banner__text gasp-top">or</span>
						<span class="banner__link-holder gasp-bottom">Call Us: <a class="banner__link" href="tel:+0603039619">0603039619</a></span>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="banner__image gasp-bottom">
					<img src="<?php echo fws()->images()->assetsSrc( 'diego01.png', true ); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</div><!-- .banner -->
