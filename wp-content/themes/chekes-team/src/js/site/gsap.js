import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
import {SplitText} from 'gsap/SplitText';

gsap.registerPlugin(ScrollTrigger, SplitText);

'use strict';
const Animations = {
	/**
	 * @description Cache dom and strings
	 * @type {object}
	 */
	/** @description Initialize */
	init: function() {
		this.typingText();
	},
	typingText: function() {
		// header
		if (window.innerWidth > 767) {
			const headerLinks = gsap.timeline();
			headerLinks.from('.menu-item', {
				duration: 0.75,
				y: -300,
				autoAlpha: 0,
				opacity: 0,
				ease: 'elastic.out(1, 1)',
				stagger: {
					each: 0.75,
					amount: 0.5
				}
			}, '+=0.25');
			// titles
			gsap.utils.toArray('.gsap-page-title').forEach(function(elem) {
				const splitTimeline = gsap.timeline({scrollTrigger: {
					trigger: elem,
				}
				});
				const split = new SplitText(elem);
				splitTimeline.from (
					split.chars, {
						duration: 0.2,
						opacity: 0,
						scale: 0,
						y: 80,
						rotationX: 180,
						transformOrigin: '0% 50% -50',
						ease: 'back',
						stagger: 0.02,
						onComplete: removeSplit
					}, '+=0'
				);
				function removeSplit() {
					split.revert();
				}
			});
			gsap.utils.toArray('.gsap-section-title').forEach(function(elem) {
				const splitTimeline = gsap.timeline({scrollTrigger: {
					trigger: elem,
				}
				});
				const split = new SplitText(elem);
				splitTimeline.from (
					split.chars, {
						duration: 0.2,
						opacity: 1,
						scale: 0,
						y: 80,
						rotationX: 100,
						transformOrigin: '0% 50% -50',
						ease: 'back',
						stagger: 0.02,
						onComplete: removeSplit
					}, '+=0'
				);
				function removeSplit() {
					split.revert();
				}
			});
			// entry content
			gsap.utils.toArray('.gsap-entry-content').forEach(function(elem) {
				ScrollTrigger.create({
					trigger: elem,
					start: 'top 80%',
					end: 'bottom 20%',
					onEnter: function() {
						gsap.fromTo(
							elem,
							{y: 100, opacity: 0, autoAlpha: 0},
							{
								duration: 1.25,
								y: 0,
								autoAlpha: 1,
								opacity: 1,
								ease: 'back',
								overwrite: 'auto'
							}
						);
					}
				});
			});
			// hero
			gsap.utils.toArray('.gsap-text').forEach(function(elem) {
				const splitTimeline = gsap.timeline({scrollTrigger: {
					trigger: elem,
				}
				});
				const split = new SplitText(elem);
				splitTimeline.from (
					split.chars, {
						duration: .2,
						opacity: 1,
						scale: 0,
						ease: 'circ',
						stagger: 0.01,
						onComplete: removeSplit
					}, '+=1'
				);
				function removeSplit() {
					split.revert();
				}
			});
			gsap.utils.toArray('.gasp-bottom').forEach(function(elem) {
				ScrollTrigger.create({
					trigger: elem,
					start: 'top 80%',
					end: 'bottom 20%',
					onEnter: function() {
						gsap.fromTo(
							elem,
							{y: 100, autoAlpha: 0},
							{
								duration: 1.25,
								y: 0,
								autoAlpha: 1,
								opacity: 1,
								ease: 'back',
								overwrite: 'auto',
								stagger: {
									each: 0.75,
									amount: 0.5
								}
							}
						);
					}
				});
			});
			gsap.utils.toArray('.gasp-top').forEach(function(elem) {
				ScrollTrigger.create({
					trigger: elem,
					start: 'top 80%',
					end: 'bottom 20%',
					onEnter: function() {
						gsap.fromTo(
							elem,
							{y: -100, autoAlpha: 0},
							{
								duration: 1.25,
								y: 0,
								autoAlpha: 1,
								opacity: 1,
								ease: 'back',
								overwrite: 'auto',
								stagger: {
									each: 0.75,
									amount: 0.5
								}
							}
						);
					}
				});
			});
			gsap.utils.toArray('.gasp-left').forEach(function(elem) {
				ScrollTrigger.create({
					trigger: elem,
					start: 'top 80%',
					end: 'bottom 20%',
					onEnter: function() {
						gsap.fromTo(
							elem,
							{x: -100, autoAlpha: 0},
							{
								duration: 1.25,
								x: 0,
								autoAlpha: 1,
								opacity: 1,
								ease: 'back',
								overwrite: 'auto',
								stagger: {
									each: 0.75,
									amount: 0.5
								}
							}
						);
					}
				});
			});
			gsap.utils.toArray('.gasp-right').forEach(function(elem) {
				ScrollTrigger.create({
					trigger: elem,
					start: 'top 80%',
					end: 'bottom 20%',
					onEnter: function() {
						gsap.fromTo(
							elem,
							{x: 100, autoAlpha: 0},
							{
								duration: 1.25,
								x: 0,
								autoAlpha: 1,
								opacity: 1,
								ease: 'back',
								overwrite: 'auto',
								stagger: {
									each: 0.75,
									amount: 0.5
								}
							}
						);
					}
				});
			});
			gsap.utils.toArray('.gasp-opacity').forEach(function(elem) {
				ScrollTrigger.create({
					trigger: elem,
					start: 'top 80%',
					end: 'bottom 20%',
					onEnter: function() {
						gsap.fromTo(
							elem,
							{opacity: 0, autoAlpha: 0},
							{
								duration: 1.25,
								autoAlpha: 1,
								opacity: 1,
								ease: 'back',
								overwrite: 'auto',
								stagger: {
									each: 0.75,
									amount: 0.5
								}
							}
						);
					}
				});
			});
		}
	}
};

export default Animations;