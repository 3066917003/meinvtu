/*! iScroll v5.1.2 ~ (c) 2008-2014 Matteo Spinelli ~ http://cubiq.org/license */
(function (window, document, Math) {
var rAF = window.requestAnimationFrame  ||
  window.webkitRequestAnimationFrame  ||
  window.mozRequestAnimationFrame   ||
  window.oRequestAnimationFrame   ||
  window.msRequestAnimationFrame    ||
  function (callback) { window.setTimeout(callback, 1000 / 60); };

var utils = (function () {
  var me = {};

  var _elementStyle = document.createElement('div').style;
  var _vendor = (function () {
    var vendors = ['t', 'webkitT', 'MozT', 'msT', 'OT'],
      transform,
      i = 0,
      l = vendors.length;

    for ( ; i < l; i++ ) {
      transform = vendors[i] + 'ransform';
      if ( transform in _elementStyle ) return vendors[i].substr(0, vendors[i].length-1);
    }

    return false;
  })();

  function _prefixStyle (style) {
    if ( _vendor === false ) return false;
    if ( _vendor === '' ) return style;
    return _vendor + style.charAt(0).toUpperCase() + style.substr(1);
  }

  me.getTime = Date.now || function getTime () { return new Date().getTime(); };

  me.extend = function (target, obj) {
    for ( var i in obj ) {
      target[i] = obj[i];
    }
  };

  me.addEvent = function (el, type, fn, capture) {
    el.addEventListener(type, fn, !!capture);
  };

  me.removeEvent = function (el, type, fn, capture) {
    el.removeEventListener(type, fn, !!capture);
  };

  me.prefixPointerEvent = function (pointerEvent) {
    return window.MSPointerEvent ?
      'MSPointer' + pointerEvent.charAt(9).toUpperCase() + pointerEvent.substr(10):
      pointerEvent;
  };

  me.momentum = function (current, start, time, lowerMargin, wrapperSize, deceleration) {
    var distance = current - start,
      speed = Math.abs(distance) / time,
      destination,
      duration;

    deceleration = deceleration === undefined ? 0.0006 : deceleration;

    destination = current + ( speed * speed ) / ( 2 * deceleration ) * ( distance < 0 ? -1 : 1 );
    duration = speed / deceleration;

    if ( destination < lowerMargin ) {
      destination = wrapperSize ? lowerMargin - ( wrapperSize / 2.5 * ( speed / 8 ) ) : lowerMargin;
      distance = Math.abs(destination - current);
      duration = distance / speed;
    } else if ( destination > 0 ) {
      destination = wrapperSize ? wrapperSize / 2.5 * ( speed / 8 ) : 0;
      distance = Math.abs(current) + destination;
      duration = distance / speed;
    }

    return {
      destination: Math.round(destination),
      duration: duration
    };
  };

  var _transform = _prefixStyle('transform');

  me.extend(me, {
    hasTransform: _transform !== false,
    hasPerspective: _prefixStyle('perspective') in _elementStyle,
    hasTouch: 'ontouchstart' in window,
    hasPointer: window.PointerEvent || window.MSPointerEvent, // IE10 is prefixed
    hasTransition: _prefixStyle('transition') in _elementStyle
  });

  // This should find all Android browsers lower than build 535.19 (both stock browser and webview)
  me.isBadAndroid = /Android /.test(window.navigator.appVersion) && !(/Chrome\/\d/.test(window.navigator.appVersion));

  me.extend(me.style = {}, {
    transform: _transform,
    transitionTimingFunction: _prefixStyle('transitionTimingFunction'),
    transitionDuration: _prefixStyle('transitionDuration'),
    transitionDelay: _prefixStyle('transitionDelay'),
    transformOrigin: _prefixStyle('transformOrigin')
  });

  me.hasClass = function (e, c) {
    var re = new RegExp("(^|\\s)" + c + "(\\s|$)");
    return re.test(e.className);
  };

  me.addClass = function (e, c) {
    if ( me.hasClass(e, c) ) {
      return;
    }

    var newclass = e.className.split(' ');
    newclass.push(c);
    e.className = newclass.join(' ');
  };

  me.removeClass = function (e, c) {
    if ( !me.hasClass(e, c) ) {
      return;
    }

    var re = new RegExp("(^|\\s)" + c + "(\\s|$)", 'g');
    e.className = e.className.replace(re, ' ');
  };

  me.offset = function (el) {
    var left = -el.offsetLeft,
      top = -el.offsetTop;

    // jshint -W084
    while (el = el.offsetParent) {
      left -= el.offsetLeft;
      top -= el.offsetTop;
    }
    // jshint +W084

    return {
      left: left,
      top: top
    };
  };

  me.preventDefaultException = function (el, exceptions) {
    for ( var i in exceptions ) {
      if ( exceptions[i].test(el[i]) ) {
        return true;
      }
    }

    return false;
  };

  me.extend(me.eventType = {}, {
    touchstart: 1,
    touchmove: 1,
    touchend: 1,

    mousedown: 2,
    mousemove: 2,
    mouseup: 2,

    pointerdown: 3,
    pointermove: 3,
    pointerup: 3,

    MSPointerDown: 3,
    MSPointerMove: 3,
    MSPointerUp: 3
  });

  me.extend(me.ease = {}, {
    quadratic: {
      style: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',
      fn: function (k) {
        return k * ( 2 - k );
      }
    },
    circular: {
      style: 'cubic-bezier(0.1, 0.57, 0.1, 1)', // Not properly "circular" but this looks better, it should be (0.075, 0.82, 0.165, 1)
      fn: function (k) {
        return Math.sqrt( 1 - ( --k * k ) );
      }
    },
    back: {
      style: 'cubic-bezier(0.175, 0.885, 0.32, 1.275)',
      fn: function (k) {
        var b = 4;
        return ( k = k - 1 ) * k * ( ( b + 1 ) * k + b ) + 1;
      }
    },
    bounce: {
      style: '',
      fn: function (k) {
        if ( ( k /= 1 ) < ( 1 / 2.75 ) ) {
          return 7.5625 * k * k;
        } else if ( k < ( 2 / 2.75 ) ) {
          return 7.5625 * ( k -= ( 1.5 / 2.75 ) ) * k + 0.75;
        } else if ( k < ( 2.5 / 2.75 ) ) {
          return 7.5625 * ( k -= ( 2.25 / 2.75 ) ) * k + 0.9375;
        } else {
          return 7.5625 * ( k -= ( 2.625 / 2.75 ) ) * k + 0.984375;
        }
      }
    },
    elastic: {
      style: '',
      fn: function (k) {
        var f = 0.22,
          e = 0.4;

        if ( k === 0 ) { return 0; }
        if ( k == 1 ) { return 1; }

        return ( e * Math.pow( 2, - 10 * k ) * Math.sin( ( k - f / 4 ) * ( 2 * Math.PI ) / f ) + 1 );
      }
    }
  });

  me.tap = function (e, eventName) {
    var ev = document.createEvent('Event');
    ev.initEvent(eventName, true, true);
    ev.pageX = e.pageX;
    ev.pageY = e.pageY;
    e.target.dispatchEvent(ev);
  };

  me.click = function (e) {
    var target = e.target,
      ev;

    if ( !(/(SELECT|INPUT|TEXTAREA)/i).test(target.tagName) ) {
      ev = document.createEvent('MouseEvents');
      ev.initMouseEvent('click', true, true, e.view, 1,
        target.screenX, target.screenY, target.clientX, target.clientY,
        e.ctrlKey, e.altKey, e.shiftKey, e.metaKey,
        0, null);

      ev._constructed = true;
      target.dispatchEvent(ev);
    }
  };

  return me;
})();

function IScroll (el, options) {
  this.wrapper = typeof el == 'string' ? document.querySelector(el) : el;
  this.scroller = this.wrapper.children[0];
  this.scrollerStyle = this.scroller.style;   // cache style for better performance

  this.options = {

    resizeScrollbars: true,

    mouseWheelSpeed: 20,

    snapThreshold: 0.334,

// INSERT POINT: OPTIONS 

    startX: 0,
    startY: 0,
    scrollY: true,
    directionLockThreshold: 5,
    momentum: true,

    bounce: true,
    bounceTime: 600,
    bounceEasing: '',

    preventDefault: true,
    preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT)$/ },

    HWCompositing: true,
    useTransition: true,
    useTransform: true
  };

  for ( var i in options ) {
    this.options[i] = options[i];
  }

  // Normalize options
  this.translateZ = this.options.HWCompositing && utils.hasPerspective ? ' translateZ(0)' : '';

  this.options.useTransition = utils.hasTransition && this.options.useTransition;
  this.options.useTransform = utils.hasTransform && this.options.useTransform;

  this.options.eventPassthrough = this.options.eventPassthrough === true ? 'vertical' : this.options.eventPassthrough;
  this.options.preventDefault = !this.options.eventPassthrough && this.options.preventDefault;

  // If you want eventPassthrough I have to lock one of the axes
  this.options.scrollY = this.options.eventPassthrough == 'vertical' ? false : this.options.scrollY;
  this.options.scrollX = this.options.eventPassthrough == 'horizontal' ? false : this.options.scrollX;

  // With eventPassthrough we also need lockDirection mechanism
  this.options.freeScroll = this.options.freeScroll && !this.options.eventPassthrough;
  this.options.directionLockThreshold = this.options.eventPassthrough ? 0 : this.options.directionLockThreshold;

  this.options.bounceEasing = typeof this.options.bounceEasing == 'string' ? utils.ease[this.options.bounceEasing] || utils.ease.circular : this.options.bounceEasing;

  this.options.resizePolling = this.options.resizePolling === undefined ? 60 : this.options.resizePolling;

  if ( this.options.tap === true ) {
    this.options.tap = 'tap';
  }

  if ( this.options.shrinkScrollbars == 'scale' ) {
    this.options.useTransition = false;
  }

  this.options.invertWheelDirection = this.options.invertWheelDirection ? -1 : 1;

// INSERT POINT: NORMALIZATION

  // Some defaults
  this.x = 0;
  this.y = 0;
  this.directionX = 0;
  this.directionY = 0;
  this._events = {};

// INSERT POINT: DEFAULTS

  this._init();
  this.refresh();

  this.scrollTo(this.options.startX, this.options.startY);
  this.enable();
}

