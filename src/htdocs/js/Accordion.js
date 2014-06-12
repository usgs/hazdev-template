/* global define */
define([], function () {
	'use strict';

	var ACCORDION_OPTIONS = {
		accordions: null,
		el: null
	};

	var ADD_ACCORDION_OPTIONS = {
		toggleText: 'Details',
		toggleElement: 'span',
		contentText: 'Contents',
		classes: 'accordion-standard'
	};

	var ACCORDION_CLOSED = 'accordion-closed',
	    ACCORDION_TOGGLE = 'accordion-toggle',
	    ACCORDION_CONTENT = 'accordion-content';

	/**
	 * Copy properties from one or more objects onto another object.
	 *
	 * @param dst {Object}
	 *        Destination object where properties are copied
	 * @param varargs {Object...}
	 *        Variable number of objects where properties are copied from.
	 *        Objects earlier in the arguments list have their properties
	 *        overridden by objects later in the arguments list.
	 * @return dst.
	 */
	var _extend = function(dst) {
		for (var i=1, len=arguments.length; i<len; i++) {
			var o = arguments[i];
			for (var prop in o) {
				dst[prop] = o[prop];
			}
		}
		return dst;
	};

	var _onClick = function (evt) {
		var target = evt.target;

		if (target.classList.contains(ACCORDION_TOGGLE)) {
			target.parentElement.classList.toggle(ACCORDION_CLOSED);
		}
	};

	var Accordion = function (options) {
		options = _extend({}, ACCORDION_OPTIONS, options);
		this._options = options;
		this._el = options.el || document.createElement('section');

		this._initialize();
	};

	Accordion.prototype._initialize = function () {
		var options = this._options,
		    i,
		    len;

		this._el.addEventListener('click', _onClick);

		if (options.accordions) {
			len = options.accordions.length;
			for (i = 0; i < len; i++) {
				this.addAccordion(options.accordions[i]);
			}
		}
	};

	/*
	 * this will build the markup for an accordion element
	 */
	Accordion.prototype.addAccordion = function(options) {
		var accordion,
		    title,
		    content;

		options = _extend({}, ADD_ACCORDION_OPTIONS, options);

		accordion = document.createElement('section');
		accordion.className = 'accordion ' + options.classes;

		title = document.createElement(options.toggleElement);
		title.className = ACCORDION_TOGGLE;
		title.innerHTML = options.toggleText;
		accordion.appendChild(title);

		content = document.createElement('div');
		content.className = ACCORDION_CONTENT;
		content.innerHTML = options.contentText;
		accordion.appendChild(content);

		this._el.appendChild(accordion);
	};

	return Accordion;

});
