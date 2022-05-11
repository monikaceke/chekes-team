import Global from './../shared/global';
const $ = jQuery.noConflict();

'use strict';
const equalHeightsItems = {
	/**
	 * @description Cache dom and strings
	 * @type {object}
	 */

	/** @description Initialize */
	init: function() {
		this.equalHeight();
	},

	/** @description slider example description e.g Banner slider */
	equalHeight: ()=> {
		Global.equalHeights($('.profile-gallery__inner'));
	},
};

export default equalHeightsItems;