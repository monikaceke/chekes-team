<div class="info-block" id="aboutUs">
	<picture class="background-image gasp-bottom">
		<source media="(min-width: 1200px)" srcset="<?php echo fws()->images()->assetsSrc( 'info01.png', true ); ?>">
		<source media="(min-width: 640px)" srcset="<?php echo fws()->images()->assetsSrc( 'info01.png', true ); ?>">
		<source media="(min-width: 320px)" srcset="<?php echo fws()->images()->assetsSrc( 'info01.png', true ); ?>">
		<img class="cover-img" src="<?php echo fws()->images()->assetsSrc( 'info01.png', true ); ?>" alt="">
	</picture>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="info-block__content">
					<h2 class="section-title gsap-section-title">About Us</h2>
					<div class="entry-content gsap-entry-content">
						<p>We’re obsessed with our pets, and we know you are too. <br>
							We’re here to support you with solid info on the everyday stuff and help you <br>
							and your pets celebrate the sheer joy of your fur family, giving pets a life <br>
							that’s “extra” in all the best ways.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="info-block__cards">
					<div class="container">
						<div class="row">
							<div class="col-6">
								<a class="info-block__cards--inner gasp-top" href="javascript:;">
									<?php echo fws()->render()->inlineSVG('ico-letter', 'info-block__cards-icon'); ?>
									<div class="info-block__cards-text">
										<span>Diego</span>
									</div>
								</a>
							</div>
							<div class="col-6">
								<a class="info-block__cards--inner gasp-top" href="javascript:;">
									<?php echo fws()->render()->inlineSVG('ico-letter', 'info-block__cards-icon'); ?>
									<div class="info-block__cards-text">
										<span>Phoebe</span>
									</div>
								</a>
							</div>
							<div class="col-6">
								<a class="info-block__cards--inner gasp-top" href="javascript:;">
									<?php echo fws()->render()->inlineSVG('ico-letter', 'info-block__cards-icon'); ?>
									<div class="info-block__cards-text">
										<span>Annie</span>
									</div>
								</a>
							</div>
							<div class="col-6">
								<a class="info-block__cards--inner gasp-top" href="javascript:;">
									<?php echo fws()->render()->inlineSVG('ico-letter', 'info-block__cards-icon'); ?>
									<div class="info-block__cards-text">
										<span>Bak</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- .info-block -->