IScroll.prototype = {
  version: '5.1.2',

  _init: function () {
    this._initEvents();

    if ( this.options.scrollbars || this.options.indicators ) {
      this._initIndicators();
    }

    if ( this.options.mouseWheel ) {
      this._initWheel();
    }

    if ( this.options.snap ) {
      this._initSnap();
    }

    if ( this.options.keyBindings ) {
      this._initKeys();
    }

// INSERT POINT: _init

  },

  destroy: function () {
    this._initEvents(true);

    this._execEvent('destroy');
  },

  _transitionEnd: function (e) {
    if ( e.target != this.scroller || !this.isInTransition ) {
      return;
    }

    this._transitionTime();
    if ( !this.resetPosition(this.options.bounceTime) ) {
      this.isInTransition = false;
      this._execEvent('scrollEnd');
    }
  },

  _start: function (e) {
    // React to left mouse button only
    if ( utils.eventType[e.type] != 1 ) {
      if ( e.button !== 0 ) {
        return;
      }
    }

    if ( !this.enabled || (this.initiated && utils.eventType[e.type] !== this.initiated) ) {
      return;
    }

    if ( this.options.preventDefault && !utils.isBadAndroid && !utils.preventDefaultException(e.target, this.options.preventDefaultException) ) {
      e.preventDefault();
    }

    var point = e.touches ? e.touches[0] : e,
      pos;

    this.initiated  = utils.eventType[e.type];
    this.moved    = false;
    this.distX    = 0;
    this.distY    = 0;
    this.directionX = 0;
    this.directionY = 0;
    this.directionLocked = 0;

    this._transitionTime();

    this.startTime = utils.getTime();

    if ( this.options.useTransition && this.isInTransition ) {
      this.isInTransition = false;
      pos = this.getComputedPosition();
      this._translate(Math.round(pos.x), Math.round(pos.y));
      this._execEvent('scrollEnd');
    } else if ( !this.options.useTransition && this.isAnimating ) {
      this.isAnimating = false;
      this._execEvent('scrollEnd');
    }

    this.startX    = this.x;
    this.startY    = this.y;
    this.absStartX = this.x;
    this.absStartY = this.y;
    this.pointX    = point.pageX;
    this.pointY    = point.pageY;

    this._execEvent('beforeScrollStart');
  },

  _move: function (e) {
    if ( !this.enabled || utils.eventType[e.type] !== this.initiated ) {
      return;
    }

    if ( this.options.preventDefault ) {  // increases performance on Android? TODO: check!
      e.preventDefault();
    }

    var point   = e.touches ? e.touches[0] : e,
      deltaX    = point.pageX - this.pointX,
      deltaY    = point.pageY - this.pointY,
      timestamp = utils.getTime(),
      newX, newY,
      absDistX, absDistY;

    this.pointX   = point.pageX;
    this.pointY   = point.pageY;

    this.distX    += deltaX;
    this.distY    += deltaY;
    absDistX    = Math.abs(this.distX);
    absDistY    = Math.abs(this.distY);

    // We need to move at least 10 pixels for the scrolling to initiate
    if ( timestamp - this.endTime > 300 && (absDistX < 10 && absDistY < 10) ) {
      return;
    }

    // If you are scrolling in one direction lock the other
    if ( !this.directionLocked && !this.options.freeScroll ) {
      if ( absDistX > absDistY + this.options.directionLockThreshold ) {
        this.directionLocked = 'h';   // lock horizontally
      } else if ( absDistY >= absDistX + this.options.directionLockThreshold ) {
        this.directionLocked = 'v';   // lock vertically
      } else {
        this.directionLocked = 'n';   // no lock
      }
    }

    if ( this.directionLocked == 'h' ) {
      if ( this.options.eventPassthrough == 'vertical' ) {
        e.preventDefault();
      } else if ( this.options.eventPassthrough == 'horizontal' ) {
        this.initiated = false;
        return;
      }

      deltaY = 0;
    } else if ( this.directionLocked == 'v' ) {
      if ( this.options.eventPassthrough == 'horizontal' ) {
        e.preventDefault();
      } else if ( this.options.eventPassthrough == 'vertical' ) {
        this.initiated = false;
        return;
      }

      deltaX = 0;
    }

    deltaX = this.hasHorizontalScroll ? deltaX : 0;
    deltaY = this.hasVerticalScroll ? deltaY : 0;

    newX = this.x + deltaX;
    newY = this.y + deltaY;

    // Slow down if outside of the boundaries
    if ( newX > 0 || newX < this.maxScrollX ) {
      newX = this.options.bounce ? this.x + deltaX / 3 : newX > 0 ? 0 : this.maxScrollX;
    }
    if ( newY > 0 || newY < this.maxScrollY ) {
      newY = this.options.bounce ? this.y + deltaY / 3 : newY > 0 ? 0 : this.maxScrollY;
    }

    this.directionX = deltaX > 0 ? -1 : deltaX < 0 ? 1 : 0;
    this.directionY = deltaY > 0 ? -1 : deltaY < 0 ? 1 : 0;

    if ( !this.moved ) {
      this._execEvent('scrollStart');
    }

    this.moved = true;

    this._translate(newX, newY);

/* REPLACE START: _move */

    if ( timestamp - this.startTime > 300 ) {
      this.startTime = timestamp;
      this.startX = this.x;
      this.startY = this.y;
    }

/* REPLACE END: _move */

  },

  _end: function (e) {
    if ( !this.enabled || utils.eventType[e.type] !== this.initiated ) {
      return;
    }

    if ( this.options.preventDefault && !utils.preventDefaultException(e.target, this.options.preventDefaultException) ) {
      e.preventDefault();
    }

    var point = e.changedTouches ? e.changedTouches[0] : e,
      momentumX,
      momentumY,
      duration = utils.getTime() - this.startTime,
      newX = Math.round(this.x),
      newY = Math.round(this.y),
      distanceX = Math.abs(newX - this.startX),
      distanceY = Math.abs(newY - this.startY),
      time = 0,
      easing = '';

    this.isInTransition = 0;
    this.initiated = 0;
    this.endTime = utils.getTime();

    // reset if we are outside of the boundaries
    if ( this.resetPosition(this.options.bounceTime) ) {
      return;
    }

    this.scrollTo(newX, newY);  // ensures that the last position is rounded

    // we scrolled less than 10 pixels
    if ( !this.moved ) {
      if ( this.options.tap ) {
        utils.tap(e, this.options.tap);
      }

      if ( this.options.click ) {
        utils.click(e);
      }

      this._execEvent('scrollCancel');
      return;
    }

    if ( this._events.flick && duration < 200 && distanceX < 100 && distanceY < 100 ) {
      this._execEvent('flick');
      return;
    }

    // start momentum animation if needed
    if ( this.options.momentum && duration < 300 ) {
      momentumX = this.hasHorizontalScroll ? utils.momentum(this.x, this.startX, duration, this.maxScrollX, this.options.bounce ? this.wrapperWidth : 0, this.options.deceleration) : { destination: newX, duration: 0 };
      momentumY = this.hasVerticalScroll ? utils.momentum(this.y, this.startY, duration, this.maxScrollY, this.options.bounce ? this.wrapperHeight : 0, this.options.deceleration) : { destination: newY, duration: 0 };
      newX = momentumX.destination;
      newY = momentumY.destination;
      time = Math.max(momentumX.duration, momentumY.duration);
      this.isInTransition = 1;
    }


    if ( this.options.snap ) {
      var snap = this._nearestSnap(newX, newY);
      this.currentPage = snap;
      time = this.options.snapSpeed || Math.max(
          Math.max(
            Math.min(Math.abs(newX - snap.x), 1000),
            Math.min(Math.abs(newY - snap.y), 1000)
          ), 300);
      newX = snap.x;
      newY = snap.y;

      this.directionX = 0;
      this.directionY = 0;
      easing = this.options.bounceEasing;
    }

// INSERT POINT: _end

    if ( newX != this.x || newY != this.y ) {
      // change easing function when scroller goes out of the boundaries
      if ( newX > 0 || newX < this.maxScrollX || newY > 0 || newY < this.maxScrollY ) {
        easing = utils.ease.quadratic;
      }

      this.scrollTo(newX, newY, time, easing);
      return;
    }

    this._execEvent('scrollEnd');
  },

  _resize: function () {
    var that = this;

    clearTimeout(this.resizeTimeout);

    this.resizeTimeout = setTimeout(function () {
      that.refresh();
    }, this.options.resizePolling);
  },

  resetPosition: function (time) {
    var x = this.x,
      y = this.y;

    time = time || 0;

    if ( !this.hasHorizontalScroll || this.x > 0 ) {
      x = 0;
    } else if ( this.x < this.maxScrollX ) {
      x = this.maxScrollX;
    }

    if ( !this.hasVerticalScroll || this.y > 0 ) {
      y = 0;
    } else if ( this.y < this.maxScrollY ) {
      y = this.maxScrollY;
    }

    if ( x == this.x && y == this.y ) {
      return false;
    }

    this.scrollTo(x, y, time, this.options.bounceEasing);

    return true;
  },

  disable: function () {
    this.enabled = false;
  },

  enable: function () {
    this.enabled = true;
  },

  refresh: function () {
    var rf = this.wrapper.offsetHeight;   // Force reflow

    this.wrapperWidth = this.wrapper.clientWidth;
    this.wrapperHeight  = this.wrapper.clientHeight;

/* REPLACE START: refresh */

    this.scrollerWidth  = this.scroller.offsetWidth;
    this.scrollerHeight = this.scroller.offsetHeight;

    this.maxScrollX   = this.wrapperWidth - this.scrollerWidth;
    this.maxScrollY   = this.wrapperHeight - this.scrollerHeight;

/* REPLACE END: refresh */

    this.hasHorizontalScroll  = this.options.scrollX && this.maxScrollX < 0;
    this.hasVerticalScroll    = this.options.scrollY && this.maxScrollY < 0;

    if ( !this.hasHorizontalScroll ) {
      this.maxScrollX = 0;
      this.scrollerWidth = this.wrapperWidth;
    }

    if ( !this.hasVerticalScroll ) {
      this.maxScrollY = 0;
      this.scrollerHeight = this.wrapperHeight;
    }

    this.endTime = 0;
    this.directionX = 0;
    this.directionY = 0;

    this.wrapperOffset = utils.offset(this.wrapper);

    this._execEvent('refresh');

    this.resetPosition();

// INSERT POINT: _refresh

  },

  on: function (type, fn) {
    if ( !this._events[type] ) {
      this._events[type] = [];
    }

    this._events[type].push(fn);
  },

  off: function (type, fn) {
    if ( !this._events[type] ) {
      return;
    }

    var index = this._events[type].indexOf(fn);

    if ( index > -1 ) {
      this._events[type].splice(index, 1);
    }
  },

  _execEvent: function (type) {
    if ( !this._events[type] ) {
      return;
    }

    var i = 0,
      l = this._events[type].length;

    if ( !l ) {
      return;
    }

    for ( ; i < l; i++ ) {
      this._events[type][i].apply(this, [].slice.call(arguments, 1));
    }
  },

  scrollBy: function (x, y, time, easing) {
    x = this.x + x;
    y = this.y + y;
    time = time || 0;

    this.scrollTo(x, y, time, easing);
  },

  scrollTo: function (x, y, time, easing) {
    easing = easing || utils.ease.circular;

    this.isInTransition = this.options.useTransition && time > 0;

    if ( !time || (this.options.useTransition && easing.style) ) {
      this._transitionTimingFunction(easing.style);
      this._transitionTime(time);
      this._translate(x, y);
    } else {
      this._animate(x, y, time, easing.fn);
    }
  },

  scrollToElement: function (el, time, offsetX, offsetY, easing) {
    el = el.nodeType ? el : this.scroller.querySelector(el);

    if ( !el ) {
      return;
    }

    var pos = utils.offset(el);

    pos.left -= this.wrapperOffset.left;
    pos.top  -= this.wrapperOffset.top;

    // if offsetX/Y are true we center the element to the screen
    if ( offsetX === true ) {
      offsetX = Math.round(el.offsetWidth / 2 - this.wrapper.offsetWidth / 2);
    }
    if ( offsetY === true ) {
      offsetY = Math.round(el.offsetHeight / 2 - this.wrapper.offsetHeight / 2);
    }

    pos.left -= offsetX || 0;
    pos.top  -= offsetY || 0;

    pos.left = pos.left > 0 ? 0 : pos.left < this.maxScrollX ? this.maxScrollX : pos.left;
    pos.top  = pos.top  > 0 ? 0 : pos.top  < this.maxScrollY ? this.maxScrollY : pos.top;

    time = time === undefined || time === null || time === 'auto' ? Math.max(Math.abs(this.x-pos.left), Math.abs(this.y-pos.top)) : time;

    this.scrollTo(pos.left, pos.top, time, easing);
  },

  _transitionTime: function (time) {
    time = time || 0;

    this.scrollerStyle[utils.style.transitionDuration] = time + 'ms';

    if ( !time && utils.isBadAndroid ) {
      this.scrollerStyle[utils.style.transitionDuration] = '0.001s';
    }


    if ( this.indicators ) {
      for ( var i = this.indicators.length; i--; ) {
        this.indicators[i].transitionTime(time);
      }
    }


// INSERT POINT: _transitionTime

  },

  _transitionTimingFunction: function (easing) {
    this.scrollerStyle[utils.style.transitionTimingFunction] = easing;


    if ( this.indicators ) {
      for ( var i = this.indicators.length; i--; ) {
        this.indicators[i].transitionTimingFunction(easing);
      }
    }


// INSERT POINT: _transitionTimingFunction

  },

  _translate: function (x, y) {
    if ( this.options.useTransform ) {

/* REPLACE START: _translate */

      this.scrollerStyle[utils.style.transform] = 'translate(' + x + 'px,' + y + 'px)' + this.translateZ;

/* REPLACE END: _translate */

    } else {
      x = Math.round(x);
      y = Math.round(y);
      this.scrollerStyle.left = x + 'px';
      this.scrollerStyle.top = y + 'px';
    }

    this.x = x;
    this.y = y;


  if ( this.indicators ) {
    for ( var i = this.indicators.length; i--; ) {
      this.indicators[i].updatePosition();
    }
  }


// INSERT POINT: _translate

  },

  _initEvents: function (remove) {
    var eventType = remove ? utils.removeEvent : utils.addEvent,
      target = this.options.bindToWrapper ? this.wrapper : window;

    eventType(window, 'orientationchange', this);
    eventType(window, 'resize', this);

    if ( this.options.click ) {
      eventType(this.wrapper, 'click', this, true);
    }

    if ( !this.options.disableMouse ) {
      eventType(this.wrapper, 'mousedown', this);
      eventType(target, 'mousemove', this);
      eventType(target, 'mousecancel', this);
      eventType(target, 'mouseup', this);
    }

    if ( utils.hasPointer && !this.options.disablePointer ) {
      eventType(this.wrapper, utils.prefixPointerEvent('pointerdown'), this);
      eventType(target, utils.prefixPointerEvent('pointermove'), this);
      eventType(target, utils.prefixPointerEvent('pointercancel'), this);
      eventType(target, utils.prefixPointerEvent('pointerup'), this);
    }

    if ( utils.hasTouch && !this.options.disableTouch ) {
      eventType(this.wrapper, 'touchstart', this);
      eventType(target, 'touchmove', this);
      eventType(target, 'touchcancel', this);
      eventType(target, 'touchend', this);
    }

    eventType(this.scroller, 'transitionend', this);
    eventType(this.scroller, 'webkitTransitionEnd', this);
    eventType(this.scroller, 'oTransitionEnd', this);
    eventType(this.scroller, 'MSTransitionEnd', this);
  },

  getComputedPosition: function () {
    var matrix = window.getComputedStyle(this.scroller, null),
      x, y;

    if ( this.options.useTransform ) {
      matrix = matrix[utils.style.transform].split(')')[0].split(', ');
      x = +(matrix[12] || matrix[4]);
      y = +(matrix[13] || matrix[5]);
    } else {
      x = +matrix.left.replace(/[^-\d.]/g, '');
      y = +matrix.top.replace(/[^-\d.]/g, '');
    }

    return { x: x, y: y };
  },

  _initIndicators: function () {
    var interactive = this.options.interactiveScrollbars,
      customStyle = typeof this.options.scrollbars != 'string',
      indicators = [],
      indicator;

    var that = this;

    this.indicators = [];

    if ( this.options.scrollbars ) {
      // Vertical scrollbar
      if ( this.options.scrollY ) {
        indicator = {
          el: createDefaultScrollbar('v', interactive, this.options.scrollbars),
          interactive: interactive,
          defaultScrollbars: true,
          customStyle: customStyle,
          resize: this.options.resizeScrollbars,
          shrink: this.options.shrinkScrollbars,
          fade: this.options.fadeScrollbars,
          listenX: false
        };

        this.wrapper.appendChild(indicator.el);
        indicators.push(indicator);
      }

      // Horizontal scrollbar
      if ( this.options.scrollX ) {
        indicator = {
          el: createDefaultScrollbar('h', interactive, this.options.scrollbars),
          interactive: interactive,
          defaultScrollbars: true,
          customStyle: customStyle,
          resize: this.options.resizeScrollbars,
          shrink: this.options.shrinkScrollbars,
          fade: this.options.fadeScrollbars,
          listenY: false
        };

        this.wrapper.appendChild(indicator.el);
        indicators.push(indicator);
      }
    }

    if ( this.options.indicators ) {
      // TODO: check concat compatibility
      indicators = indicators.concat(this.options.indicators);
    }

    for ( var i = indicators.length; i--; ) {
      this.indicators.push( new Indicator(this, indicators[i]) );
    }

    // TODO: check if we can use array.map (wide compatibility and performance issues)
    function _indicatorsMap (fn) {
      for ( var i = that.indicators.length; i--; ) {
        fn.call(that.indicators[i]);
      }
    }

    if ( this.options.fadeScrollbars ) {
      this.on('scrollEnd', function () {
        _indicatorsMap(function () {
          this.fade();
        });
      });

      this.on('scrollCancel', function () {
        _indicatorsMap(function () {
          this.fade();
        });
      });

      this.on('scrollStart', function () {
        _indicatorsMap(function () {
          this.fade(1);
        });
      });

      this.on('beforeScrollStart', function () {
        _indicatorsMap(function () {
          this.fade(1, true);
        });
      });
    }


    this.on('refresh', function () {
      _indicatorsMap(function () {
        this.refresh();
      });
    });

    this.on('destroy', function () {
      _indicatorsMap(function () {
        this.destroy();
      });

      delete this.indicators;
    });
  },

  _initWheel: function () {
    utils.addEvent(this.wrapper, 'wheel', this);
    utils.addEvent(this.wrapper, 'mousewheel', this);
    utils.addEvent(this.wrapper, 'DOMMouseScroll', this);

    this.on('destroy', function () {
      utils.removeEvent(this.wrapper, 'wheel', this);
      utils.removeEvent(this.wrapper, 'mousewheel', this);
      utils.removeEvent(this.wrapper, 'DOMMouseScroll', this);
    });
  },

  _wheel: function (e) {
    if ( !this.enabled ) {
      return;
    }

    e.preventDefault();
    e.stopPropagation();

    var wheelDeltaX, wheelDeltaY,
      newX, newY,
      that = this;

    if ( this.wheelTimeout === undefined ) {
      that._execEvent('scrollStart');
    }

    // Execute the scrollEnd event after 400ms the wheel stopped scrolling
    clearTimeout(this.wheelTimeout);
    this.wheelTimeout = setTimeout(function () {
      that._execEvent('scrollEnd');
      that.wheelTimeout = undefined;
    }, 400);

    if ( 'deltaX' in e ) {
      wheelDeltaX = -e.deltaX;
      wheelDeltaY = -e.deltaY;
    } else if ( 'wheelDeltaX' in e ) {
      wheelDeltaX = e.wheelDeltaX / 120 * this.options.mouseWheelSpeed;
      wheelDeltaY = e.wheelDeltaY / 120 * this.options.mouseWheelSpeed;
    } else if ( 'wheelDelta' in e ) {
      wheelDeltaX = wheelDeltaY = e.wheelDelta / 120 * this.options.mouseWheelSpeed;
    } else if ( 'detail' in e ) {
      wheelDeltaX = wheelDeltaY = -e.detail / 3 * this.options.mouseWheelSpeed;
    } else {
      return;
    }

    wheelDeltaX *= this.options.invertWheelDirection;
    wheelDeltaY *= this.options.invertWheelDirection;

    if ( !this.hasVerticalScroll ) {
      wheelDeltaX = wheelDeltaY;
      wheelDeltaY = 0;
    }

    if ( this.options.snap ) {
      newX = this.currentPage.pageX;
      newY = this.currentPage.pageY;

      if ( wheelDeltaX > 0 ) {
        newX--;
      } else if ( wheelDeltaX < 0 ) {
        newX++;
      }

      if ( wheelDeltaY > 0 ) {
        newY--;
      } else if ( wheelDeltaY < 0 ) {
        newY++;
      }

      this.goToPage(newX, newY);

      return;
    }

    newX = this.x + Math.round(this.hasHorizontalScroll ? wheelDeltaX : 0);
    newY = this.y + Math.round(this.hasVerticalScroll ? wheelDeltaY : 0);

    if ( newX > 0 ) {
      newX = 0;
    } else if ( newX < this.maxScrollX ) {
      newX = this.maxScrollX;
    }

    if ( newY > 0 ) {
      newY = 0;
    } else if ( newY < this.maxScrollY ) {
      newY = this.maxScrollY;
    }

    this.scrollTo(newX, newY, 0);

// INSERT POINT: _wheel
  },

  _initSnap: function () {
    this.currentPage = {};

    if ( typeof this.options.snap == 'string' ) {
      this.options.snap = this.scroller.querySelectorAll(this.options.snap);
    }

    this.on('refresh', function () {
      var i = 0, l,
        m = 0, n,
        cx, cy,
        x = 0, y,
        stepX = this.options.snapStepX || this.wrapperWidth,
        stepY = this.options.snapStepY || this.wrapperHeight,
        el;

      this.pages = [];

      if ( !this.wrapperWidth || !this.wrapperHeight || !this.scrollerWidth || !this.scrollerHeight ) {
        return;
      }

      if ( this.options.snap === true ) {
        cx = Math.round( stepX / 2 );
        cy = Math.round( stepY / 2 );

        while ( x > -this.scrollerWidth ) {
          this.pages[i] = [];
          l = 0;
          y = 0;

          while ( y > -this.scrollerHeight ) {
            this.pages[i][l] = {
              x: Math.max(x, this.maxScrollX),
              y: Math.max(y, this.maxScrollY),
              width: stepX,
              height: stepY,
              cx: x - cx,
              cy: y - cy
            };

            y -= stepY;
            l++;
          }

          x -= stepX;
          i++;
        }
      } else {
        el = this.options.snap;
        l = el.length;
        n = -1;

        for ( ; i < l; i++ ) {
          if ( i === 0 || el[i].offsetLeft <= el[i-1].offsetLeft ) {
            m = 0;
            n++;
          }

          if ( !this.pages[m] ) {
            this.pages[m] = [];
          }

          x = Math.max(-el[i].offsetLeft, this.maxScrollX);
          y = Math.max(-el[i].offsetTop, this.maxScrollY);
          cx = x - Math.round(el[i].offsetWidth / 2);
          cy = y - Math.round(el[i].offsetHeight / 2);

          this.pages[m][n] = {
            x: x,
            y: y,
            width: el[i].offsetWidth,
            height: el[i].offsetHeight,
            cx: cx,
            cy: cy
          };

          if ( x > this.maxScrollX ) {
            m++;
          }
        }
      }

      this.goToPage(this.currentPage.pageX || 0, this.currentPage.pageY || 0, 0);

      // Update snap threshold if needed
      if ( this.options.snapThreshold % 1 === 0 ) {
        this.snapThresholdX = this.options.snapThreshold;
        this.snapThresholdY = this.options.snapThreshold;
      } else {
        this.snapThresholdX = Math.round(this.pages[this.currentPage.pageX][this.currentPage.pageY].width * this.options.snapThreshold);
        this.snapThresholdY = Math.round(this.pages[this.currentPage.pageX][this.currentPage.pageY].height * this.options.snapThreshold);
      }
    });

    this.on('flick', function () {
      var time = this.options.snapSpeed || Math.max(
          Math.max(
            Math.min(Math.abs(this.x - this.startX), 1000),
            Math.min(Math.abs(this.y - this.startY), 1000)
          ), 300);

      this.goToPage(
        this.currentPage.pageX + this.directionX,
        this.currentPage.pageY + this.directionY,
        time
      );
    });
  },

  _nearestSnap: function (x, y) {
    if ( !this.pages.length ) {
      return { x: 0, y: 0, pageX: 0, pageY: 0 };
    }

    var i = 0,
      l = this.pages.length,
      m = 0;

    // Check if we exceeded the snap threshold
    if ( Math.abs(x - this.absStartX) < this.snapThresholdX &&
      Math.abs(y - this.absStartY) < this.snapThresholdY ) {
      return this.currentPage;
    }

    if ( x > 0 ) {
      x = 0;
    } else if ( x < this.maxScrollX ) {
      x = this.maxScrollX;
    }

    if ( y > 0 ) {
      y = 0;
    } else if ( y < this.maxScrollY ) {
      y = this.maxScrollY;
    }

    for ( ; i < l; i++ ) {
      if ( x >= this.pages[i][0].cx ) {
        x = this.pages[i][0].x;
        break;
      }
    }

    l = this.pages[i].length;

    for ( ; m < l; m++ ) {
      if ( y >= this.pages[0][m].cy ) {
        y = this.pages[0][m].y;
        break;
      }
    }

    if ( i == this.currentPage.pageX ) {
      i += this.directionX;

      if ( i < 0 ) {
        i = 0;
      } else if ( i >= this.pages.length ) {
        i = this.pages.length - 1;
      }

      x = this.pages[i][0].x;
    }

    if ( m == this.currentPage.pageY ) {
      m += this.directionY;

      if ( m < 0 ) {
        m = 0;
      } else if ( m >= this.pages[0].length ) {
        m = this.pages[0].length - 1;
      }

      y = this.pages[0][m].y;
    }

    return {
      x: x,
      y: y,
      pageX: i,
      pageY: m
    };
  },

  goToPage: function (x, y, time, easing) {
    easing = easing || this.options.bounceEasing;

    if ( x >= this.pages.length ) {
      x = this.pages.length - 1;
    } else if ( x < 0 ) {
      x = 0;
    }

    if ( y >= this.pages[x].length ) {
      y = this.pages[x].length - 1;
    } else if ( y < 0 ) {
      y = 0;
    }

    var posX = this.pages[x][y].x,
      posY = this.pages[x][y].y;

    time = time === undefined ? this.options.snapSpeed || Math.max(
      Math.max(
        Math.min(Math.abs(posX - this.x), 1000),
        Math.min(Math.abs(posY - this.y), 1000)
      ), 300) : time;

    this.currentPage = {
      x: posX,
      y: posY,
      pageX: x,
      pageY: y
    };

    this.scrollTo(posX, posY, time, easing);
  },

  next: function (time, easing) {
    var x = this.currentPage.pageX,
      y = this.currentPage.pageY;

    x++;

    if ( x >= this.pages.length && this.hasVerticalScroll ) {
      x = 0;
      y++;
    }

    this.goToPage(x, y, time, easing);
  },

  prev: function (time, easing) {
    var x = this.currentPage.pageX,
      y = this.currentPage.pageY;

    x--;

    if ( x < 0 && this.hasVerticalScroll ) {
      x = 0;
      y--;
    }

    this.goToPage(x, y, time, easing);
  },

  _initKeys: function (e) {
    // default key bindings
    var keys = {
      pageUp: 33,
      pageDown: 34,
      end: 35,
      home: 36,
      left: 37,
      up: 38,
      right: 39,
      down: 40
    };
    var i;

    // if you give me characters I give you keycode
    if ( typeof this.options.keyBindings == 'object' ) {
      for ( i in this.options.keyBindings ) {
        if ( typeof this.options.keyBindings[i] == 'string' ) {
          this.options.keyBindings[i] = this.options.keyBindings[i].toUpperCase().charCodeAt(0);
        }
      }
    } else {
      this.options.keyBindings = {};
    }

    for ( i in keys ) {
      this.options.keyBindings[i] = this.options.keyBindings[i] || keys[i];
    }

    utils.addEvent(window, 'keydown', this);

    this.on('destroy', function () {
      utils.removeEvent(window, 'keydown', this);
    });
  },

  _key: function (e) {
    if ( !this.enabled ) {
      return;
    }

    var snap = this.options.snap, // we are using this alot, better to cache it
      newX = snap ? this.currentPage.pageX : this.x,
      newY = snap ? this.currentPage.pageY : this.y,
      now = utils.getTime(),
      prevTime = this.keyTime || 0,
      acceleration = 0.250,
      pos;

    if ( this.options.useTransition && this.isInTransition ) {
      pos = this.getComputedPosition();

      this._translate(Math.round(pos.x), Math.round(pos.y));
      this.isInTransition = false;
    }

    this.keyAcceleration = now - prevTime < 200 ? Math.min(this.keyAcceleration + acceleration, 50) : 0;

    switch ( e.keyCode ) {
      case this.options.keyBindings.pageUp:
        if ( this.hasHorizontalScroll && !this.hasVerticalScroll ) {
          newX += snap ? 1 : this.wrapperWidth;
        } else {
          newY += snap ? 1 : this.wrapperHeight;
        }
        break;
      case this.options.keyBindings.pageDown:
        if ( this.hasHorizontalScroll && !this.hasVerticalScroll ) {
          newX -= snap ? 1 : this.wrapperWidth;
        } else {
          newY -= snap ? 1 : this.wrapperHeight;
        }
        break;
      case this.options.keyBindings.end:
        newX = snap ? this.pages.length-1 : this.maxScrollX;
        newY = snap ? this.pages[0].length-1 : this.maxScrollY;
        break;
      case this.options.keyBindings.home:
        newX = 0;
        newY = 0;
        break;
      case this.options.keyBindings.left:
        newX += snap ? -1 : 5 + this.keyAcceleration>>0;
        break;
      case this.options.keyBindings.up:
        newY += snap ? 1 : 5 + this.keyAcceleration>>0;
        break;
      case this.options.keyBindings.right:
        newX -= snap ? -1 : 5 + this.keyAcceleration>>0;
        break;
      case this.options.keyBindings.down:
        newY -= snap ? 1 : 5 + this.keyAcceleration>>0;
        break;
      default:
        return;
    }

    if ( snap ) {
      this.goToPage(newX, newY);
      return;
    }

    if ( newX > 0 ) {
      newX = 0;
      this.keyAcceleration = 0;
    } else if ( newX < this.maxScrollX ) {
      newX = this.maxScrollX;
      this.keyAcceleration = 0;
    }

    if ( newY > 0 ) {
      newY = 0;
      this.keyAcceleration = 0;
    } else if ( newY < this.maxScrollY ) {
      newY = this.maxScrollY;
      this.keyAcceleration = 0;
    }

    this.scrollTo(newX, newY, 0);

    this.keyTime = now;
  },

  _animate: function (destX, destY, duration, easingFn) {
    var that = this,
      startX = this.x,
      startY = this.y,
      startTime = utils.getTime(),
      destTime = startTime + duration;

    function step () {
      var now = utils.getTime(),
        newX, newY,
        easing;

      if ( now >= destTime ) {
        that.isAnimating = false;
        that._translate(destX, destY);

        if ( !that.resetPosition(that.options.bounceTime) ) {
          that._execEvent('scrollEnd');
        }

        return;
      }

      now = ( now - startTime ) / duration;
      easing = easingFn(now);
      newX = ( destX - startX ) * easing + startX;
      newY = ( destY - startY ) * easing + startY;
      that._translate(newX, newY);

      if ( that.isAnimating ) {
        rAF(step);
      }
    }

    this.isAnimating = true;
    step();
  },
  handleEvent: function (e) {
    switch ( e.type ) {
      case 'touchstart':
      case 'pointerdown':
      case 'MSPointerDown':
      case 'mousedown':
        this._start(e);
        break;
      case 'touchmove':
      case 'pointermove':
      case 'MSPointerMove':
      case 'mousemove':
        this._move(e);
        break;
      case 'touchend':
      case 'pointerup':
      case 'MSPointerUp':
      case 'mouseup':
      case 'touchcancel':
      case 'pointercancel':
      case 'MSPointerCancel':
      case 'mousecancel':
        this._end(e);
        break;
      case 'orientationchange':
      case 'resize':
        this._resize();
        break;
      case 'transitionend':
      case 'webkitTransitionEnd':
      case 'oTransitionEnd':
      case 'MSTransitionEnd':
        this._transitionEnd(e);
        break;
      case 'wheel':
      case 'DOMMouseScroll':
      case 'mousewheel':
        this._wheel(e);
        break;
      case 'keydown':
        this._key(e);
        break;
      case 'click':
        if ( !e._constructed ) {
          e.preventDefault();
          e.stopPropagation();
        }
        break;
    }
  }
};
function createDefaultScrollbar (direction, interactive, type) {
  var scrollbar = document.createElement('div'),
    indicator = document.createElement('div');

  if ( type === true ) {
    scrollbar.style.cssText = 'position:absolute;z-index:9999';
    indicator.style.cssText = '-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:absolute;background:rgba(0,0,0,0.5);border:1px solid rgba(255,255,255,0.9);border-radius:3px';
  }

  indicator.className = 'iScrollIndicator';

  if ( direction == 'h' ) {
    if ( type === true ) {
      scrollbar.style.cssText += ';height:7px;left:2px;right:2px;bottom:0';
      indicator.style.height = '100%';
    }
    scrollbar.className = 'iScrollHorizontalScrollbar';
  } else {
    if ( type === true ) {
      scrollbar.style.cssText += ';width:7px;bottom:2px;top:2px;right:1px';
      indicator.style.width = '100%';
    }
    scrollbar.className = 'iScrollVerticalScrollbar';
  }

  scrollbar.style.cssText += ';overflow:hidden';

  if ( !interactive ) {
    scrollbar.style.pointerEvents = 'none';
  }

  scrollbar.appendChild(indicator);

  return scrollbar;
}

