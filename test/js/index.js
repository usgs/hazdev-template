
require.config({
	baseUrl: '.',
	paths: {
		theme: '/theme/js'
	}
});

require(['theme/LinkUpdater'], function (LinkUpdater) {
	'use strict';

	// automatically update page-social links client side
	new LinkUpdater({
		el: document.querySelector('.page-social')
	});

});
