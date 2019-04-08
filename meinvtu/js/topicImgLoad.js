function listLayout1(obj) {
  var _u = obj.getElementsByTagName("li");
  var _t = 0;
  for (var i = 0; i < _u.length; i++) {
    _u[i].style.position = "absolute";
    var cols = i%4;
    _u[i].style.left = cols * 192 + "px";

    if (i <= 3) {
      _u[i].style.top = "0px";
    } else {
      var h = parseInt(_u[i - 4].offsetTop + _u[i - 4].scrollHeight);
      _u[i].style.top = h + "px";
    }
    if (i > 0) {
      var _newT = 0;
      var _cur = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
      var _pro = parseInt(_u[i - 1].offsetTop + _u[i - 1].scrollHeight);
      if (_cur > _pro) {
        _newT = _cur;
        if (_newT > _t) _t = _newT;
      }
    } else {
      _t = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
    }
  }
  obj.style.height = parseInt(_t+5) + "px";
}
listLayout1(document.getElementById("ImagesLoad1"));
window.onload = function(){
  listLayout1(document.getElementById("ImagesLoad1"));
};
//===============2
function listLayout2(obj) {
  var _u = obj.getElementsByTagName("li");
  var _t = 0;
  for (var i = 0; i < _u.length; i++) {
    _u[i].style.position = "absolute";
    var cols = i%4;
    _u[i].style.left = cols * 192 + "px";

    if (i <= 3) {
      _u[i].style.top = "0px";
    } else {
      var h = parseInt(_u[i - 4].offsetTop + _u[i - 4].scrollHeight);
      _u[i].style.top = h + "px";
    }
    if (i > 0) {
      var _newT = 0;
      var _cur = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
      var _pro = parseInt(_u[i - 1].offsetTop + _u[i - 1].scrollHeight);
      if (_cur > _pro) {
        _newT = _cur;
        if (_newT > _t) _t = _newT;
      }
    } else {
      _t = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
    }
  }
  obj.style.height = parseInt(_t+5) + "px";
}
listLayout2(document.getElementById("ImagesLoad2"));
window.onload = function(){
  listLayout2(document.getElementById("ImagesLoad2"));
};
//===============3
function listLayout3(obj) {
  var _u = obj.getElementsByTagName("li");
  var _t = 0;
  for (var i = 0; i < _u.length; i++) {
    _u[i].style.position = "absolute";
    var cols = i%4;
    _u[i].style.left = cols * 192 + "px";

    if (i <= 3) {
      _u[i].style.top = "0px";
    } else {
      var h = parseInt(_u[i - 4].offsetTop + _u[i - 4].scrollHeight);
      _u[i].style.top = h + "px";
    }
    if (i > 0) {
      var _newT = 0;
      var _cur = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
      var _pro = parseInt(_u[i - 1].offsetTop + _u[i - 1].scrollHeight);
      if (_cur > _pro) {
        _newT = _cur;
        if (_newT > _t) _t = _newT;
      }
    } else {
      _t = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
    }
  }
  obj.style.height = parseInt(_t+5) + "px";
}
listLayout3(document.getElementById("ImagesLoad3"));
window.onload = function(){
  listLayout3(document.getElementById("ImagesLoad3"));
};
//===============4
function listLayout4(obj) {
  var _u = obj.getElementsByTagName("li");
  var _t = 0;
  for (var i = 0; i < _u.length; i++) {
    _u[i].style.position = "absolute";
    var cols = i%4;
    _u[i].style.left = cols * 192 + "px";

    if (i <= 3) {
      _u[i].style.top = "0px";
    } else {
      var h = parseInt(_u[i - 4].offsetTop + _u[i - 4].scrollHeight);
      _u[i].style.top = h + "px";
    }
    if (i > 0) {
      var _newT = 0;
      var _cur = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
      var _pro = parseInt(_u[i - 1].offsetTop + _u[i - 1].scrollHeight);
      if (_cur > _pro) {
        _newT = _cur;
        if (_newT > _t) _t = _newT;
      }
    } else {
      _t = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
    }
  }
  obj.style.height = parseInt(_t+5) + "px";
}
listLayout4(document.getElementById("ImagesLoad4"));
window.onload = function(){
  listLayout4(document.getElementById("ImagesLoad4"));
};
//===============5
function listLayout5(obj) {
  var _u = obj.getElementsByTagName("li");
  var _t = 0;
  for (var i = 0; i < _u.length; i++) {
    _u[i].style.position = "absolute";
    var cols = i%4;
    _u[i].style.left = cols * 192 + "px";

    if (i <= 3) {
      _u[i].style.top = "0px";
    } else {
      var h = parseInt(_u[i - 4].offsetTop + _u[i - 4].scrollHeight);
      _u[i].style.top = h + "px";
    }
    if (i > 0) {
      var _newT = 0;
      var _cur = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
      var _pro = parseInt(_u[i - 1].offsetTop + _u[i - 1].scrollHeight);
      if (_cur > _pro) {
        _newT = _cur;
        if (_newT > _t) _t = _newT;
      }
    } else {
      _t = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
    }
  }
  obj.style.height = parseInt(_t+5) + "px";
}
listLayout5(document.getElementById("ImagesLoad5"));
window.onload = function(){
  listLayout5(document.getElementById("ImagesLoad5"));
};
//===============6
function listLayout5(obj) {
  var _u = obj.getElementsByTagName("li");
  var _t = 0;
  for (var i = 0; i < _u.length; i++) {
    _u[i].style.position = "absolute";
    var cols = i%4;
    _u[i].style.left = cols * 192 + "px";

    if (i <= 3) {
      _u[i].style.top = "0px";
    } else {
      var h = parseInt(_u[i - 4].offsetTop + _u[i - 4].scrollHeight);
      _u[i].style.top = h + "px";
    }
    if (i > 0) {
      var _newT = 0;
      var _cur = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
      var _pro = parseInt(_u[i - 1].offsetTop + _u[i - 1].scrollHeight);
      if (_cur > _pro) {
        _newT = _cur;
        if (_newT > _t) _t = _newT;
      }
    } else {
      _t = parseInt(_u[i].offsetTop + _u[i].scrollHeight);
    }
  }
  obj.style.height = parseInt(_t+5) + "px";
}
listLayout6(document.getElementById("ImagesLoad6"));
window.onload = function(){
  listLayout6(document.getElementById("ImagesLoad6"));
};