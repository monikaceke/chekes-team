const $ = jQuery.noConflict();
import Global from '../shared/global';

'use strict';
const Menu = {
	/**
	 * @description Cache dom and strings
	 * @type {object}
	 */
	$domMenuBtn: $('.js-menu-btn'),
	$domMenuOuter: $('.js-nav-outer'),
	$domMenuInner: $('.js-nav-inner'),
	$domMenuIcon: $('.js-nav-icon'),
	$domMenuSub: $('.sub-menu'),
	$domHeader: $('.js-site-header'),
	classHeaderScroll: 'site-header--scroll',
	slMenuIcon: '.js-nav-icon',
	slMenuSub: '.sub-menu',
	classActive: 'is-active',
	preventScroll: 'prevent-scroll',
	timeout: null,

	/** @description Initialize */
	init: function() {
		if($(window).width() < 1200) {
			this.bindEvents();
		}
		$(document).on('scroll', function() {
			const scrollTop = $(document).scrollTop();
			if (scrollTop > 20) {
				Menu.$domHeader.addClass(Menu.classHeaderScroll);
			} else {
				Menu.$domHeader.removeClass(Menu.classHeaderScroll);
			}
		});
		const height = $(window).scrollTop();
		if(height > 20) {
			Menu.$domHeader.addClass(Menu.classHeaderScroll);
		}
	},

	/** @description Bind Events */
	bindEvents: function() {
		this.$domMenuBtn.on('click', this.toggleMenu.bind(this));
		this.$domMenuIcon.on('click', this.toggleSubMenu.bind(this));
		Global.escKey(this.closeMenu.bind(this));
		Global.clickOutsideContainer(Global.$domBody, this.$domMenuInner, this.$domMenuBtn, this.closeMenu.bind(this));
	},

	toggleMenu: function() {
		if (!this.$domMenuBtn.hasClass(this.classActive)) {
			this.$domMenuBtn.addClass(this.classActive);
			this.$domMenuOuter.addClass(this.classActive);
			Global.$domBody.addClass(this.preventScroll);
		} else {
			this.closeMenu();
			Global.$domBody.removeClass(this.preventScroll);
		}
	},

	toggleSubMenu(e) {
		const icon = $(e.target).closest(this.slMenuIcon);
		const ul = icon.siblings(this.slMenuSub);

		if (!icon.hasClass(this.classActive)) {
			icon.addClass(this.classActive);
			ul.slideDown();
		} else {
			icon.removeClass(this.classActive);
			icon.parent().find(this.slMenuIcon).removeClass(this.classActive);
			ul.slideUp();
			ul.find(this.slMenuSub).slideUp();
		}
	},

	closeMenu: function() {
		this.$domMenuBtn.removeClass(this.classActive);
		this.$domMenuOuter.removeClass(this.classActive);
		Global.$domBody.removeClass(this.preventScroll);

		// timeout should match the selectors CSS transition duration property
		clearTimeout(this.timeout);
		this.timeout = setTimeout(() => {
			this.$domMenuIcon.removeClass(this.classActive);
			this.$domMenuSub.slideUp();
		}, 300);
	}
};

export default Menu;
