
require([
	'./OffCanvas',
	'./SocialLinks'
], function (
	OffCanvas,
	SocialLinks
) {
	'use strict';

	// make the site footer offcanvas
	document.querySelector('.site-footer').classList.add('offcanvas');
	new OffCanvas();

	// create social links element
	var socialEl = document.createElement('nav');
	socialEl.id = 'page-social';
	socialEl.className = 'page-social';
	socialEl.setAttribute('aria-label', 'Share this page');
	document.querySelector('.page-footer').appendChild(socialEl);
	new SocialLinks({el: socialEl});

});
