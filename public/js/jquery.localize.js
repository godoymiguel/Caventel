!function (n) {
    var t;
    return t = function (n) {
        return n = n.replace(/_/, "-").toLowerCase(), n.length > 3 && (n = n.substring(0, 3) + n.substring(3).toUpperCase()), n
    }, n.defaultLanguage = t(navigator.languages ? navigator.languages[0] : navigator.language || navigator.userLanguage), n.localize = function (a, e) {
        var r, l, u, i, o, c, s, f, g, v, h, p, d, b, x, j, k;
        return null == e && (e = {}), k = this, u = {}, l = e.fileExtension || "json", c = function (n, t, a) {
            var r;
            switch (null == a && (a = 1), a) {
                case 1:
                    return u = {}, e.loadBase ? (r = n + ("." + l), i(r, n, t, a)) : c(n, t, 2);
                case 2:
                    if (t.length >= 2)return r = "" + n + "-" + t.substring(0, 2) + "." + l, i(r, n, t, a);
                    break;
                case 3:
                    if (t.length >= 5)return r = "" + n + "-" + t.substring(0, 5) + "." + l, i(r, n, t, a)
            }
        }, i = function (t, a, r, l) {
            var i, o, s;
            return null != e.pathPrefix && (t = "" + e.pathPrefix + "/" + t), s = function (t) {
                return n.extend(u, t), p(u), c(a, r, l + 1)
            }, o = function () {
                return e.fallback && e.fallback !== r ? c(a, e.fallback) : void 0
            }, i = {
                url: t,
                dataType: "json",
                async: !1,
                timeout: null != e.timeout ? e.timeout : 500,
                success: s,
                error: o
            }, "file:" === window.location.protocol && (i.error = function (t) {
                return s(n.parseJSON(t.responseText))
            }), n.ajax(i)
        }, p = function (n) {
            return null != e.callback ? e.callback(n, r) : r(n)
        }, r = function (t) {
            return n.localize.data[a] = t, k.each(function () {
                var a, e, r;
                return a = n(this), e = a.data("localize"), e || (e = a.attr("rel").match(/localize\[(.*?)\]/)[1]), r = j(e, t), null != r ? s(a, e, r) : void 0
            })
        }, s = function (t, a, e) {
            return t.is("input") ? v(t, a, e) : t.is("textarea") ? v(t, a, e) : t.is("img") ? g(t, a, e) : t.is("optgroup") ? h(t, a, e) : n.isPlainObject(e) || t.html(e), n.isPlainObject(e) ? f(t, e) : void 0
        }, v = function (t, a, e) {
            var r;
            return r = n.isPlainObject(e) ? e.value : e, t.is("[placeholder]") ? t.attr("placeholder", r) : t.val(r)
        }, f = function (n, t) {
            return b(n, "title", t), b(n, "href", t), x(n, "text", t)
        }, h = function (n, t, a) {
            return n.attr("label", a)
        }, g = function (n, t, a) {
            return b(n, "alt", a), b(n, "src", a)
        }, j = function (n, t) {
            var a, e, r, l;
            for (a = n.split(/\./), e = t, r = 0, l = a.length; l > r; r++)n = a[r], e = null != e ? e[n] : null;
            return e
        }, b = function (n, t, a) {
            return a = j(t, a), null != a ? n.attr(t, a) : void 0
        }, x = function (n, t, a) {
            return a = j(t, a), null != a ? n.text(a) : void 0
        }, d = function (n) {
            var t;
            return "string" == typeof n ? "^" + n + "$" : null != n.length ? function () {
                var a, e, r;
                for (r = [], a = 0, e = n.length; e > a; a++)t = n[a], r.push(d(t));
                return r
            }().join("|") : n
        }, o = t(e.language ? e.language : n.defaultLanguage), e.skipLanguage && o.match(d(e.skipLanguage)) || c(a, o, 1), k
    }, n.fn.localize = n.localize, n.localize.data = {}
}(jQuery);