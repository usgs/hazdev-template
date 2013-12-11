/* global define, escape */
define([], function () {
	'use strict';


	// default share links
	var DEFAULT_LINKS = [
		{
			name: 'Facebook',
			url: 'http://www.facebook.com/sharer.php?u=%URL%',
			class: 'facebook'
		},
		{
			name: 'Twitter',
			url: 'http://twitter.com/share?url=%URL%&amp;text=%TITLE%',
			class: 'twitter'
		},
		{
			name: 'Google',
			url: 'https://plusone.google.com/_/+1/confirm?url=%URL%',
			class: 'google-plus'
		},
		{
			name: 'Email',
			url: 'mailto:?to=&amp;subject=%TITLE%&amp;body=%URL%',
			class: 'email'
		}
	];


	/**
	 * Construct a new SocialLinks object.
	 *
	 * @param options {Object}
	 * @param options.el {DOMElement}
	 * @param options.links {Array<Link>}
	 *        Each "Link" is an object with these properties:
	 *        - name:  display name for link
	 *        - url:   url for link, with placeholders for url and title
	 *                 "%URL%" is replaced with current document url
	 *                 "%TITLE%" is replaced with current document title
	 *        - class: class for link
	 */
	var SocialLinks = function (options) {
		this._el = options.el;
		this._links = options.links || DEFAULT_LINKS;
		this.initialize(options);
	};


	/**
	 * Bind event listeners.
	 *
	 * Sub-classes can override this method for additional initialization.
	 */
	SocialLinks.prototype.initialize = function (/* options */) {
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
	SocialLinks.prototype.destroy = function () {
		window.removeEventListener('hashchange', this._render);
	};

	/**
	 * Update social links to current document url and title.
	 */
	SocialLinks.prototype.render = function () {
		var buf = [],
		    url = escape(window.location),
		    title = escape(document.title),
		    link, linkUrl;

		// build links
		for (var i=0, len=this._links.length; i<len; i++) {
			link = this._links[i];
			// insert current url and title into link url
			linkUrl = link.url;
			linkUrl = linkUrl.replace('%URL%', url);
			linkUrl = linkUrl.replace('%TITLE%', title);

			buf.push(' <a',
					' href="', link.url.replace('%URL%', url).replace('%TITLE%', title), '"',
					' class="', link.class, '"',
					' title="Share using ', link.name, '"',
					'>', link.name, '</a>');
		}

		// update element
		this._el.innerHTML = buf.join('');
	};


	// return constructor
	return SocialLinks;
});