function Indicator (scroller, options) {
  this.wrapper = typeof options.el == 'string' ? document.querySelector(options.el) : options.el;
  this.wrapperStyle = this.wrapper.style;
  this.indicator = this.wrapper.children[0];
  this.indicatorStyle = this.indicator.style;
  this.scroller = scroller;

  this.options = {
    listenX: true,
    listenY: true,
    interactive: false,
    resize: true,
    defaultScrollbars: false,
    shrink: false,
    fade: false,
    speedRatioX: 0,
    speedRatioY: 0
  };

  for ( var i in options ) {
    this.options[i] = options[i];
  }

  this.sizeRatioX = 1;
  this.sizeRatioY = 1;
  this.maxPosX = 0;
  this.maxPosY = 0;

  if ( this.options.interactive ) {
    if ( !this.options.disableTouch ) {
      utils.addEvent(this.indicator, 'touchstart', this);
      utils.addEvent(window, 'touchend', this);
    }
    if ( !this.options.disablePointer ) {
      utils.addEvent(this.indicator, utils.prefixPointerEvent('pointerdown'), this);
      utils.addEvent(window, utils.prefixPointerEvent('pointerup'), this);
    }
    if ( !this.options.disableMouse ) {
      utils.addEvent(this.indicator, 'mousedown', this);
      utils.addEvent(window, 'mouseup', this);
    }
  }

  if ( this.options.fade ) {
    this.wrapperStyle[utils.style.transform] = this.scroller.translateZ;
    this.wrapperStyle[utils.style.transitionDuration] = utils.isBadAndroid ? '0.001s' : '0ms';
    this.wrapperStyle.opacity = '0';
  }
}

