import Global from './../shared/global';
const $ = jQuery.noConflict();

'use strict';
const popup = {
	/**
	 * @description Cache dom and strings
	 * @type {object}
	 */

	/** @description Initialize */
	init: function() {
		this.popupShow();
	},

	/** @description slider example description e.g Banner slider */
	popupShow: ()=> {
        $('.js-shop').on('click', function() {
            console.log('tes');
            const dogName = $(this).parent().parent().find('.js-info-name');
            const inputValue = dogName.text();
            const input = $('.dog-name input');
            input.attr('value', inputValue);
            $('.popup-form').addClass('show-popup');
        });

        $('.js-close-form').on('click', function() {
            $('.popup-form').removeClass('show-popup');
            const input = $('.dog-name input');
            input.attr('value', '');
        });
	},
};

export default popup;