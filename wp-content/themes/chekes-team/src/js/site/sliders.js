const $ = jQuery.noConflict();
import 'slick-carousel';

'use strict';

/** @description Helper Classes for creating base config options. */
class SliderBaseConfig {
	constructor(slidesToShow = 4, slidesToScroll = 1, speed = 1000, rows = 0) {
		this.slidesToShow = slidesToShow;
		this.slidesToScroll = slidesToScroll;
		this.speed = speed;
		this.rows = rows;
	}
}

const Sliders = {
	/** @description Cache dom and strings. */
	$domSlider: $('.js-slider'),
	$domSliderTestimonial: $('.js-testimonial'),

	/** @description Initialize. */
	init: function() {
		this.initSlider();
		this.initSliderTestimonial();
	},

	/** @description Set and run gallery slider. */
	initSlider: function() {
		// create object with base config options
		const baseConfig = new SliderBaseConfig();
		// set extra config options
		const extraConfig = {
			infinite: true,
			autoplay: true,
			arrows: true,
			slidesToShow: 2,
			prevArrow: '.js-slider-prev',
			nextArrow: '.js-slider-next',
			slidesToScroll: 1,
			speed: 500,
			responsive: [
				{
					breakpoint: 767,
					settings: {
						infinite: true,
						slidesToShow: 1
					}
				}
			]
		};
		// merge two config objects
		const config = {
			...baseConfig,
			...extraConfig
		};
		// run slider
		this.runSlider(this.$domSlider, config);
	},
	initSliderTestimonial: function() {
		// create object with base config options
		const baseConfig = new SliderBaseConfig();
		// set extra config options
		const extraConfig = {
			infinite: true,
			autoplay: true,
			arrows: true,
			slidesToShow: 1,
			prevArrow: '.js-testimonial-prev',
			nextArrow: '.js-testimonial-next',
			slidesToScroll: 1,
			speed: 500,
			responsive: [
				{
					breakpoint: 767,
					settings: {
						infinite: true,
						slidesToShow: 1
					}
				}
			]
		};
		// merge two config objects
		const config = {
			...baseConfig,
			...extraConfig
		};
		// run slider
		this.runSlider(this.$domSliderTestimonial, config);
	},

	/** @description Loop through sliders and run. */
	runSlider: ($slider, config) => {
		$slider.each((i, el) => {
			$(el).slick(config);
		});
	}
};

export default Sliders;