Indicator.prototype = {
  handleEvent: function (e) {
    switch ( e.type ) {
      case 'touchstart':
      case 'pointerdown':
      case 'MSPointerDown':
      case 'mousedown':
        this._start(e);
        break;
      case 'touchmove':
      case 'pointermove':
      case 'MSPointerMove':
      case 'mousemove':
        this._move(e);
        break;
      case 'touchend':
      case 'pointerup':
      case 'MSPointerUp':
      case 'mouseup':
      case 'touchcancel':
      case 'pointercancel':
      case 'MSPointerCancel':
      case 'mousecancel':
        this._end(e);
        break;
    }
  },

  destroy: function () {
    if ( this.options.interactive ) {
      utils.removeEvent(this.indicator, 'touchstart', this);
      utils.removeEvent(this.indicator, utils.prefixPointerEvent('pointerdown'), this);
      utils.removeEvent(this.indicator, 'mousedown', this);

      utils.removeEvent(window, 'touchmove', this);
      utils.removeEvent(window, utils.prefixPointerEvent('pointermove'), this);
      utils.removeEvent(window, 'mousemove', this);

      utils.removeEvent(window, 'touchend', this);
      utils.removeEvent(window, utils.prefixPointerEvent('pointerup'), this);
      utils.removeEvent(window, 'mouseup', this);
    }

    if ( this.options.defaultScrollbars ) {
      this.wrapper.parentNode.removeChild(this.wrapper);
    }
  },

  _start: function (e) {
    var point = e.touches ? e.touches[0] : e;

    e.preventDefault();
    e.stopPropagation();

    this.transitionTime();

    this.initiated = true;
    this.moved = false;
    this.lastPointX = point.pageX;
    this.lastPointY = point.pageY;

    this.startTime  = utils.getTime();

    if ( !this.options.disableTouch ) {
      utils.addEvent(window, 'touchmove', this);
    }
    if ( !this.options.disablePointer ) {
      utils.addEvent(window, utils.prefixPointerEvent('pointermove'), this);
    }
    if ( !this.options.disableMouse ) {
      utils.addEvent(window, 'mousemove', this);
    }

    this.scroller._execEvent('beforeScrollStart');
  },

  _move: function (e) {
    var point = e.touches ? e.touches[0] : e,
      deltaX, deltaY,
      newX, newY,
      timestamp = utils.getTime();

    if ( !this.moved ) {
      this.scroller._execEvent('scrollStart');
    }

    this.moved = true;

    deltaX = point.pageX - this.lastPointX;
    this.lastPointX = point.pageX;

    deltaY = point.pageY - this.lastPointY;
    this.lastPointY = point.pageY;

    newX = this.x + deltaX;
    newY = this.y + deltaY;

    this._pos(newX, newY);

// INSERT POINT: indicator._move

    e.preventDefault();
    e.stopPropagation();
  },

  _end: function (e) {
    if ( !this.initiated ) {
      return;
    }

    this.initiated = false;

    e.preventDefault();
    e.stopPropagation();

    utils.removeEvent(window, 'touchmove', this);
    utils.removeEvent(window, utils.prefixPointerEvent('pointermove'), this);
    utils.removeEvent(window, 'mousemove', this);

    if ( this.scroller.options.snap ) {
      var snap = this.scroller._nearestSnap(this.scroller.x, this.scroller.y);

      var time = this.options.snapSpeed || Math.max(
          Math.max(
            Math.min(Math.abs(this.scroller.x - snap.x), 1000),
            Math.min(Math.abs(this.scroller.y - snap.y), 1000)
          ), 300);

      if ( this.scroller.x != snap.x || this.scroller.y != snap.y ) {
        this.scroller.directionX = 0;
        this.scroller.directionY = 0;
        this.scroller.currentPage = snap;
        this.scroller.scrollTo(snap.x, snap.y, time, this.scroller.options.bounceEasing);
      }
    }

    if ( this.moved ) {
      this.scroller._execEvent('scrollEnd');
    }
  },

  transitionTime: function (time) {
    time = time || 0;
    this.indicatorStyle[utils.style.transitionDuration] = time + 'ms';

    if ( !time && utils.isBadAndroid ) {
      this.indicatorStyle[utils.style.transitionDuration] = '0.001s';
    }
  },

  transitionTimingFunction: function (easing) {
    this.indicatorStyle[utils.style.transitionTimingFunction] = easing;
  },

  refresh: function () {
    this.transitionTime();

    if ( this.options.listenX && !this.options.listenY ) {
      this.indicatorStyle.display = this.scroller.hasHorizontalScroll ? 'block' : 'none';
    } else if ( this.options.listenY && !this.options.listenX ) {
      this.indicatorStyle.display = this.scroller.hasVerticalScroll ? 'block' : 'none';
    } else {
      this.indicatorStyle.display = this.scroller.hasHorizontalScroll || this.scroller.hasVerticalScroll ? 'block' : 'none';
    }

    if ( this.scroller.hasHorizontalScroll && this.scroller.hasVerticalScroll ) {
      utils.addClass(this.wrapper, 'iScrollBothScrollbars');
      utils.removeClass(this.wrapper, 'iScrollLoneScrollbar');

      if ( this.options.defaultScrollbars && this.options.customStyle ) {
        if ( this.options.listenX ) {
          this.wrapper.style.right = '8px';
        } else {
          this.wrapper.style.bottom = '8px';
        }
      }
    } else {
      utils.removeClass(this.wrapper, 'iScrollBothScrollbars');
      utils.addClass(this.wrapper, 'iScrollLoneScrollbar');

      if ( this.options.defaultScrollbars && this.options.customStyle ) {
        if ( this.options.listenX ) {
          this.wrapper.style.right = '2px';
        } else {
          this.wrapper.style.bottom = '2px';
        }
      }
    }

    var r = this.wrapper.offsetHeight;  // force refresh

    if ( this.options.listenX ) {
      this.wrapperWidth = this.wrapper.clientWidth;
      if ( this.options.resize ) {
        this.indicatorWidth = Math.max(Math.round(this.wrapperWidth * this.wrapperWidth / (this.scroller.scrollerWidth || this.wrapperWidth || 1)), 8);
        this.indicatorStyle.width = this.indicatorWidth + 'px';
      } else {
        this.indicatorWidth = this.indicator.clientWidth;
      }

      this.maxPosX = this.wrapperWidth - this.indicatorWidth;

      if ( this.options.shrink == 'clip' ) {
        this.minBoundaryX = -this.indicatorWidth + 8;
        this.maxBoundaryX = this.wrapperWidth - 8;
      } else {
        this.minBoundaryX = 0;
        this.maxBoundaryX = this.maxPosX;
      }

      this.sizeRatioX = this.options.speedRatioX || (this.scroller.maxScrollX && (this.maxPosX / this.scroller.maxScrollX));
    }

    if ( this.options.listenY ) {
      this.wrapperHeight = this.wrapper.clientHeight;
      if ( this.options.resize ) {
        this.indicatorHeight = Math.max(Math.round(this.wrapperHeight * this.wrapperHeight / (this.scroller.scrollerHeight || this.wrapperHeight || 1)), 8);
        this.indicatorStyle.height = this.indicatorHeight + 'px';
      } else {
        this.indicatorHeight = this.indicator.clientHeight;
      }

      this.maxPosY = this.wrapperHeight - this.indicatorHeight;

      if ( this.options.shrink == 'clip' ) {
        this.minBoundaryY = -this.indicatorHeight + 8;
        this.maxBoundaryY = this.wrapperHeight - 8;
      } else {
        this.minBoundaryY = 0;
        this.maxBoundaryY = this.maxPosY;
      }

      this.maxPosY = this.wrapperHeight - this.indicatorHeight;
      this.sizeRatioY = this.options.speedRatioY || (this.scroller.maxScrollY && (this.maxPosY / this.scroller.maxScrollY));
    }

    this.updatePosition();
  },

  updatePosition: function () {
    var x = this.options.listenX && Math.round(this.sizeRatioX * this.scroller.x) || 0,
      y = this.options.listenY && Math.round(this.sizeRatioY * this.scroller.y) || 0;

    if ( !this.options.ignoreBoundaries ) {
      if ( x < this.minBoundaryX ) {
        if ( this.options.shrink == 'scale' ) {
          this.width = Math.max(this.indicatorWidth + x, 8);
          this.indicatorStyle.width = this.width + 'px';
        }
        x = this.minBoundaryX;
      } else if ( x > this.maxBoundaryX ) {
        if ( this.options.shrink == 'scale' ) {
          this.width = Math.max(this.indicatorWidth - (x - this.maxPosX), 8);
          this.indicatorStyle.width = this.width + 'px';
          x = this.maxPosX + this.indicatorWidth - this.width;
        } else {
          x = this.maxBoundaryX;
        }
      } else if ( this.options.shrink == 'scale' && this.width != this.indicatorWidth ) {
        this.width = this.indicatorWidth;
        this.indicatorStyle.width = this.width + 'px';
      }

      if ( y < this.minBoundaryY ) {
        if ( this.options.shrink == 'scale' ) {
          this.height = Math.max(this.indicatorHeight + y * 3, 8);
          this.indicatorStyle.height = this.height + 'px';
        }
        y = this.minBoundaryY;
      } else if ( y > this.maxBoundaryY ) {
        if ( this.options.shrink == 'scale' ) {
          this.height = Math.max(this.indicatorHeight - (y - this.maxPosY) * 3, 8);
          this.indicatorStyle.height = this.height + 'px';
          y = this.maxPosY + this.indicatorHeight - this.height;
        } else {
          y = this.maxBoundaryY;
        }
      } else if ( this.options.shrink == 'scale' && this.height != this.indicatorHeight ) {
        this.height = this.indicatorHeight;
        this.indicatorStyle.height = this.height + 'px';
      }
    }

    this.x = x;
    this.y = y;

    if ( this.scroller.options.useTransform ) {
      this.indicatorStyle[utils.style.transform] = 'translate(' + x + 'px,' + y + 'px)' + this.scroller.translateZ;
    } else {
      this.indicatorStyle.left = x + 'px';
      this.indicatorStyle.top = y + 'px';
    }
  },

  _pos: function (x, y) {
    if ( x < 0 ) {
      x = 0;
    } else if ( x > this.maxPosX ) {
      x = this.maxPosX;
    }

    if ( y < 0 ) {
      y = 0;
    } else if ( y > this.maxPosY ) {
      y = this.maxPosY;
    }

    x = this.options.listenX ? Math.round(x / this.sizeRatioX) : this.scroller.x;
    y = this.options.listenY ? Math.round(y / this.sizeRatioY) : this.scroller.y;

    this.scroller.scrollTo(x, y);
  },

  fade: function (val, hold) {
    if ( hold && !this.visible ) {
      return;
    }

    clearTimeout(this.fadeTimeout);
    this.fadeTimeout = null;

    var time = val ? 250 : 500,
      delay = val ? 0 : 300;

    val = val ? '1' : '0';

    this.wrapperStyle[utils.style.transitionDuration] = time + 'ms';

    this.fadeTimeout = setTimeout((function (val) {
      this.wrapperStyle.opacity = val;
      this.visible = +val;
    }).bind(this, val), delay);
  }
};

