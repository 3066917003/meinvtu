// slide JavaScript Document
function slide(e, t) {
	function w() {
		d && clearTimeout(d),
		d = setTimeout(function() {
			b.nextPage(),
			d = setTimeout(arguments.callee, v)
		},
		v)
	}
	function E() {
		var e = ["left", "current", "right"],
		t = [m - 1 < 0 ? s - 1 : m - 1, m, m + 1 > s - 1 ? 0 : m + 1];
		for (i = 0; i < 3; i++) r[t[i]].className = e[i]
	}
	function S() {
		var e = "";
		for (var t = 0; t < s; t++) e += t === 0 ? "<li class='on'></li>": "<li></li>";
		y.innerHTML = e
	}
	function x() {
		//n.style.height = parseInt(n.clientWidth / u) + "px" //原来的是u，尺寸不符合会变形，现在根据需要写死了653*400的尺寸比例
		n.style.height = parseInt(n.clientWidth / 2.01666) + "px"
	}
	function T() {
		setTimeout(function() {
			x(),
			_(0, 0)
		},
		200)
	}
	function N() {
		o = !1,
		E(),
		n.style.left = 0
	}
	function C() {
		if (g) return event.preventDefault(),
		!1
	}
	function k() {
		if (o) return;
		d && clearTimeout(d);
		var e = event.touches[0];
		f = e.screenX,
		l = e.screenY,
		c = 0,
		h = 0,
		g = !1
	}
	function L() {
		if (o) return;
		var e = event.touches[0];
		c = e.screenX - f,
		h = e.screenY - l,
		g ? p && (event.preventDefault(), n.style.left = parseInt(c) / 2 + "px") : (p = Math.abs(c) > Math.abs(h), g = !0, p && event.preventDefault())
	}
	function A() {
		if (o) return;
		g && p && (c > 20 ? O() : c < -20 ? M() : _(0, a)),
		w()
	}
	function O() {
		m = --m >= 0 ? m: s - 1,
		_(1, a)
	}
	function M() {
		m = ++m < s ? m: 0,
		_( - 1, a)
	}
	function _(e, t) {
		o = !0;
		var r = e * n.clientWidth;
		P(r, t, N),
		D()
	}
	function D() {
		for (var e = 0; e < s; e++) e === m ? y.children[e].className = "on": y.children[e].className = ""
	}
	function P(e, t, r) {
		var i, s = parseInt(n.style.left) || 0,
		o = e - s,
		u = +(new Date);
		requestAnimationFrame(function() {
			i = +(new Date) - u,
			i > t ? (n.style.left = e + "px", r && r()) : (n.style.left = H(i, s, o, t) + "px", requestAnimationFrame(arguments.callee))
		})
	}
	function H(e, t, n, r) {
		return n * ((e = e / r - 1) * e * e + 1) + t
	}
	var n = document.getElementById(e),
	r = n.getElementsByTagName("li"),
	s = r.length,
	o,
	u = t.s || .5,
	a = t.duration || 300,
	f = 0,
	l = 0,
	c = 0,
	h = 0,
	p = !1,
	d,
	v = t.interval || 5e3,
	m = 0,
	g = !1,
	y = document.getElementById(t.tabFn),
	b = {
		init: function() {
			o = !1,
			E(),
			S(),
			x(),
			w(),
			n.addEventListener("touchstart", k, !1),
			n.addEventListener("touchmove", L, !1),
			n.addEventListener("touchend", A, !1),
			n.addEventListener("webkitTransitionEnd", N, !1),
			window.addEventListener("orientationchange" in window ? "orientationchange": "resize", T, !1);
			var e = n.getElementsByTagName("a");
			for (var t = 0; t < e.length; t++) e[t].addEventListener("click", C, !1)
		},
		prevPage: O,
		nextPage: M
	};
	return b
}
window.requestAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame ||
function(e) {
	window.setTimeout(e, 1e3 / 60)
};
var sl = slide("pics", {
	tabFn: "tabFn",
	s: 2
});
sl.init();

//使得#tabFn居中
$(function(){
	var w = $('#tabFn').width()+10;//#tabFn的width+左右的padding
	//alert(w);
	var ml = w/2 ;
	$('#tabFn').css('margin-left',-ml);
})