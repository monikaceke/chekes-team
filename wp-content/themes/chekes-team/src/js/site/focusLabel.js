const $ = jQuery.noConflict();

'use strict';

const FocusInput = {
	/**
	* @description Cache dom and strings
	* @type {object}
	*/

	/** @description Initialize */
	init: function() {
		this.formMove();
		this.formAutofill();

		$('.gallery__see-more').on('click', function() {
			$('.moreimg').slideToggle();
			if ($('.gallery__see-more').text() === 'Show more') {
				$(this).text('Show less');
			} else {
				$(this).text('Show more');
			}
		});

		document.addEventListener('wpcf7invalid', function() {
			setTimeout(function() {
				$('html').stop().animate({
					scrollTop: $('.wpcf7-not-valid').eq(0).offset().top - 140,
				}, 500, 'swing');
			}, 100);
		}, false);
	},

	/** @description */

	formMove: function() {
		$('input, textarea').on('focus', function() {
			if (!$(this).val()) {
				$(this).parent().siblings('label').addClass('move');
			}
		});
		$('input, textarea').on('focusout', function() {
			if (!$(this).val()) {
				$(this).parent().siblings('label').removeClass('move');
			}
		});
		$('input').on('focus', function() {
			if (!$(this).val()) {
				$(this).next().addClass('move');
				$(this).addClass('border-color');
			}
		});
		$('input').on('focusout', function() {
			if (!$(this).val()) {
				$(this).next().removeClass('move');
				$(this).removeClass('border-color');
			}
		});
		$('textarea').on('focus', function() {
			if (!$(this).val()) {
				$(this).next().addClass('move');
				$(this).addClass('border-color');
			}
		});
		$('textarea').on('focusout', function() {
			if (!$(this).val()) {
				$(this).next().removeClass('move');
				$(this).removeClass('border-color');
			}
		});
		$('input').on('change', function() {
			if (!$('input').val()) {
				$(this).parent().siblings('label').removeClass('move');
				$(this).addClass('border-color');
			} else {
				$(this).parent().siblings('label').addClass('move');
				$(this).removeClass('border-color');
			}
		});
		$('form').find('textarea').each(() => {
			$('textarea').on('change', function() {
				if (!$('textarea').val()) {
					$(this).parent().parent().find('label').removeClass('move');
					$(this).addClass('border-color');
				} else {
					$(this).parent().parent().find('label').addClass('move');
					$(this).removeClass('border-color');
				}
			});
		});
	},
	formAutofill: function() {
		$('input.wpcf7-form-control, textarea.wpcf7-form-control').attr('autocomplete', 'negative');
	},
};

export default FocusInput;