IScroll.utils = utils;

if ( typeof module != 'undefined' && module.exports ) {
  module.exports = IScroll;
} else {
  window.IScroll = IScroll;
}

})(window, document, Math);

/*点击展开大图js*/

window.Swipe = function(element, options) {

    // return immediately if element doesn't exist
    if (!element) return null;

    var _this = this;

    // retreive options
    this.options = options || {};
    this.index = this.options.startSlide || 0;
    this.speed = this.options.speed || 300;
    this.callback = this.options.callback || function() {};
    this.delay = this.options.auto || 0;
    this.nav = this.options.nav || "";

    // reference dom elements
    this.container = element;
    this.element = this.container.children[0]; // the slide pane

    // static css
    this.container.style.overflow = 'hidden';
    this.element.style.listStyle = 'none';
    this.element.style.margin = 0;

    // trigger slider initialization
    this.setup();

    // begin auto slideshow
    this.begin();

    // add event listeners
    if (this.element.addEventListener) {
        this.element.addEventListener('touchstart', this, false);
        this.element.addEventListener('touchmove', this, false);
        this.element.addEventListener('touchend', this, false);
        this.element.addEventListener('touchcancel', this, false);
        this.element.addEventListener('webkitTransitionEnd', this, false);
        this.element.addEventListener('msTransitionEnd', this, false);
        this.element.addEventListener('oTransitionEnd', this, false);
        this.element.addEventListener('transitionend', this, false);
        window.addEventListener('resize', this, false);
    }

};

