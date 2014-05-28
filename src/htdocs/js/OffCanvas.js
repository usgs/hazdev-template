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
		this._options = _extend({}, DEFAULTS, options);
		this._initialize();
	};


	OffCanvas.prototype._initialize = function () {
		var options = this._options,
		    body,
		    mask,
		    close,
		    toggle;

		this._enabled = false;
		this._active = false;
		this.hide = this.hide.bind(this);
		this.toggle = this.toggle.bind(this);

		// create elements
		body = document.querySelector('body');
		this._body = body;

		// mask that covers oncanvas content
		mask = body.appendChild(document.createElement('div'));
		mask.className = options.maskClass;
		this._mask = mask;

		// element that covers content and allows users to return to content
		close = body.appendChild(document.createElement('div'));
		close.className = options.closeClass;
		close.addEventListener('click', this.hide);
		close.addEventListener('touchstart', this.hide);
		this._close = close;

		// container for offcanvas content
		this._container = document.querySelector(options.containerClass);

		// toggle offcanvas visibility
		toggle = body.appendChild(document.createElement('div'));
		toggle.className = options.toggleClass;
		toggle.innerHTML = options.toggleContent;
		toggle.addEventListener('click', this.toggle);
		toggle.addEventListener('touchstart', this.toggle);
		this._toggle = toggle;

		// enable offcanvas during constructor
		if (options.enable) {
			this.enable();
		}
	};

	/**
	 * Show offcanvas content.
	 */
	OffCanvas.prototype.show = function () {
		var options,
		    body;

		// must be enabled to show
		if (!this._enabled) {
			return;
		}
		// track that offcanvas is visible
		this._active = true;

		options = this._options;
		body = this._body;
		// add "almost active" class
		body.classList.add(options.almostActiveClass);
		// wait 50 milliseconds before triggering transition,
		// for firefox to update overflow of body
		setTimeout(function () {
			// add "active" class
			body.classList.add(options.activeClass);
		}, 50);
	};

	/**
	 * Hide offcanvas content.
	 */
	OffCanvas.prototype.hide = function (e) {
		var options,
		    body;

		// must be enabled to hide
		if (!this._enabled) { return; }
		// track that offcanvas is hidden
		this._active = false;

		options = this._options;
		body = this._body;
		// remove "active" class
		body.classList.remove(options.activeClass);
		// wait 50 milliseconds before triggering transition,
		// for firefox to update overflow of body
		setTimeout(function () {
			// remove "almost active" class
			body.classList.remove(options.almostActiveClass);
		}, 50);
		try {e.preventDefault();} catch (ex) {}
	};

	/**
	 * Toggle offcanvas content.
	 */
	OffCanvas.prototype.toggle = function(e) {
		if (this._active) {
			this.hide();
		} else {
			this.show();
		}
		try {e.preventDefault();} catch (ex) {}
		return false;
	};

	/**
	 * Enable offcanvas.
	 *
	 * Usually shouldn't be called directly.  A window resize listener
	 * enables/disables offcanvas based on window size.
	 */
	OffCanvas.prototype.enable = function() {
		if (this._enabled) {
			return;
		}
		this._enabled = true;
		this._body.classList.add(this._options.enabledClass);
	};

	/**
	 * Disable offcanvas.
	 *
	 * Usually shouldn't be called directly.  A window resize listener
	 * enables/disables offcanvas based on window size.
	 */
	OffCanvas.prototype.disable = function () {
		if (!this._enabled) {
			return;
		}
		if (this._active) {
			this.hide();
		}
		this._enabled = false;
		this._body.classList.remove(this._options.enabledClass);
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
