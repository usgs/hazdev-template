require.config({
	baseUrl: '.',
	paths: {
		theme: '/theme/js'
	}
});

require([
	'theme/Accordion'
], function (
	Accordion
) {
	'use strict';

	var accordion = new Accordion({
		el: document.querySelector('.page-content')
	});

	// setup from existing markup on page
	accordion.enhanceAccordions();

	// build from content/title passed in
	accordion.addAccordion(
			'Section Header (Dynamically Created)',
			'This accordion element is not part of the original DOM, but is ' +
			'injected by Javascript at load time. Just an example of what can be ' +
			'done. Using the <em>accordion.addAccordion</em> method will create a ' +
			'"standard" accordion with a header/banner at the top being used for ' +
			'the clickable toggle.'
		);

});
