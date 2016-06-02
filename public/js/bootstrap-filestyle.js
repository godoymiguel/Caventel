!function (t) {
    "use strict";
    var e = 0, i = function (e, i) {
        this.options = i, this.$elementFilestyle = [], this.$element = t(e)
    };
    i.prototype = {
        clear: function () {
            this.$element.val(""), this.$elementFilestyle.find(":text").val(""), this.$elementFilestyle.find(".badge").remove()
        }, destroy: function () {
            this.$element.removeAttr("style").removeData("filestyle"), this.$elementFilestyle.remove()
        }, disabled: function (t) {
            if (t === !0)this.options.disabled || (this.$element.attr("disabled", "true"), this.$elementFilestyle.find("label").attr("disabled", "true"), this.options.disabled = !0); else {
                if (t !== !1)return this.options.disabled;
                this.options.disabled && (this.$element.removeAttr("disabled"), this.$elementFilestyle.find("label").removeAttr("disabled"), this.options.disabled = !1)
            }
        }, buttonBefore: function (t) {
            if (t === !0)this.options.buttonBefore || (this.options.buttonBefore = !0, this.options.input && (this.$elementFilestyle.remove(), this.constructor(), this.pushNameFiles())); else {
                if (t !== !1)return this.options.buttonBefore;
                this.options.buttonBefore && (this.options.buttonBefore = !1, this.options.input && (this.$elementFilestyle.remove(), this.constructor(), this.pushNameFiles()))
            }
        }, icon: function (t) {
            if (t === !0)this.options.icon || (this.options.icon = !0, this.$elementFilestyle.find("label").prepend(this.htmlIcon())); else {
                if (t !== !1)return this.options.icon;
                this.options.icon && (this.options.icon = !1, this.$elementFilestyle.find(".icon-span-filestyle").remove())
            }
        }, input: function (t) {
            if (t === !0)this.options.input || (this.options.input = !0, this.options.buttonBefore ? this.$elementFilestyle.append(this.htmlInput()) : this.$elementFilestyle.prepend(this.htmlInput()), this.$elementFilestyle.find(".badge").remove(), this.pushNameFiles(), this.$elementFilestyle.find(".group-span-filestyle").addClass("input-group-btn")); else {
                if (t !== !1)return this.options.input;
                if (this.options.input) {
                    this.options.input = !1, this.$elementFilestyle.find(":text").remove();
                    var e = this.pushNameFiles();
                    e.length > 0 && this.options.badge && this.$elementFilestyle.find("label").append(' <span class="badge">' + e.length + "</span>"), this.$elementFilestyle.find(".group-span-filestyle").removeClass("input-group-btn")
                }
            }
        }, size: function (t) {
            if (void 0 === t)return this.options.size;
            var e = this.$elementFilestyle.find("label"), i = this.$elementFilestyle.find("input");
            e.removeClass("btn-lg btn-sm"), i.removeClass("input-lg input-sm"), "nr" != t && (e.addClass("btn-" + t), i.addClass("input-" + t))
        }, placeholder: function (t) {
            return void 0 === t ? this.options.placeholder : (this.options.placeholder = t, void this.$elementFilestyle.find("input").attr("placeholder", t))
        }, buttonText: function (t) {
            return void 0 === t ? this.options.buttonText : (this.options.buttonText = t, void this.$elementFilestyle.find("label .buttonText").html(this.options.buttonText))
        }, buttonName: function (t) {
            return void 0 === t ? this.options.buttonName : (this.options.buttonName = t, void this.$elementFilestyle.find("label").attr({"class": "btn " + this.options.buttonName}))
        }, iconName: function (t) {
            return void 0 === t ? this.options.iconName : void this.$elementFilestyle.find(".icon-span-filestyle").attr({"class": "icon-span-filestyle " + this.options.iconName})
        }, htmlIcon: function () {
            return this.options.icon ? '<span class="icon-span-filestyle ' + this.options.iconName + '"></span> ' : ""
        }, htmlInput: function () {
            return this.options.input ? '<input type="text" class="form-control ' + ("nr" == this.options.size ? "" : "input-" + this.options.size) + '" placeholder="' + this.options.placeholder + '" disabled> ' : ""
        }, pushNameFiles: function () {
            var t = "", e = [];
            void 0 === this.$element[0].files ? e[0] = {name: this.$element[0] && this.$element[0].value} : e = this.$element[0].files;
            for (var i = 0; i < e.length; i++)t += e[i].name.split("\\").pop() + ", ";
            return this.$elementFilestyle.find(":text").val("" !== t ? t.replace(/\, $/g, "") : ""), e
        }, constructor: function () {
            var i = this, n = "", s = i.$element.attr("id"), l = "";
            "" !== s && s || (s = "filestyle-" + e, i.$element.attr({id: s}), e++), l = '<span class="group-span-filestyle ' + (i.options.input ? "input-group-btn" : "") + '"><label for="' + s + '" class="btn ' + i.options.buttonName + " " + ("nr" == i.options.size ? "" : "btn-" + i.options.size) + '" ' + (i.options.disabled ? 'disabled="true"' : "") + ">" + i.htmlIcon() + '<span class="buttonText">' + i.options.buttonText + "</span></label></span>", n = i.options.buttonBefore ? l + i.htmlInput() : i.htmlInput() + l, i.$elementFilestyle = t('<div class="bootstrap-filestyle input-group">' + n + "</div>"), i.$elementFilestyle.find(".group-span-filestyle").attr("tabindex", "0").keypress(function (t) {
                return 13 === t.keyCode || 32 === t.charCode ? (i.$elementFilestyle.find("label").click(), !1) : void 0
            }), i.$element.css({
                position: "absolute",
                clip: "rect(0px 0px 0px 0px)"
            }).attr("tabindex", "-1").after(i.$elementFilestyle), i.options.disabled && i.$element.attr("disabled", "true"), i.$element.change(function () {
                var t = i.pushNameFiles();
                0 == i.options.input && i.options.badge ? 0 == i.$elementFilestyle.find(".badge").length ? i.$elementFilestyle.find("label").append(' <span class="badge">' + t.length + "</span>") : 0 == t.length ? i.$elementFilestyle.find(".badge").remove() : i.$elementFilestyle.find(".badge").html(t.length) : i.$elementFilestyle.find(".badge").remove()
            }), window.navigator.userAgent.search(/firefox/i) > -1 && i.$elementFilestyle.find("label").click(function () {
                return i.$element.click(), !1
            })
        }
    };
    var n = t.fn.filestyle;
    t.fn.filestyle = function (e, n) {
        var s = "", l = this.each(function () {
            if ("file" === t(this).attr("type")) {
                var l = t(this), o = l.data("filestyle"), a = t.extend({}, t.fn.filestyle.defaults, e, "object" == typeof e && e);
                o || (l.data("filestyle", o = new i(this, a)), o.constructor()), "string" == typeof e && (s = o[e](n))
            }
        });
        return void 0 !== typeof s ? s : l
    }, t.fn.filestyle.defaults = {
        buttonText: "Buscar Archivo",
        iconName: "glyphicon glyphicon-folder-open",
        buttonName: "btn-default",
        size: "nr",
        input: !0,
        badge: !0,
        icon: !0,
        buttonBefore: !1,
        disabled: !1,
        placeholder: ""
    }, t.fn.filestyle.noConflict = function () {
        return t.fn.filestyle = n, this
    }, t(function () {
        t(".filestyle").each(function () {
            var e = t(this), i = {
                input: "false" === e.attr("data-input") ? !1 : !0,
                icon: "false" === e.attr("data-icon") ? !1 : !0,
                buttonBefore: "true" === e.attr("data-buttonBefore") ? !0 : !1,
                disabled: "true" === e.attr("data-disabled") ? !0 : !1,
                size: e.attr("data-size"),
                buttonText: e.attr("data-buttonText"),
                buttonName: e.attr("data-buttonName"),
                iconName: e.attr("data-iconName"),
                badge: "false" === e.attr("data-badge") ? !1 : !0,
                placeholder: e.attr("data-placeholder")
            };
            e.filestyle(i)
        })
    })
}(window.jQuery);