Swipe.prototype = {

    setup: function() {
        var html = "";
        // get and measure amt of slides
        this.slides = this.element.children;
        this.length = this.slides.length;

        // return immediately if their are less than two slides
        if (this.length < 2) return null;
        // determine width of each slide
        this.width = Math.ceil(("getBoundingClientRect" in this.container) ? this.container.getBoundingClientRect().width : this.container.offsetWidth);

        // return immediately if measurement fails
        if (!this.width) this.width = document.body.clientWidth;

        // hide slider element but keep positioning during setup
        this.container.style.visibility = 'hidden';

        if(this.nav != ""){
            for(var i = 0; i< this.length; i++){
                html+='<span class="item"></span>'
            }
            this.nav.innerHTML = html;
        }
        // dynamic css
        this.element.style.width = Math.ceil(this.slides.length * this.width) + 'px';
        var index = this.slides.length;
        while (index--) {
            var el = this.slides[index];
            el.style.width = this.width + 'px';
            el.style.display = 'table-cell';
            el.style.verticalAlign = 'top';
        }

        // set start position and force translate to remove initial flickering
        this.slide(this.index, 0);

        // show slider element
        this.container.style.visibility = 'visible';

    },

    slide: function(index, duration) {

        var style = this.element.style;

        // fallback to default speed
        if (duration == undefined) {
            duration = this.speed;
        }

        // set duration speed (0 represents 1-to-1 scrolling)
        style.webkitTransitionDuration = style.MozTransitionDuration = style.msTransitionDuration = style.OTransitionDuration = style.transitionDuration = duration + 'ms';

        // translate to given index position
        style.MozTransform = style.webkitTransform = 'translate3d(' + -(index * this.width) + 'px,0,0)';
        style.msTransform = style.OTransform = 'translateX(' + -(index * this.width) + 'px)';

        //document.
        // set new index to allow for expression arguments
//        if(index === this.length){
//            this.index = 0;
//            style.webkitTransitionDuration = style.MozTransitionDuration = style.msTransitionDuration = style.OTransitionDuration = style.transitionDuration = '0ms';
//            style.MozTransform = style.webkitTransform = 'translate3d(0px,0,0)';
//            style.msTransform = style.OTransform = 'translateX(0px)';
//        }else{
//            style.webkitTransitionDuration = style.MozTransitionDuration = style.msTransitionDuration = style.OTransitionDuration = style.transitionDuration = duration +'ms';
//
//        }
        if(this.nav != ""){

            for(var i = 0, len = this.length; i < len; i++){
                this.nav.children[i].className = "";
            }
            this.nav.children[index].className = "curr";
        }
        this.index = index;
    },

    getPos: function() {

        // return current index position
        return this.index;

    },

    prev: function(delay) {

        // cancel next scheduled automatic transition, if any
        this.delay = delay || 0;
        clearTimeout(this.interval);

        // if not at first slide
        if (this.index) this.slide(this.index-1, this.speed);

    },

    next: function(delay) {

        // cancel next scheduled automatic transition, if any
        this.delay = delay || 0;
        clearTimeout(this.interval);

        if (this.index < this.length - 1) {
            this.slide(this.index+1, this.speed);
        } // if not last slide
        else {
            this.slide(0, this.speed);
        } //if last slide return to start，这一行注释，是让PC端和手机端统一

    },

    begin: function() {

        var _this = this;

        this.interval = (this.delay)
            ? setTimeout(function() {
            _this.next(_this.delay);
        }, this.delay)
            : 0;

    },

    stop: function() {
        this.delay = 0;
        clearTimeout(this.interval);
    },

    resume: function() {
        this.delay = this.options.auto || 0;
        this.begin();
    },

    handleEvent: function(e) {
        switch (e.type) {
            case 'touchstart': this.onTouchStart(e); break;
            case 'touchmove': this.onTouchMove(e); break;
            case 'touchcancel' :
            case 'touchend': this.onTouchEnd(e); break;
            case 'webkitTransitionEnd':
            case 'msTransitionEnd':
            case 'oTransitionEnd':
            case 'transitionend': this.transitionEnd(e); break;
            case 'resize': this.setup(); break;
        }
    },

    transitionEnd: function(e) {

        if (this.delay) this.begin();

        this.callback(e, this.index, this.slides[this.index]);

    },

    onTouchStart: function(e) {

        this.start = {

            // get touch coordinates for delta calculations in onTouchMove
            pageX: e.touches[0].pageX,
            pageY: e.touches[0].pageY,

            // set initial timestamp of touch sequence
            time: Number( new Date() )

        };

        // used for testing first onTouchMove event
        this.isScrolling = undefined;

        // reset deltaX
        this.deltaX = 0;

        // set transition time to 0 for 1-to-1 touch movement
        this.element.style.MozTransitionDuration = this.element.style.webkitTransitionDuration = 0;

        e.stopPropagation();
    },

    onTouchMove: function(e) {

        // ensure swiping with one touch and not pinching
        if(e.touches.length > 1 || e.scale && e.scale !== 1) return;

        this.deltaX = e.touches[0].pageX - this.start.pageX;

        // determine if scrolling test has run - one time test
        if ( typeof this.isScrolling == 'undefined') {
            this.isScrolling = !!( this.isScrolling || Math.abs(this.deltaX) < Math.abs(e.touches[0].pageY - this.start.pageY) );
        }

        // if user is not trying to scroll vertically
        if (!this.isScrolling) {

            // prevent native scrolling
            e.preventDefault();

            // cancel slideshow
            clearTimeout(this.interval);

            // increase resistance if first or last slide
            this.deltaX =
                this.deltaX /
                    ( (!this.index && this.deltaX > 0               // if first slide and sliding left
                        || this.index == this.length - 1              // or if last slide and sliding right
                        && this.deltaX < 0                            // and if sliding at all
                        ) ?
                        ( Math.abs(this.deltaX) / this.width + 1 )      // determine resistance level
                        : 1 );                                          // no resistance if false

            // translate immediately 1-to-1
            this.element.style.MozTransform = this.element.style.webkitTransform = 'translate3d(' + (this.deltaX - this.index * this.width) + 'px,0,0)';

            e.stopPropagation();
        }

    },

    onTouchEnd: function(e) {

        // determine if slide attempt triggers next/prev slide
        var isValidSlide =
                Number(new Date()) - this.start.time < 250      // if slide duration is less than 250ms
                    && Math.abs(this.deltaX) > 20                   // and if slide amt is greater than 20px
                    || Math.abs(this.deltaX) > this.width/2,        // or if slide amt is greater than half the width

        // determine if slide attempt is past start and end
            isPastBounds =
                !this.index && this.deltaX > 0                          // if first slide and slide amt is greater than 0
                    || this.index == this.length - 1 && this.deltaX < 0;    // or if last slide and slide amt is less than 0

        // if not scrolling vertically
        if (!this.isScrolling) {

            // call slide function with slide end value based on isValidSlide and isPastBounds tests
            this.slide( this.index + ( isValidSlide && !isPastBounds ? (this.deltaX < 0 ? 1 : -1) : 0 ), this.speed );

        }

        e.stopPropagation();
    }

};

