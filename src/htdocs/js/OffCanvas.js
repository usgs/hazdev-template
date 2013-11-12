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
 *
 * A window resize listener enables or disables OffCanvas depending on a
 * configurable maxWidth property, which defaults to 768px;
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

	/**
	 * Move elements from current position into another element.
	 *
	 * A placeholder span element is left in the elements current position, so it
	 * can be moved back to its original position using _moveElementsBack.
	 *
	 * @param dst {DOMElement} element where els are appended.
	 * @param els {DOMNodeList|Array} elements to be moved.
	 */
	var _moveElements = function (dst, els) {
		for (var i=0, len=els.length; i<len; i++) {
			var el = els[i];
			el._placeholder = document.createElement('span');
			el.parentNode.replaceChild(el._placeholder, el);
			dst.appendChild(el);
		}
	};

	/**
	 * Restore elements moved by _moveElements to their original position in
	 * the DOM.
	 *
	 * @param els {DOMNodeList|Array} elements to be restored.
	 */
	var _moveElementsBack = function (els) {
		for (var i=0, len=els.length; i<len; i++) {
			var el = els[i];
			if (el._placeholder && el._placeholder.parentNode) {
				el._placeholder.parentNode.replaceChild(el, el._placeholder);
				el._placeholder = null;
			}
		}
	};

	// defaults
	var DEFAULTS = {
		'contentClass': 'offcanvas',
		'maxWidth': 768,
		'maskClass': 'offcanvas-mask',
		'containerClass': 'offcanvas-container',
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
	 * @param options.contentClass {String}
	 *        classname of elements that should appear offcanvas.
	 *        default 'offcanvas'.
	 * @param options.maxWidth {Integer}
	 *        maximum number of pixels for offcanvas to be enabled.
	 *        default 768.
	 * @param options.maskClass {String}
	 *        mask element classname.
	 *        default 'offcanvas-mask'.
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
		    _resizeTimeout = null,
		    _body, _mask, _container, _toggle;

		// create elements
		_body = document.querySelector('body');

		// mask that covers oncanvas content
		_mask = _body.appendChild(document.createElement('div'));
		_mask.className = _options.maskClass;

		// container for offcanvas content
		_container = _body.appendChild(document.createElement('div'));
		_container.className = _options.containerClass;

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
			// move elements into offcanvas container
			_moveElements(_container,
					document.querySelectorAll('.' + _options.contentClass));
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
			// move elements back to original dom position
			_moveElementsBack(
					document.querySelectorAll('.' + _options.contentClass));
		};


		// toggle offcanvas when toggle element is clicked
		_toggle.addEventListener('click', function (e) {
			_this.toggle();
			try {e.preventDefault();} catch (ex) {}
			return false;
		});

		// hide offcanvas when mask element is clicked
		_mask.addEventListener('click', function () {
			_this.hide();
		});


		// only enable offcanvas if window is smaller than maxWidth
		var _checkSize = function () {
			if (window.innerWidth < _options.maxWidth) {
				_this.enable();
			} else {
				_this.disable();
			}
		};
		_checkSize();

		// enable/disable offcanvas when window resizes
		window.addEventListener('resize', function () {
			if (_resizeTimeout !== null) {
				clearTimeout(_resizeTimeout);
			}

			_resizeTimeout = setTimeout(function () {
				_resizeTimeout = null;
				_checkSize();
			}, 10);
		});

	};


	return OffCanvas;
});
