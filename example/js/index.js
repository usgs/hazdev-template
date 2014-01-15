
require.config({
	baseUrl: '.',
	paths: {
		theme: '/theme/js'
	}
});

require([
	'theme/LinkUpdater',
	'theme/Accordion'
], function (
	LinkUpdater,
	Accordion
) {

	'use strict';

	// automatically update page-social links client side
	new LinkUpdater({
		el: document.querySelector('.page-social')
	});

	var accordion = new Accordion({
		el: document.querySelector('.page-content')
	});

	// setup from existing markup on page
	accordion.enhanceAccordions();

	// build from content/title passed in
	accordion.addAccordion(
			'Eddie Hunter',
			'This is the content that should be collapsable.'
		);

});
