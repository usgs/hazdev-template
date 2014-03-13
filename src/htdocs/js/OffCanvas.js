/*global define*/

/*
 * OffCanvas is implemented using JavaScript instead of pure CSS so elements
 * can come from different containing elements on the page.
 *
 * When OffCanvas is enabled, all elements with the class contentClass
 * (default "offcanvas") are moved into an element created by OffCanvas.  When
 * OffCanvas is disabled, those elements are returned to their original position
 * in the DOM.
 *
 * When OffCanvas is shown (must be enabled first), css classes are added to the
 * body element to control the transition.
 *
 * A toggle element is added when OffCanvas is first enabled (only shown when
 * offcanvas is enabled) that toggles OffCanvas content.  A mask element is also
 * added that is shown beneath OffCanvas content, but above page content.
 */
define([], function() {
	'use strict';

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

	// defaults
	var DEFAULTS = {
		'enable': true,
		'maskClass': 'offcanvas-mask',
		'closeClass': 'offcanvas-close',
		'containerClass': 'offcanvas',
		'toggleClass': 'offcanvas-toggle',
		'toggleContent': '&#8801;',
		'enabledClass': 'offcanvas-enabled',
		'almostActiveClass': 'offcanvas-almost-active',
		'activeClass': 'offcanvas-active'
	};

	/**
	 * Construct a new OffCanvas object.
	 *
	 * @param options {Object} options.
	 * @param options.enable {Boolean}
	 *        whether to automatically enable OffCanvas.
	 *        default true.
	 * @param options.maskClass {String}
	 *        mask element classname.
	 *        default 'offcanvas-mask'.
	 * @param options.closeClass {String}
	 *        close element classname.
	 *        default 'offcanvas-close'.
	 * @param options.containerClass {String}
	 *        offcanvas container element classname.
	 *        default 'offcanvas-container'.
	 * @param options.toggleClass {String}
	 *        offcanvas toggle element classname.
	 *        default 'offcanvas-toggle'.
	 * @param options.toggleContent {String}
	 *        offcanvas toggle element innerHTML.
	 *        default '&#8801;' (three horizontal lines).
	 * @param options.enabledClass {String}
	 *        classname added to body when offcanvas has been constructed.
	 *        default 'offcanvas-enabled'.
	 * @param options.almostActiveClass {String}
	 *        classname added to body 50ms before offcanvas is activated.
	 *        default 'offcanvas-almost-active'.
	 * @param options.activeClass {String}
	 *        classname added to body when offcanvas is activated.
	 *        default 'offcanvas-active'.
	 */
	var OffCanvas = function (options) {
		var _this = this,
		    _options = _extend({}, DEFAULTS, options),
		    _enabled = false,
		    _active = false,
		    _body, _mask, _close, _container, _toggle;

		// create elements
		_body = document.querySelector('body');

		// mask that covers oncanvas content
		_mask = _body.appendChild(document.createElement('div'));
		_mask.className = _options.maskClass;

		// element that covers content and allows users to return to content
		_close = _body.appendChild(document.createElement('div'));
		_close.className = _options.closeClass;

		// container for offcanvas content
		_container = document.querySelector(_options.containerClass);

		// toggle offcanvas visibility
		_toggle = _body.appendChild(document.createElement('div'));
		_toggle.className = _options.toggleClass;
		_toggle.innerHTML = _options.toggleContent;


		/**
		 * Show offcanvas content.
		 */
		this.show = function () {
			// must be enabled to show
			if (!_enabled) { return; }
			// track that offcanvas is visible
			_active = true;
			// add "almost active" class
			_body.classList.add(_options.almostActiveClass);
			// wait 50 milliseconds before triggering transition,
			// for firefox to update overflow of body
			setTimeout(function () {
				// add "active" class
				_body.classList.add(_options.activeClass);
			}, 50);
		};

		/**
		 * Hide offcanvas content.
		 */
		this.hide = function () {
			// must be enabled to hide
			if (!_enabled) { return; }
			// track that offcanvas is hidden
			_active = false;
			// remove "active" class
			_body.classList.remove(_options.activeClass);
			// wait 50 milliseconds before triggering transition,
			// for firefox to update overflow of body
			setTimeout(function () {
				// remove "almost active" class
				_body.classList.remove(_options.almostActiveClass);
			}, 50);
		};

		/**
		 * Toggle offcanvas content.
		 */
		this.toggle = function() {
			if (_active) {
				this.hide();
			} else {
				this.show();
			}
		};

		/**
		 * Enable offcanvas.
		 *
		 * Usually shouldn't be called directly.  A window resize listener
		 * enables/disables offcanvas based on window size.
		 */
		this.enable = function() {
			if (_enabled) { return; }

			_enabled = true;
			_body.classList.add(_options.enabledClass);
		};

		/**
		 * Disable offcanvas.
		 *
		 * Usually shouldn't be called directly.  A window resize listener
		 * enables/disables offcanvas based on window size.
		 */
		this.disable = function () {
			if (!_enabled) { return; }

			if (_active) {
				this.hide();
			}
			_enabled = false;
			_body.classList.remove(_options.enabledClass);
		};


		// toggle offcanvas when toggle element is clicked
		_toggle.addEventListener('click', function (e) {
			_this.toggle();
			try {e.preventDefault();} catch (ex) {}
			return false;
		});

		// hide offcanvas when mask element is clicked
		_close.addEventListener('click', function () {
			_this.hide();
		});

		// enable offcanvas during constructor
		if (_options.enable) {
			this.enable();
		}
	};


	// singleton reference
	var SINGLETON = null;

	return {
		/**
		 * Get or construct the singleton instance.
		 *
		 * @param options {Object}
		 *        offcanvas options, only used on first call to getOffCanvas().
		 * @return OffCanvas object.
		 * @see OffCanvas.
		 */
		getOffCanvas: function (options) {
			if (SINGLETON === null) {
				SINGLETON = new OffCanvas(options);
			}
			return SINGLETON;
		}
	};

});