//小图的区域初始化
var ShotShow = (function(){
    return function(container, options){
        var defaults = {
            horHeight : "", //横图缩放后的高度
            varHeight : ""  //竖图缩放后的高度
        };
        if(container.length<=0){ return false;}
        var params = $.extend({}, defaults, options||{});
        var $container = container;
        var conWidth = $container[0].offsetWidth,
            conImage = $container.find("img");
        function showImg(elem){ //替换占位图片函数
            var dataImg = elem.attr("data-original");
            elem.attr("src", dataImg);
        }
        var firstImg = conImage[0],
            preImg = new Image(),
            ifReplace = 0, //标识是否图片占位图片替换完了
            itemWidth; //每个ITEM的宽度
        preImg.src = firstImg.getAttribute("data-original");
        preImg.onload = function(){
            if(this.width <= this.height){ //如果是竖图
                $container.addClass("horizon");
                itemWidth = 140;
            } else {
                $container.addClass("vertical");
                itemWidth = 305;
              if($("#sliderWrap").length > 0){
                $("#sliderWrap").addClass("ver-trans-img");
                }
            }
            $("#shotCont").css({height:this.height/(this.width/itemWidth)});
            //可视区域内的图片显示
            for(var i = Math.ceil(conWidth / itemWidth),k=0;i>k;k++){
                showImg(conImage.eq(k));
            }
            var length = $container.find(".shot-ul li").length;
            var mainWidth = length*itemWidth;
            $container.find(".shot-ul")[0].style.width = mainWidth + "px";
            if (ifReplace == 0){
                for (var a = Math.ceil(conWidth / itemWidth); length > a; a++)
                    showImg(conImage.eq(a));
            }
            ifReplace = 1;
        };
    };
})();

