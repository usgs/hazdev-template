/* jshint -W098 */
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
 *   LinkUpdater({el: document.querySelector('.container')});
 * </script>
 *
 * @param options {Object}
 * @param options.el {DOMElement}
 */
var LinkUpdater = function (options) {
  var _this,
      _initialize;


  _this = {};


  /**
   * Parse options and bind event listeners.
   */
  _initialize = function (options) {
    _this.el = (options && options.el) ?
        options.el : document.querySelector('body');

    // update links
    _this.render();

    // update links when url fragment changes
    window.addEventListener('hashchange', _this.render);
  };

  /**
   * Update social links to current document url and title.
   */
  _this.render = function () {
    var i,
        len,
        link,
        linkUrl,
        links,
        title,
        url;

    title = encodeURIComponent(document.title);
    url = encodeURIComponent(window.location);

    // find all links with a "data-link-template" attribute
    links = _this.el.querySelectorAll('a[data-link-template]');
    for (i = 0, len = links.length; i < len; i++) {
      link = links[i];
      // generate new url based on template
      linkUrl = link.getAttribute('data-link-template');
      linkUrl = linkUrl.replace('{TITLE}', title);
      linkUrl = linkUrl.replace('{URL}', url);
      // update href
      link.setAttribute('href', linkUrl);
    }
  };

  /**
   * Unbind event listeners.
   */
  _this.destroy = function () {
    if (!_this) {
      return;
    }

    window.removeEventListener('hashchange', _this.render);
    _initialize = null;
    _this = null;
  };


  _initialize(options);
  options = null;
  return _this;
};

