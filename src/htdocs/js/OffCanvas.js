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
  'containerClass': 'offcanvas',
  'toggleClass': 'offcanvas-toggle',
  'toggleContent': 'Menu',
  'enabledClass': 'offcanvas-enabled',
  'almostActiveClass': 'offcanvas-almost-active',
  'activeClass': 'offcanvas-active'
};

/**
 * Construct a new OffCanvas object.
 *
 * When OffCanvas is shown (must be enabled first), css classes are added to the
 * body element to control the transition.
 *
 * A toggle element is added when OffCanvas is first enabled (only shown when
 * offcanvas is enabled) that toggles OffCanvas content.  A mask element is also
 * added that is shown beneath OffCanvas content, but above page content.
 *
 * @param options {Object} options.
 * @param options.enable {Boolean}
 *        whether to automatically enable OffCanvas.
 *        default true.
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
  var _this,
      _initialize,

      _active,
      _activeClass,
      _almostActiveClass,
      _body,
      _enabled,
      _enabledClass,
      _mask,
      _toggle;

  _this = Object.create({});

  _initialize = function () {
    options = _extend({}, DEFAULTS, options);

    _active = false;
    _activeClass = options.activeClass;
    _almostActiveClass = options.almostActiveClass;
    _body = document.querySelector('body');
    _enabled = false;
    _enabledClass = options.enabledClass;

    // element that covers content and allows users to return to content
    _mask = _body.appendChild(document.createElement('div'));
    _mask.className = options.maskClass;
    _mask.addEventListener('click', _this.hide);
    _mask.addEventListener('touchstart', _this.hide);

    // toggle offcanvas visibility
    _toggle = _body.appendChild(document.createElement('button'));
    _toggle.className = options.toggleClass;
    _toggle.innerHTML = options.toggleContent;
    _toggle.addEventListener('click', _this.toggle);
    _toggle.addEventListener('touchstart', _this.toggle);

    if (options.enable) {
      _this.enable();
    }

    options = null;
  };

  /**
   * Disable, unbind event handlers, and free references.
   */
  _this.destroy = function () {
    // disable
    _this.disable();

    // unbind event handlers
    if (_mask !== null) {
      _mask.removeEventListener('click', _this.hide);
      _mask.removeEventListener('touchstart', _this.hide);
      _mask.parentNode.removeChild(_mask);
    }
    if (_toggle !== null) {
      _toggle.removeEventListener('click', _this.toggle);
      _toggle.removeEventListener('touchstart', _this.toggle);
      _toggle.parentNode.removeChild(_toggle);
    }

    // free references
    _body = null;
    _mask = null;
    _toggle = null;
  };

  /**
   * Show offcanvas content.
   */
  _this.show = function () {
    // must be enabled to show
    if (!_enabled) {
      return;
    }
    // track that offcanvas is visible
    _active = true;
    // add "almost active" class
    _body.classList.add(_almostActiveClass);
    // wait 50 milliseconds before triggering transition,
    // for firefox to update overflow of body
    setTimeout(function () {
      // add "active" class
      _body.classList.add(_activeClass);
    }, 50);
  };


  /**
   * Hide offcanvas content.
   */
  _this.hide = function (e) {
    // must be enabled to hide
    if (!_enabled) {
      return;
    }
    // track that offcanvas is hidden
    _active = false;
    // remove "active" class
    _body.classList.remove(_activeClass);
    // wait 50 milliseconds before triggering transition,
    // for firefox to update overflow of body
    setTimeout(function () {
      // remove "almost active" class
      _body.classList.remove(_almostActiveClass);
    }, 50);
    // stop event
    try {
      e.preventDefault();
    } catch (ex) {
    }
    return false;
  };

  /**
   * Toggle offcanvas content.
   */
  _this.toggle = function(e) {
    if (_active) {
      _this.hide();
    } else {
      _this.show();
    }
    // stop event
    try {
      e.preventDefault();
    } catch (ex) {
    }
    return false;
  };

  /**
   * Enable offcanvas.
   *
   * Usually shouldn't be called directly.  A window resize listener
   * enables/disables offcanvas based on window size.
   */
  _this.enable = function() {
    if (_enabled) {
      return;
    }
    _enabled = true;
    _body.classList.add(_enabledClass);
  };

  /**
   * Disable offcanvas.
   *
   * Usually shouldn't be called directly.  A window resize listener
   * enables/disables offcanvas based on window size.
   */
  _this.disable = function () {
    if (!_enabled) {
      return;
    }
    if (_active) {
      _this.hide();
    }
    _enabled = false;
    _body.classList.remove(_enabledClass);
  };


  _initialize();
  return _this;
};


// singleton reference
var SINGLETON = null;

module.exports = {
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