(function(){
    function picShow(){
        var t = this;
        t.bodyWidth = document.body.clientWidth;
        t.bodyHeight = window.screen.height;
        t.picMain = $("ul.pic-main");
        t.picMask = $("div.pic-mask");
        t.picWrap = $("div.pic-wrap");
        t.imgs = $("#shotCont").find("img");
        t.dataImg = $(".pic-img");
        t.nav = $("#picNav .item");
        t.picNum = t.imgs.length;
        t.indexs = 0;
        t.picMain.css({width:this.picNum * t.bodyWidth + "px"});
        if($("#sliderWrap").hasClass("ver-trans-img")){
            t.picMain.find("img").css({"max-width":.8* t.bodyWidth + "px"});
        }else{
            t.picMain.find("img").css({"max-width":.8* t.bodyHeight + "px"});
        }
        t.picMain.find("img").css({"max-width":.8* t.bodyWidth + "px"});
        t.dataImg.css({width: t.bodyWidth + "px"});
        t._init();
    }
    picShow.prototype = {
        _init : function(){
            var t = this;
            t.showPic();
            t.hidePic();
            t.picMoves();
        },
        showPic : function(){
            var t = this;
            t.imgs.off("click").on("click",function() {
                t.indexs = $(this).parents("li").index();
                t.picMask.show();
                t.picMove.slide(t.indexs, 0);
                t.nav.eq(t.indexs).addClass("curr").siblings().removeClass("curr");
            });
        },
        hidePic : function(){
            var t = this;
            t.picMask.click(function() {
                t.picMask.hide();
            });
        },
        picMoves: function() {
            var t = this;
            t.picMove = new Swipe(document.getElementById("sliderWrap"),{
                startSlide : 0,
                speed : 500,
                nav : document.getElementById("picNav")
            });
        }
    };
    if($("#first-view").length > 0){
        $(".pic-mask").on("touchmove", function(e) {
            e.preventDefault();
        });
        for (var e = $("#shotCont").find("img"), f = 0; f < e.length; f++) {
            var html = $("<li class='pic-img'></li>");
            html.append("<img src='" + e.eq(f).attr("data-original") + "'/>");
            $("ul.pic-main").append(html);
        }
        for (var h = $(".pic-main li"), f = 0; f < h.length; f++) {
            var i = $("<i class='item'></i>");
            $("#picNav").append(i);
        }
        $(document).ready(function() {
            new picShow();
        });
        $(window).resize(function() {
            new picShow();
        });
    }
    else{
        return false;
    }
})();
var myScroll;
function loaded () {
    myScroll = new IScroll('#shotCont',{ eventPassthrough: true, scrollX: true, scrollY: false, preventDefault: false ,mouseWheel: true});
}

//document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
ShotShow($("#shotCont"));
$(window).load(function(){
  loaded();
});