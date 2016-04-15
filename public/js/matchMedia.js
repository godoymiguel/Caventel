window.matchMedia || (window.matchMedia = function () {
    "use strict";
    var e = window.styleMedia || window.media;
    if (!e) {
        var t = document.createElement("style"), i = document.getElementsByTagName("script")[0], n = null;
        t.type = "text/css", t.id = "matchmediajs-test", i.parentNode.insertBefore(t, i), n = "getComputedStyle" in window && window.getComputedStyle(t, null) || t.currentStyle, e = {
            matchMedium: function (e) {
                var i = "@media " + e + "{ #matchmediajs-test { width: 1px; } }";
                return t.styleSheet ? t.styleSheet.cssText = i : t.textContent = i, "1px" === n.width
            }
        }
    }
    return function (t) {
        return {matches: e.matchMedium(t || "all"), media: t || "all"}
    }
}());