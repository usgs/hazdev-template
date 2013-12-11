/* global define, escape */
define([], function () {
	'use strict';

	/**
	 * Construct a new LinkUpdater object.
	 *
	 * LinkUpdater updates links based on the current page URL and TITLE,
	 * using a data attribute for templating.
	 *
	 * Example usage:
	 *
	 * <div class="container">
	 *   <a href="blah" data-link-template="something?url={URL}&amp;{TITLE}">Text</a>
	 * </div>
	 * <script>
	 *   new LinkUpdater({el: document.querySelector('.container')});
	 * </script>
	 *
	 * @param options {Object}
	 * @param options.el {DOMElement}
	 */
	var LinkUpdater = function (options) {
		this._el = options.el;
		this.initialize(options);
	};


	/**
	 * Bind event listeners.
	 *
	 * Sub-classes can override this method for additional initialization.
	 */
	LinkUpdater.prototype.initialize = function (/* options */) {
		// update when location changes
		var _this = this;
		this._render = function() {
			_this.render();
		};
		window.addEventListener('hashchange', this._render);

		// render links
		this.render();
	};

	/**
	 * Unbind event listeners.
	 */
	LinkUpdater.prototype.destroy = function () {
		window.removeEventListener('hashchange', this._render);
	};

	/**
	 * Update social links to current document url and title.
	 */
	LinkUpdater.prototype.render = function () {
		var url = escape(window.location),
		    title = escape(document.title),
		    links, link, linkUrl;

		// find all links with a "data-link-template" attribute
		links = this._el.querySelectorAll('a[data-link-template]');
		for (var i=0, len=links.length; i<len; i++) {
			link = links[i];
			// generate new url based on template
			linkUrl = link.getAttribute('data-link-template');
			linkUrl = linkUrl.replace('{URL}', url);
			linkUrl = linkUrl.replace('{TITLE}', title);
			// update href
			link.setAttribute('href', linkUrl);
		}
	};


	// return constructor
	return LinkUpdater;
});
