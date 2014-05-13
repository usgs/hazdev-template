/* global define */
define([], function () {
	'use strict';

	var _toggleClass = function (event) {
		var accordion = event.target.parentElement,
		    className = accordion.className;

		if (className.indexOf('accordion-open') !== -1) {
			className = className.replace('accordion-open', 'accordion-closed');
		} else if (className.indexOf('accordion-closed') !== -1){
			className = className.replace('accordion-closed', 'accordion-open');
		} else {
			className = 'accordion accordion-closed';
		}

		accordion.className = className;
	};

	var _bindAccordionEvent = function(element) {

		var header = element.querySelector('.header');

		header.addEventListener('click', function (header) {
			_toggleClass(header);
		});
	};

	var Accordion = function (options) {
		this._el = options.el || '';
	};

	/*
	 * this will build the markup for an accordion element
	 */
	Accordion.prototype.addAccordion = function(title, content) {
		var accordion = document.createElement('div'),
		    accordionTitle = document.createElement('span'),
		    accordionContent = document.createElement('div');

		// set classes for accordion styles
		accordion.className = 'accordion';
		accordionTitle.className = 'header';

		// set the html markup that will be collapsable
		accordionTitle.innerHTML = title;
		accordionContent.innerHTML = content;

		// append DOM elements to accordion wrapper div
		accordion.appendChild(accordionTitle);
		accordion.appendChild(accordionContent);

		_bindAccordionEvent(accordion);

		this._el.appendChild(accordion);
	};

	/*
	 * this will enhance this._el by searching for all occurences of .accordions,
	 * then it will setup the accordion action
	 */
	Accordion.prototype.enhanceAccordions = function() {
		var headers = this._el.querySelectorAll('.accordion');

		for (var i = 0; i < headers.length; i++) {
			var header = headers[i];

			_bindAccordionEvent(header);
		}
	};

	return Accordion;

});