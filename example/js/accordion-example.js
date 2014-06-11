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
		el: document.querySelector('.page-content'),
		accordions: [
			{
				toggleText: 'Section Header (Dynamically Created)',
				toggleElement: 'h3',
				contentText:
					'This accordion element is not part of the original DOM, but is ' +
					'injected by Javascript at load time. Just an example of what can ' +
					'be done. Using the <em>accordion.addAccordion</em> method will' +
					'create a "standard" accordion with a header/banner at the top' +
					'being used for the clickable toggle.'
			},
			{}, // Empty accordion - use all of the defaults
			{
				toggleText: 'Another dynamic section',
				toggleElement: 'span',
				contentText:
					'My awesome contents for this great accordion',
				classes: 'my-accordion'
			}
		]
	});

	// build from content/title passed in
	accordion.addAccordion({
		toggleText: 'Section Header (Dynamically Created part 2)',
		contentText:
		'This accordion element is also not part of the original DOM, but is ' +
		'injected by Javascript at load time. This accordion is also not part ' +
		'of the initial accordion creation, it was added later with a direct ' +
		'call to <em>addAccordion()</em>. All your base are belong to us.'
	});

});
