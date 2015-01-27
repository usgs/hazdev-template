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
  var _this,
      _initialize,

      _el,

      _render;

  /**
   * Parse options and bind event listeners.
   */
  _initialize = function () {
    _el = options.el;
    // update links
    _render();
    // update links when url fragment changes
    window.addEventListener('hashchange', _render);

    options = null;
  };

  /**
   * Update social links to current document url and title.
   */
  _render = function () {
    var url = encodeURIComponent(window.location),
        title = encodeURIComponent(document.title),
        links, link, linkUrl;

    // find all links with a "data-link-template" attribute
    links = _el.querySelectorAll('a[data-link-template]');
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

  /**
   * Unbind event listeners.
   */
  _this.destroy = function () {
    window.removeEventListener('hashchange', _render);
  };

  _initialize();
  return _this;
};


module.exports = LinkUpdater;
