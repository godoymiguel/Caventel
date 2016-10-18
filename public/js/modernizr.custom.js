!function (e, t, n) {
    function r(e, t) {
        return typeof e === t
    }

    function s() {
        var e, t, n, s, a, o, i;
        for (var d in w)if (w.hasOwnProperty(d)) {
            if (e = [], t = w[d], t.name && (e.push(t.name.toLowerCase()), t.options && t.options.aliases && t.options.aliases.length))for (n = 0; n < t.options.aliases.length; n++)e.push(t.options.aliases[n].toLowerCase());
            for (s = r(t.fn, "function") ? t.fn() : t.fn, a = 0; a < e.length; a++)o = e[a], i = o.split("."), 1 === i.length ? b[i[0]] = s : (!b[i[0]] || b[i[0]] instanceof Boolean || (b[i[0]] = new Boolean(b[i[0]])), b[i[0]][i[1]] = s), x.push((s ? "" : "no-") + i.join("-"))
        }
    }

    function a(e) {
        var t = T.className, n = b._config.classPrefix || "";
        if (S && (t = t.baseVal), b._config.enableJSClass) {
            var r = new RegExp("(^|\\s)" + n + "no-js(\\s|$)");
            t = t.replace(r, "$1" + n + "js$2")
        }
        b._config.enableClasses && (t += " " + n + e.join(" " + n), S ? T.className.baseVal = t : T.className = t)
    }

    function o(e, t) {
        return !!~("" + e).indexOf(t)
    }

    function i() {
        return "function" != typeof t.createElement ? t.createElement(arguments[0]) : S ? t.createElementNS.call(t, "http://www.w3.org/2000/svg", arguments[0]) : t.createElement.apply(t, arguments)
    }

    function d() {
        var e = t.body;
        return e || (e = i(S ? "svg" : "body"), e.fake = !0), e
    }

    function l(e, n, r, s) {
        var a, o, l, c, u = "modernizr", f = i("div"), p = d();
        if (parseInt(r, 10))for (; r--;)l = i("div"), l.id = s ? s[r] : u + (r + 1), f.appendChild(l);
        return a = i("style"), a.type = "text/css", a.id = "s" + u, (p.fake ? p : f).appendChild(a), p.appendChild(f), a.styleSheet ? a.styleSheet.cssText = e : a.appendChild(t.createTextNode(e)), f.id = u, p.fake && (p.style.background = "", p.style.overflow = "hidden", c = T.style.overflow, T.style.overflow = "hidden", T.appendChild(p)), o = n(f, e), p.fake ? (p.parentNode.removeChild(p), T.style.overflow = c, T.offsetHeight) : f.parentNode.removeChild(f), !!o
    }

    function c(e) {
        return e.replace(/([A-Z])/g, function (e, t) {
            return "-" + t.toLowerCase()
        }).replace(/^ms-/, "-ms-")
    }

    function u(t, r) {
        var s = t.length;
        if ("CSS" in e && "supports" in e.CSS) {
            for (; s--;)if (e.CSS.supports(c(t[s]), r))return !0;
            return !1
        }
        if ("CSSSupportsRule" in e) {
            for (var a = []; s--;)a.push("(" + c(t[s]) + ":" + r + ")");
            return a = a.join(" or "), l("@supports (" + a + ") { #modernizr { position: absolute; } }", function (e) {
                return "absolute" == getComputedStyle(e, null).position
            })
        }
        return n
    }

    function f(e) {
        return e.replace(/([a-z])-([a-z])/g, function (e, t, n) {
            return t + n.toUpperCase()
        }).replace(/^-/, "")
    }

    function p(e, t, s, a) {
        function d() {
            c && (delete _.style, delete _.modElem)
        }

        if (a = r(a, "undefined") ? !1 : a, !r(s, "undefined")) {
            var l = u(e, s);
            if (!r(l, "undefined"))return l
        }
        for (var c, p, g, m, v, h = ["modernizr", "tspan"]; !_.style;)c = !0, _.modElem = i(h.shift()), _.style = _.modElem.style;
        for (g = e.length, p = 0; g > p; p++)if (m = e[p], v = _.style[m], o(m, "-") && (m = f(m)), _.style[m] !== n) {
            if (a || r(s, "undefined"))return d(), "pfx" == t ? m : !0;
            try {
                _.style[m] = s
            } catch (w) {
            }
            if (_.style[m] != v)return d(), "pfx" == t ? m : !0
        }
        return d(), !1
    }

    function g(e, t) {
        return function () {
            return e.apply(t, arguments)
        }
    }

    function m(e, t, n) {
        var s;
        for (var a in e)if (e[a] in t)return n === !1 ? e[a] : (s = t[e[a]], r(s, "function") ? g(s, n || t) : s);
        return !1
    }

    function v(e, t, n, s, a) {
        var o = e.charAt(0).toUpperCase() + e.slice(1), i = (e + " " + E.join(o + " ") + o).split(" ");
        return r(t, "string") || r(t, "undefined") ? p(i, t, s, a) : (i = (e + " " + P.join(o + " ") + o).split(" "), m(i, t, n))
    }

    function h(e, t, r) {
        return v(e, n, n, t, r)
    }

    var w = [], y = {
        _version: "3.2.0",
        _config: {classPrefix: "", enableClasses: !0, enableJSClass: !0, usePrefixes: !0},
        _q: [],
        on: function (e, t) {
            var n = this;
            setTimeout(function () {
                t(n[e])
            }, 0)
        },
        addTest: function (e, t, n) {
            w.push({name: e, fn: t, options: n})
        },
        addAsyncTest: function (e) {
            w.push({name: null, fn: e})
        }
    }, b = function () {
    };
    b.prototype = y, b = new b;
    var x = [], T = t.documentElement, S = "svg" === T.nodeName.toLowerCase(), C = "Moz O ms Webkit", E = y._config.usePrefixes ? C.split(" ") : [];
    y._cssomPrefixes = E;
    var k = {elem: i("modernizr")};
    b._q.push(function () {
        delete k.elem
    });
    var _ = {style: k.elem.style};
    b._q.unshift(function () {
        delete _.style
    });
    var P = y._config.usePrefixes ? C.toLowerCase().split(" ") : [];
    y._domPrefixes = P, y.testAllProps = v, y.testAllProps = h, b.addTest("backgroundsize", h("backgroundSize", "100%", !0)), b.addTest("bgpositionshorthand", function () {
        var e = i("a"), t = e.style, n = "right 10px bottom 10px";
        return t.cssText = "background-position: " + n + ";", t.backgroundPosition === n
    }), b.addTest("bgpositionxy", function () {
        return h("backgroundPositionX", "3px", !0) && h("backgroundPositionY", "5px", !0)
    }), b.addTest("bgrepeatround", h("backgroundRepeat", "round")), b.addTest("bgrepeatspace", h("backgroundRepeat", "space")), b.addTest("bgsizecover", h("backgroundSize", "cover")), b.addTest("borderradius", h("borderRadius", "0px", !0)), b.addTest("cssanimations", h("animationName", "a", !0));
    var z = y._config.usePrefixes ? " -webkit- -moz- -o- -ms- ".split(" ") : [];
    y._prefixes = z, b.addTest("csscalc", function () {
        var e = "width:", t = "calc(10px);", n = i("a");
        return n.style.cssText = e + z.join(t + e), !!n.style.length
    }), b.addTest("csstransforms", function () {
        return -1 === navigator.userAgent.indexOf("Android 2.") && h("transform", "scale(1)", !0)
    });
    var R = y.testStyles = l, N = "CSS" in e && "supports" in e.CSS, j = "supportsCSS" in e;
    b.addTest("supports", N || j), b.addTest("csstransforms3d", function () {
        var e = !!h("perspective", "1px", !0), t = b._config.usePrefixes;
        if (e && (!t || "webkitPerspective" in T.style)) {
            var n, r = "#modernizr{width:0;height:0}";
            b.supports ? n = "@supports (perspective: 1px)" : (n = "@media (transform-3d)", t && (n += ",(-webkit-transform-3d)")), n += "{#modernizr{width:7px;height:18px;margin:0;padding:0;border:0}}", R(r + n, function (t) {
                e = 7 === t.offsetWidth && 18 === t.offsetHeight
            })
        }
        return e
    }), b.addTest("csstransitions", h("transition", "all", !0)), b.addTest("flexboxtweener", h("flexAlign", "end", !0));
    var A = function () {
        var e = navigator.userAgent, t = e.match(/applewebkit\/([0-9]+)/gi) && parseFloat(RegExp.$1), n = e.match(/w(eb)?osbrowser/gi), r = e.match(/windows phone/gi) && e.match(/iemobile\/([0-9])+/gi) && parseFloat(RegExp.$1) >= 9, s = 533 > t && e.match(/android/gi);
        return n || s || r
    }();
    A ? b.addTest("fontface", !1) : R('@font-face {font-family:"font";src:url("https://")}', function (e, n) {
        var r = t.getElementById("smodernizr"), s = r.sheet || r.styleSheet, a = s ? s.cssRules && s.cssRules[0] ? s.cssRules[0].cssText : s.cssText || "" : "", o = /src/i.test(a) && 0 === a.indexOf(n.split(" ")[0]);
        b.addTest("fontface", o)
    }), b.addTest("inlinesvg", function () {
        var e = i("div");
        return e.innerHTML = "<svg/>", "http://www.w3.org/2000/svg" == ("undefined" != typeof SVGRect && e.firstChild && e.firstChild.namespaceURI)
    }), b.addTest("localstorage", function () {
        var e = "modernizr";
        try {
            return localStorage.setItem(e, e), localStorage.removeItem(e), !0
        } catch (t) {
            return !1
        }
    }), b.addTest("multiplebgs", function () {
        var e = i("a").style;
        return e.cssText = "background:url(https://),url(https://),red url(https://)", /(url\s*\(.*?){3}/.test(e.background)
    }), b.addTest("preserve3d", h("transformStyle", "preserve-3d")), b.addTest("sessionstorage", function () {
        var e = "modernizr";
        try {
            return sessionStorage.setItem(e, e), sessionStorage.removeItem(e), !0
        } catch (t) {
            return !1
        }
    });
    var O = {}.toString;
    b.addTest("smil", function () {
        return !!t.createElementNS && /SVGAnimate/.test(O.call(t.createElementNS("http://www.w3.org/2000/svg", "animate")))
    }), b.addTest("svgclippaths", function () {
        return !!t.createElementNS && /SVGClipPath/.test(O.call(t.createElementNS("http://www.w3.org/2000/svg", "clipPath")))
    }), b.addTest("svgfilters", function () {
        var t = !1;
        try {
            t = "SVGFEColorMatrixElement" in e && 2 == SVGFEColorMatrixElement.SVG_FECOLORMATRIX_TYPE_SATURATE
        } catch (n) {
        }
        return t
    }), b.addTest("svgforeignobject", function () {
        return !!t.createElementNS && /SVGForeignObject/.test(O.call(t.createElementNS("http://www.w3.org/2000/svg", "foreignObject")))
    }), b.addTest("canvas", function () {
        var e = i("canvas");
        return !(!e.getContext || !e.getContext("2d"))
    });
    var L = i("canvas");
    b.addTest("todataurljpeg", function () {
        return !!b.canvas && 0 === L.toDataURL("image/jpeg").indexOf("data:image/jpeg")
    }), b.addTest("todataurlpng", function () {
        return !!b.canvas && 0 === L.toDataURL("image/png").indexOf("data:image/png")
    }), b.addTest("todataurlwebp", function () {
        var e = !1;
        try {
            e = !!b.canvas && 0 === L.toDataURL("image/webp").indexOf("data:image/webp")
        } catch (t) {
        }
        return e
    }), s(), a(x), delete y.addTest, delete y.addAsyncTest;
    for (var V = 0; V < b._q.length; V++)b._q[V]();
    e.Modernizr = b
}(window, document);