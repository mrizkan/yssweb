// jQuery Cookie Plugin v1.4.1 | (c)2014 Klaus Hartl 
(function (a) {
    if (typeof define === "function" && define.amd) {
        define(["jquery"], a);
    } else {
        if (typeof exports === "object") {
            a(require("jquery"));
        } else {
            a(jQuery);
        }
    }
}(function (f) {
    var a = /\+/g;

    function d(i) {
        return b.raw ? i : encodeURIComponent(i);
    }

    function g(i) {
        return b.raw ? i : decodeURIComponent(i);
    }

    function h(i) {
        return d(b.json ? JSON.stringify(i) : String(i));
    }

    function c(i) {
        if (i.indexOf('"') === 0) {
            i = i.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\");
        }
        try {
            i = decodeURIComponent(i.replace(a, " "));
            return b.json ? JSON.parse(i) : i;
        } catch (j) {
        }
    }

    function e(j, i) {
        var k = b.raw ? j : c(j);
        return f.isFunction(i) ? i(k) : k;
    }

    var b = f.cookie = function (q, p, v) {
        if (arguments.length > 1 && !f.isFunction(p)) {
            v = f.extend({}, b.defaults, v);
            if (typeof v.expires === "number") {
                var r = v.expires, u = v.expires = new Date();
                u.setTime(+u + r * 86400000);
            }
            return (document.cookie = [d(q), "=", h(p), v.expires ? "; expires=" + v.expires.toUTCString() : "", v.path ? "; path=" + v.path : "", v.domain ? "; domain=" + v.domain : "", v.secure ? "; secure" : ""].join(""));
        }
        var w = q ? undefined : {};
        var s = document.cookie ? document.cookie.split("; ") : [];
        for (var o = 0, m = s.length; o < m; o++) {
            var n = s[o].split("=");
            var j = g(n.shift());
            var k = n.join("=");
            if (q && q === j) {
                w = e(k, p);
                break;
            }
            if (!q && (k = e(k)) !== undefined) {
                w[j] = k;
            }
        }
        return w;
    };
    b.defaults = {};
    f.removeCookie = function (j, i) {
        if (f.cookie(j) === undefined) {
            return false;
        }
        f.cookie(j, "", f.extend({}, i, {expires: -1}));
        return !f.cookie(j);
    };
}));

//jQuery elevateZoom 3.0.8
"function" != typeof Object.create && (Object.create = function (o) {
    function i() {
    }

    return i.prototype = o, new i
}), function (o) {
    var i = {
        init: function (i, t) {
            var e = this;
            e.elem = t, e.$elem = o(t), e.imageSrc = e.$elem.data("zoom-image") ? e.$elem.data("zoom-image") : e.$elem.attr("src"), e.options = o.extend({}, o.fn.elevateZoom.options, i), e.options.tint && (e.options.lensColour = "none", e.options.lensOpacity = "1"), "inner" == e.options.zoomType && (e.options.showLens = !1), e.$elem.parent().removeAttr("title").removeAttr("alt"), e.zoomImage = e.imageSrc, e.refresh(1), o("#" + e.options.gallery + " a").click(function (i) {
                return e.options.galleryActiveClass && (o("#" + e.options.gallery + " a").removeClass(e.options.galleryActiveClass), o(this).addClass(e.options.galleryActiveClass)), i.preventDefault(), e.zoomImagePre = o(this).data(o(this).data("zoom-image") ? "zoom-image" : "image"), e.swaptheimage(o(this).data("image"), e.zoomImagePre), !1
            })
        }, refresh: function (o) {
            var i = this;
            setTimeout(function () {
                i.fetch(i.imageSrc)
            }, o || i.options.refresh)
        }, fetch: function (o) {
            var i = this, t = new Image;
            t.onload = function () {
                i.largeWidth = t.width, i.largeHeight = t.height, i.startZoom(), i.currentImage = i.imageSrc, i.options.onZoomedImageLoaded(i.$elem)
            }, t.src = o
        }, startZoom: function () {
            var i = this;
            if (i.nzWidth = i.$elem.width(), i.nzHeight = i.$elem.height(), i.isWindowActive = !1, i.isLensActive = !1, i.isTintActive = !1, i.overWindow = !1, i.options.imageCrossfade && (i.zoomWrap = i.$elem.wrap('<div style="height:' + i.nzHeight + "px;width:" + i.nzWidth + 'px;" class="zoomWrapper" />'), i.$elem.css("position", "absolute")), i.zoomLock = 1, i.scrollingLock = !1, i.changeBgSize = !1, i.currentZoomLevel = i.options.zoomLevel, i.nzOffset = i.$elem.offset(), i.widthRatio = i.largeWidth / i.currentZoomLevel / i.nzWidth, i.heightRatio = i.largeHeight / i.currentZoomLevel / i.nzHeight, "window" == i.options.zoomType && (i.zoomWindowStyle = "overflow: hidden;background-position: 0px 0px;text-align:center;background-color: " + String(i.options.zoomWindowBgColour) + ";width: " + String(i.options.zoomWindowWidth) + "px;height: " + String(i.options.zoomWindowHeight) + "px;float: left;background-size: " + i.largeWidth / i.currentZoomLevel + "px " + i.largeHeight / i.currentZoomLevel + "px;display: none;z-index:100;border: " + String(i.options.borderSize) + "px solid " + i.options.borderColour + ";background-repeat: no-repeat;position: absolute;"), "inner" == i.options.zoomType) {
                var t = i.$elem.css("border-left-width");
                i.zoomWindowStyle = "overflow: hidden;margin-left: " + String(t) + ";margin-top: " + String(t) + ";background-position: 0px 0px;width: " + String(i.nzWidth) + "px;height: " + String(i.nzHeight) + "px;float: left;display: none;cursor:" + i.options.cursor + ";px solid " + i.options.borderColour + ";background-repeat: no-repeat;position: absolute;"
            }
            "window" == i.options.zoomType && (lensHeight = i.nzHeight < i.options.zoomWindowWidth / i.widthRatio ? i.nzHeight : String(i.options.zoomWindowHeight / i.heightRatio), lensWidth = i.largeWidth < i.options.zoomWindowWidth ? i.nzWidth : i.options.zoomWindowWidth / i.widthRatio, i.lensStyle = "background-position: 0px 0px;width: " + String(i.options.zoomWindowWidth / i.widthRatio) + "px;height: " + String(i.options.zoomWindowHeight / i.heightRatio) + "px;float: right;display: none;overflow: hidden;z-index: 999;-webkit-transform: translateZ(0);opacity:" + i.options.lensOpacity + ";filter: alpha(opacity = " + 100 * i.options.lensOpacity + "); zoom:1;width:" + lensWidth + "px;height:" + lensHeight + "px;background-color:" + i.options.lensColour + ";cursor:" + i.options.cursor + ";border: " + i.options.lensBorderSize + "px solid " + i.options.lensBorderColour + ";background-repeat: no-repeat;position: absolute;"), i.tintStyle = "display: block;position: absolute;background-color: " + i.options.tintColour + ";filter:alpha(opacity=0);opacity: 0;width: " + i.nzWidth + "px;height: " + i.nzHeight + "px;", i.lensRound = "", "lens" == i.options.zoomType && (i.lensStyle = "background-position: 0px 0px;float: left;display: none;border: " + String(i.options.borderSize) + "px solid " + i.options.borderColour + ";width:" + String(i.options.lensSize) + "px;height:" + String(i.options.lensSize) + "px;background-repeat: no-repeat;position: absolute;"), "round" == i.options.lensShape && (i.lensRound = "border-top-left-radius: " + String(i.options.lensSize / 2 + i.options.borderSize) + "px;border-top-right-radius: " + String(i.options.lensSize / 2 + i.options.borderSize) + "px;border-bottom-left-radius: " + String(i.options.lensSize / 2 + i.options.borderSize) + "px;border-bottom-right-radius: " + String(i.options.lensSize / 2 + i.options.borderSize) + "px;"), i.zoomContainer = o('<div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:' + i.nzOffset.left + "px;top:" + i.nzOffset.top + "px;height:" + i.nzHeight + "px;width:" + i.nzWidth + 'px;"></div>'), o("body").append(i.zoomContainer), i.options.containLensZoom && "lens" == i.options.zoomType && i.zoomContainer.css("overflow", "hidden"), "inner" != i.options.zoomType && (i.zoomLens = o("<div class='zoomLens' style='" + i.lensStyle + i.lensRound + "'>&nbsp;</div>").appendTo(i.zoomContainer).click(function () {
                i.$elem.trigger("click")
            }), i.options.tint && (i.tintContainer = o("<div/>").addClass("tintContainer"), i.zoomTint = o("<div class='zoomTint' style='" + i.tintStyle + "'></div>"), i.zoomLens.wrap(i.tintContainer), i.zoomTintcss = i.zoomLens.after(i.zoomTint), i.zoomTintImage = o('<img style="position: absolute; left: 0px; top: 0px; max-width: none; width: ' + i.nzWidth + "px; height: " + i.nzHeight + 'px;" src="' + i.imageSrc + '">').appendTo(i.zoomLens).click(function () {
                i.$elem.trigger("click")
            }))), i.zoomWindow = isNaN(i.options.zoomWindowPosition) ? o("<div style='z-index:999;left:" + i.windowOffsetLeft + "px;top:" + i.windowOffsetTop + "px;" + i.zoomWindowStyle + "' class='zoomWindow'>&nbsp;</div>").appendTo("body").click(function () {
                i.$elem.trigger("click")
            }) : o("<div style='z-index:999;left:" + i.windowOffsetLeft + "px;top:" + i.windowOffsetTop + "px;" + i.zoomWindowStyle + "' class='zoomWindow'>&nbsp;</div>").appendTo(i.zoomContainer).click(function () {
                i.$elem.trigger("click")
            }), i.zoomWindowContainer = o("<div/>").addClass("zoomWindowContainer").css("width", i.options.zoomWindowWidth), i.zoomWindow.wrap(i.zoomWindowContainer), "lens" == i.options.zoomType && i.zoomLens.css({backgroundImage: "url('" + i.imageSrc + "')"}), "window" == i.options.zoomType && i.zoomWindow.css({backgroundImage: "url('" + i.imageSrc + "')"}), "inner" == i.options.zoomType && i.zoomWindow.css({backgroundImage: "url('" + i.imageSrc + "')"}), i.$elem.bind("touchmove", function (o) {
                o.preventDefault(), i.setPosition(o.originalEvent.touches[0] || o.originalEvent.changedTouches[0])
            }), i.zoomContainer.bind("touchmove", function (o) {
                "inner" == i.options.zoomType && i.showHideWindow("show"), o.preventDefault(), i.setPosition(o.originalEvent.touches[0] || o.originalEvent.changedTouches[0])
            }), i.zoomContainer.bind("touchend", function () {
                i.showHideWindow("hide"), i.options.showLens && i.showHideLens("hide"), i.options.tint && "inner" != i.options.zoomType && i.showHideTint("hide")
            }), i.$elem.bind("touchend", function () {
                i.showHideWindow("hide"), i.options.showLens && i.showHideLens("hide"), i.options.tint && "inner" != i.options.zoomType && i.showHideTint("hide")
            }), i.options.showLens && (i.zoomLens.bind("touchmove", function (o) {
                o.preventDefault(), i.setPosition(o.originalEvent.touches[0] || o.originalEvent.changedTouches[0])
            }), i.zoomLens.bind("touchend", function () {
                i.showHideWindow("hide"), i.options.showLens && i.showHideLens("hide"), i.options.tint && "inner" != i.options.zoomType && i.showHideTint("hide")
            })), i.$elem.bind("mousemove", function (o) {
                0 == i.overWindow && i.setElements("show"), (i.lastX !== o.clientX || i.lastY !== o.clientY) && (i.setPosition(o), i.currentLoc = o), i.lastX = o.clientX, i.lastY = o.clientY
            }), i.zoomContainer.bind("mousemove", function (o) {
                0 == i.overWindow && i.setElements("show"), (i.lastX !== o.clientX || i.lastY !== o.clientY) && (i.setPosition(o), i.currentLoc = o), i.lastX = o.clientX, i.lastY = o.clientY
            }), "inner" != i.options.zoomType && i.zoomLens.bind("mousemove", function (o) {
                (i.lastX !== o.clientX || i.lastY !== o.clientY) && (i.setPosition(o), i.currentLoc = o), i.lastX = o.clientX, i.lastY = o.clientY
            }), i.options.tint && "inner" != i.options.zoomType && i.zoomTint.bind("mousemove", function (o) {
                (i.lastX !== o.clientX || i.lastY !== o.clientY) && (i.setPosition(o), i.currentLoc = o), i.lastX = o.clientX, i.lastY = o.clientY
            }), "inner" == i.options.zoomType && i.zoomWindow.bind("mousemove", function (o) {
                (i.lastX !== o.clientX || i.lastY !== o.clientY) && (i.setPosition(o), i.currentLoc = o), i.lastX = o.clientX, i.lastY = o.clientY
            }), i.zoomContainer.add(i.$elem).mouseenter(function () {
                0 == i.overWindow && i.setElements("show")
            }).mouseleave(function () {
                i.scrollLock || i.setElements("hide")
            }), "inner" != i.options.zoomType && i.zoomWindow.mouseenter(function () {
                i.overWindow = !0, i.setElements("hide")
            }).mouseleave(function () {
                i.overWindow = !1
            }), i.minZoomLevel = i.options.minZoomLevel ? i.options.minZoomLevel : 2 * i.options.scrollZoomIncrement, i.options.scrollZoom && i.zoomContainer.add(i.$elem).bind("mousewheel DOMMouseScroll MozMousePixelScroll", function (t) {
                i.scrollLock = !0, clearTimeout(o.data(this, "timer")), o.data(this, "timer", setTimeout(function () {
                    i.scrollLock = !1
                }, 250));
                var e = t.originalEvent.wheelDelta || -1 * t.originalEvent.detail;
                return t.stopImmediatePropagation(), t.stopPropagation(), t.preventDefault(), e / 120 > 0 ? i.currentZoomLevel >= i.minZoomLevel && i.changeZoomLevel(i.currentZoomLevel - i.options.scrollZoomIncrement) : i.options.maxZoomLevel ? i.currentZoomLevel <= i.options.maxZoomLevel && i.changeZoomLevel(parseFloat(i.currentZoomLevel) + i.options.scrollZoomIncrement) : i.changeZoomLevel(parseFloat(i.currentZoomLevel) + i.options.scrollZoomIncrement), !1
            })
        }, setElements: function (o) {
            return this.options.zoomEnabled ? ("show" == o && this.isWindowSet && ("inner" == this.options.zoomType && this.showHideWindow("show"), "window" == this.options.zoomType && this.showHideWindow("show"), this.options.showLens && this.showHideLens("show"), this.options.tint && "inner" != this.options.zoomType && this.showHideTint("show")), void("hide" == o && ("window" == this.options.zoomType && this.showHideWindow("hide"), this.options.tint || this.showHideWindow("hide"), this.options.showLens && this.showHideLens("hide"), this.options.tint && this.showHideTint("hide")))) : !1
        }, setPosition: function (o) {
            return this.options.zoomEnabled ? (this.nzHeight = this.$elem.height(), this.nzWidth = this.$elem.width(), this.nzOffset = this.$elem.offset(), this.options.tint && "inner" != this.options.zoomType && (this.zoomTint.css({top: 0}), this.zoomTint.css({left: 0})), this.options.responsive && !this.options.scrollZoom && this.options.showLens && (lensHeight = this.nzHeight < this.options.zoomWindowWidth / this.widthRatio ? this.nzHeight : String(this.options.zoomWindowHeight / this.heightRatio), lensWidth = this.largeWidth < this.options.zoomWindowWidth ? this.nzWidth : this.options.zoomWindowWidth / this.widthRatio, this.widthRatio = this.largeWidth / this.nzWidth, this.heightRatio = this.largeHeight / this.nzHeight, "lens" != this.options.zoomType && (lensHeight = this.nzHeight < this.options.zoomWindowWidth / this.widthRatio ? this.nzHeight : String(this.options.zoomWindowHeight / this.heightRatio), lensWidth = this.options.zoomWindowWidth < this.options.zoomWindowWidth ? this.nzWidth : this.options.zoomWindowWidth / this.widthRatio, this.zoomLens.css("width", lensWidth), this.zoomLens.css("height", lensHeight), this.options.tint && (this.zoomTintImage.css("width", this.nzWidth), this.zoomTintImage.css("height", this.nzHeight))), "lens" == this.options.zoomType && this.zoomLens.css({
                width: String(this.options.lensSize) + "px",
                height: String(this.options.lensSize) + "px"
            })), this.zoomContainer.css({top: this.nzOffset.top}), this.zoomContainer.css({left: this.nzOffset.left}), this.mouseLeft = parseInt(o.pageX - this.nzOffset.left), this.mouseTop = parseInt(o.pageY - this.nzOffset.top), "window" == this.options.zoomType && (this.Etoppos = this.mouseTop < this.zoomLens.height() / 2, this.Eboppos = this.mouseTop > this.nzHeight - this.zoomLens.height() / 2 - 2 * this.options.lensBorderSize, this.Eloppos = this.mouseLeft < 0 + this.zoomLens.width() / 2, this.Eroppos = this.mouseLeft > this.nzWidth - this.zoomLens.width() / 2 - 2 * this.options.lensBorderSize), "inner" == this.options.zoomType && (this.Etoppos = this.mouseTop < this.nzHeight / 2 / this.heightRatio, this.Eboppos = this.mouseTop > this.nzHeight - this.nzHeight / 2 / this.heightRatio, this.Eloppos = this.mouseLeft < 0 + this.nzWidth / 2 / this.widthRatio, this.Eroppos = this.mouseLeft > this.nzWidth - this.nzWidth / 2 / this.widthRatio - 2 * this.options.lensBorderSize), void(0 >= this.mouseLeft || 0 > this.mouseTop || this.mouseLeft > this.nzWidth || this.mouseTop > this.nzHeight ? this.setElements("hide") : (this.options.showLens && (this.lensLeftPos = String(this.mouseLeft - this.zoomLens.width() / 2), this.lensTopPos = String(this.mouseTop - this.zoomLens.height() / 2)), this.Etoppos && (this.lensTopPos = 0), this.Eloppos && (this.tintpos = this.lensLeftPos = this.windowLeftPos = 0), "window" == this.options.zoomType && (this.Eboppos && (this.lensTopPos = Math.max(this.nzHeight - this.zoomLens.height() - 2 * this.options.lensBorderSize, 0)), this.Eroppos && (this.lensLeftPos = this.nzWidth - this.zoomLens.width() - 2 * this.options.lensBorderSize)), "inner" == this.options.zoomType && (this.Eboppos && (this.lensTopPos = Math.max(this.nzHeight - 2 * this.options.lensBorderSize, 0)), this.Eroppos && (this.lensLeftPos = this.nzWidth - this.nzWidth - 2 * this.options.lensBorderSize)), "lens" == this.options.zoomType && (this.windowLeftPos = String(-1 * ((o.pageX - this.nzOffset.left) * this.widthRatio - this.zoomLens.width() / 2)), this.windowTopPos = String(-1 * ((o.pageY - this.nzOffset.top) * this.heightRatio - this.zoomLens.height() / 2)), this.zoomLens.css({backgroundPosition: this.windowLeftPos + "px " + this.windowTopPos + "px"}), this.changeBgSize && (this.nzHeight > this.nzWidth ? ("lens" == this.options.zoomType && this.zoomLens.css({"background-size": this.largeWidth / this.newvalueheight + "px " + this.largeHeight / this.newvalueheight + "px"}), this.zoomWindow.css({"background-size": this.largeWidth / this.newvalueheight + "px " + this.largeHeight / this.newvalueheight + "px"})) : ("lens" == this.options.zoomType && this.zoomLens.css({"background-size": this.largeWidth / this.newvaluewidth + "px " + this.largeHeight / this.newvaluewidth + "px"}), this.zoomWindow.css({"background-size": this.largeWidth / this.newvaluewidth + "px " + this.largeHeight / this.newvaluewidth + "px"})), this.changeBgSize = !1), this.setWindowPostition(o)), this.options.tint && "inner" != this.options.zoomType && this.setTintPosition(o), "window" == this.options.zoomType && this.setWindowPostition(o), "inner" == this.options.zoomType && this.setWindowPostition(o), this.options.showLens && (this.fullwidth && "lens" != this.options.zoomType && (this.lensLeftPos = 0), this.zoomLens.css({
                left: this.lensLeftPos + "px",
                top: this.lensTopPos + "px"
            }))))) : !1
        }, showHideWindow: function (o) {
            "show" != o || this.isWindowActive || (this.options.zoomWindowFadeIn ? this.zoomWindow.stop(!0, !0, !1).fadeIn(this.options.zoomWindowFadeIn) : this.zoomWindow.show(), this.isWindowActive = !0), "hide" == o && this.isWindowActive && (this.options.zoomWindowFadeOut ? this.zoomWindow.stop(!0, !0).fadeOut(this.options.zoomWindowFadeOut) : this.zoomWindow.hide(), this.isWindowActive = !1)
        }, showHideLens: function (o) {
            "show" != o || this.isLensActive || (this.options.lensFadeIn ? this.zoomLens.stop(!0, !0, !1).fadeIn(this.options.lensFadeIn) : this.zoomLens.show(), this.isLensActive = !0), "hide" == o && this.isLensActive && (this.options.lensFadeOut ? this.zoomLens.stop(!0, !0).fadeOut(this.options.lensFadeOut) : this.zoomLens.hide(), this.isLensActive = !1)
        }, showHideTint: function (o) {
            "show" != o || this.isTintActive || (this.options.zoomTintFadeIn ? this.zoomTint.css({opacity: this.options.tintOpacity}).animate().stop(!0, !0).fadeIn("slow") : (this.zoomTint.css({opacity: this.options.tintOpacity}).animate(), this.zoomTint.show()), this.isTintActive = !0), "hide" == o && this.isTintActive && (this.options.zoomTintFadeOut ? this.zoomTint.stop(!0, !0).fadeOut(this.options.zoomTintFadeOut) : this.zoomTint.hide(), this.isTintActive = !1)
        }, setLensPostition: function () {
        }, setWindowPostition: function (i) {
            var t = this;
            if (isNaN(t.options.zoomWindowPosition)) t.externalContainer = o("#" + t.options.zoomWindowPosition), t.externalContainerWidth = t.externalContainer.width(), t.externalContainerHeight = t.externalContainer.height(), t.externalContainerOffset = t.externalContainer.offset(), t.windowOffsetTop = t.externalContainerOffset.top, t.windowOffsetLeft = t.externalContainerOffset.left; else switch (t.options.zoomWindowPosition) {
                case 1:
                    t.windowOffsetTop = t.options.zoomWindowOffety, t.windowOffsetLeft = +t.nzWidth;
                    break;
                case 2:
                    t.options.zoomWindowHeight > t.nzHeight && (t.windowOffsetTop = -1 * (t.options.zoomWindowHeight / 2 - t.nzHeight / 2), t.windowOffsetLeft = t.nzWidth);
                    break;
                case 3:
                    t.windowOffsetTop = t.nzHeight - t.zoomWindow.height() - 2 * t.options.borderSize, t.windowOffsetLeft = t.nzWidth;
                    break;
                case 4:
                    t.windowOffsetTop = t.nzHeight, t.windowOffsetLeft = t.nzWidth;
                    break;
                case 5:
                    t.windowOffsetTop = t.nzHeight, t.windowOffsetLeft = t.nzWidth - t.zoomWindow.width() - 2 * t.options.borderSize;
                    break;
                case 6:
                    t.options.zoomWindowHeight > t.nzHeight && (t.windowOffsetTop = t.nzHeight, t.windowOffsetLeft = -1 * (t.options.zoomWindowWidth / 2 - t.nzWidth / 2 + 2 * t.options.borderSize));
                    break;
                case 7:
                    t.windowOffsetTop = t.nzHeight, t.windowOffsetLeft = 0;
                    break;
                case 8:
                    t.windowOffsetTop = t.nzHeight, t.windowOffsetLeft = -1 * (t.zoomWindow.width() + 2 * t.options.borderSize);
                    break;
                case 9:
                    t.windowOffsetTop = t.nzHeight - t.zoomWindow.height() - 2 * t.options.borderSize, t.windowOffsetLeft = -1 * (t.zoomWindow.width() + 2 * t.options.borderSize);
                    break;
                case 10:
                    t.options.zoomWindowHeight > t.nzHeight && (t.windowOffsetTop = -1 * (t.options.zoomWindowHeight / 2 - t.nzHeight / 2), t.windowOffsetLeft = -1 * (t.zoomWindow.width() + 2 * t.options.borderSize));
                    break;
                case 11:
                    t.windowOffsetTop = t.options.zoomWindowOffety, t.windowOffsetLeft = -1 * (t.zoomWindow.width() + 2 * t.options.borderSize);
                    break;
                case 12:
                    t.windowOffsetTop = -1 * (t.zoomWindow.height() + 2 * t.options.borderSize), t.windowOffsetLeft = -1 * (t.zoomWindow.width() + 2 * t.options.borderSize);
                    break;
                case 13:
                    t.windowOffsetTop = -1 * (t.zoomWindow.height() + 2 * t.options.borderSize), t.windowOffsetLeft = 0;
                    break;
                case 14:
                    t.options.zoomWindowHeight > t.nzHeight && (t.windowOffsetTop = -1 * (t.zoomWindow.height() + 2 * t.options.borderSize), t.windowOffsetLeft = -1 * (t.options.zoomWindowWidth / 2 - t.nzWidth / 2 + 2 * t.options.borderSize));
                    break;
                case 15:
                    t.windowOffsetTop = -1 * (t.zoomWindow.height() + 2 * t.options.borderSize), t.windowOffsetLeft = t.nzWidth - t.zoomWindow.width() - 2 * t.options.borderSize;
                    break;
                case 16:
                    t.windowOffsetTop = -1 * (t.zoomWindow.height() + 2 * t.options.borderSize), t.windowOffsetLeft = t.nzWidth;
                    break;
                default:
                    t.windowOffsetTop = t.options.zoomWindowOffety, t.windowOffsetLeft = t.nzWidth
            }
            t.isWindowSet = !0, t.windowOffsetTop += t.options.zoomWindowOffety, t.windowOffsetLeft += t.options.zoomWindowOffetx, t.zoomWindow.css({top: t.windowOffsetTop}), t.zoomWindow.css({left: t.windowOffsetLeft}), "inner" == t.options.zoomType && (t.zoomWindow.css({top: 0}), t.zoomWindow.css({left: 0})), t.windowLeftPos = String(-1 * ((i.pageX - t.nzOffset.left) * t.widthRatio - t.zoomWindow.width() / 2)), t.windowTopPos = String(-1 * ((i.pageY - t.nzOffset.top) * t.heightRatio - t.zoomWindow.height() / 2)), t.Etoppos && (t.windowTopPos = 0), t.Eloppos && (t.windowLeftPos = 0), t.Eboppos && (t.windowTopPos = -1 * (t.largeHeight / t.currentZoomLevel - t.zoomWindow.height())), t.Eroppos && (t.windowLeftPos = -1 * (t.largeWidth / t.currentZoomLevel - t.zoomWindow.width())), t.fullheight && (t.windowTopPos = 0), t.fullwidth && (t.windowLeftPos = 0), ("window" == t.options.zoomType || "inner" == t.options.zoomType) && (1 == t.zoomLock && (1 >= t.widthRatio && (t.windowLeftPos = 0), 1 >= t.heightRatio && (t.windowTopPos = 0)), t.largeHeight < t.options.zoomWindowHeight && (t.windowTopPos = 0), t.largeWidth < t.options.zoomWindowWidth && (t.windowLeftPos = 0), t.options.easing ? (t.xp || (t.xp = 0), t.yp || (t.yp = 0), t.loop || (t.loop = setInterval(function () {
                t.xp += (t.windowLeftPos - t.xp) / t.options.easingAmount, t.yp += (t.windowTopPos - t.yp) / t.options.easingAmount, t.scrollingLock ? (clearInterval(t.loop), t.xp = t.windowLeftPos, t.yp = t.windowTopPos, t.xp = -1 * ((i.pageX - t.nzOffset.left) * t.widthRatio - t.zoomWindow.width() / 2), t.yp = -1 * ((i.pageY - t.nzOffset.top) * t.heightRatio - t.zoomWindow.height() / 2), t.changeBgSize && (t.nzHeight > t.nzWidth ? ("lens" == t.options.zoomType && t.zoomLens.css({"background-size": t.largeWidth / t.newvalueheight + "px " + t.largeHeight / t.newvalueheight + "px"}), t.zoomWindow.css({"background-size": t.largeWidth / t.newvalueheight + "px " + t.largeHeight / t.newvalueheight + "px"})) : ("lens" != t.options.zoomType && t.zoomLens.css({"background-size": t.largeWidth / t.newvaluewidth + "px " + t.largeHeight / t.newvalueheight + "px"}), t.zoomWindow.css({"background-size": t.largeWidth / t.newvaluewidth + "px " + t.largeHeight / t.newvaluewidth + "px"})), t.changeBgSize = !1), t.zoomWindow.css({backgroundPosition: t.windowLeftPos + "px " + t.windowTopPos + "px"}), t.scrollingLock = !1, t.loop = !1) : (t.changeBgSize && (t.nzHeight > t.nzWidth ? ("lens" == t.options.zoomType && t.zoomLens.css({"background-size": t.largeWidth / t.newvalueheight + "px " + t.largeHeight / t.newvalueheight + "px"}), t.zoomWindow.css({"background-size": t.largeWidth / t.newvalueheight + "px " + t.largeHeight / t.newvalueheight + "px"})) : ("lens" != t.options.zoomType && t.zoomLens.css({"background-size": t.largeWidth / t.newvaluewidth + "px " + t.largeHeight / t.newvaluewidth + "px"}), t.zoomWindow.css({"background-size": t.largeWidth / t.newvaluewidth + "px " + t.largeHeight / t.newvaluewidth + "px"})), t.changeBgSize = !1), t.zoomWindow.css({backgroundPosition: t.xp + "px " + t.yp + "px"}))
            }, 16))) : (t.changeBgSize && (t.nzHeight > t.nzWidth ? ("lens" == t.options.zoomType && t.zoomLens.css({"background-size": t.largeWidth / t.newvalueheight + "px " + t.largeHeight / t.newvalueheight + "px"}), t.zoomWindow.css({"background-size": t.largeWidth / t.newvalueheight + "px " + t.largeHeight / t.newvalueheight + "px"})) : ("lens" == t.options.zoomType && t.zoomLens.css({"background-size": t.largeWidth / t.newvaluewidth + "px " + t.largeHeight / t.newvaluewidth + "px"}), t.zoomWindow.css(t.largeHeight / t.newvaluewidth < t.options.zoomWindowHeight ? {"background-size": t.largeWidth / t.newvaluewidth + "px " + t.largeHeight / t.newvaluewidth + "px"} : {"background-size": t.largeWidth / t.newvalueheight + "px " + t.largeHeight / t.newvalueheight + "px"})), t.changeBgSize = !1), t.zoomWindow.css({backgroundPosition: t.windowLeftPos + "px " + t.windowTopPos + "px"})))
        }, setTintPosition: function (o) {
            this.nzOffset = this.$elem.offset(), this.tintpos = String(-1 * (o.pageX - this.nzOffset.left - this.zoomLens.width() / 2)), this.tintposy = String(-1 * (o.pageY - this.nzOffset.top - this.zoomLens.height() / 2)), this.Etoppos && (this.tintposy = 0), this.Eloppos && (this.tintpos = 0), this.Eboppos && (this.tintposy = -1 * (this.nzHeight - this.zoomLens.height() - 2 * this.options.lensBorderSize)), this.Eroppos && (this.tintpos = -1 * (this.nzWidth - this.zoomLens.width() - 2 * this.options.lensBorderSize)), this.options.tint && (this.fullheight && (this.tintposy = 0), this.fullwidth && (this.tintpos = 0), this.zoomTintImage.css({left: this.tintpos + "px"}), this.zoomTintImage.css({top: this.tintposy + "px"}))
        }, swaptheimage: function (i, t) {
            var e = this, n = new Image;
            e.options.loadingIcon && (e.spinner = o("<div style=\"background: url('" + e.options.loadingIcon + "') no-repeat center;height:" + e.nzHeight + "px;width:" + e.nzWidth + 'px;z-index: 2000;position: absolute; background-position: center center;"></div>'), e.$elem.after(e.spinner)), e.options.onImageSwap(e.$elem), n.onload = function () {
                e.largeWidth = n.width, e.largeHeight = n.height, e.zoomImage = t, e.zoomWindow.css({"background-size": e.largeWidth + "px " + e.largeHeight + "px"}), e.zoomWindow.css({"background-size": e.largeWidth + "px " + e.largeHeight + "px"}), e.swapAction(i, t)
            }, n.src = t
        }, swapAction: function (i, t) {
            var e = this, n = new Image;
            if (n.onload = function () {
                    e.nzHeight = n.height, e.nzWidth = n.width, e.options.onImageSwapComplete(e.$elem), e.doneCallback()
                }, n.src = i, e.currentZoomLevel = e.options.zoomLevel, e.options.maxZoomLevel = !1, "lens" == e.options.zoomType && e.zoomLens.css({backgroundImage: "url('" + t + "')"}), "window" == e.options.zoomType && e.zoomWindow.css({backgroundImage: "url('" + t + "')"}), "inner" == e.options.zoomType && e.zoomWindow.css({backgroundImage: "url('" + t + "')"}), e.currentImage = t, e.options.imageCrossfade) {
                var s = e.$elem, h = s.clone();
                e.$elem.attr("src", i), e.$elem.after(h), h.stop(!0).fadeOut(e.options.imageCrossfade, function () {
                    o(this).remove()
                }), e.$elem.width("auto").removeAttr("width"), e.$elem.height("auto").removeAttr("height"), s.fadeIn(e.options.imageCrossfade), e.options.tint && "inner" != e.options.zoomType && (s = e.zoomTintImage, h = s.clone(), e.zoomTintImage.attr("src", t), e.zoomTintImage.after(h), h.stop(!0).fadeOut(e.options.imageCrossfade, function () {
                    o(this).remove()
                }), s.fadeIn(e.options.imageCrossfade), e.zoomTint.css({height: e.$elem.height()}), e.zoomTint.css({width: e.$elem.width()})), e.zoomContainer.css("height", e.$elem.height()), e.zoomContainer.css("width", e.$elem.width()), "inner" != e.options.zoomType || e.options.constrainType || (e.zoomWrap.parent().css("height", e.$elem.height()), e.zoomWrap.parent().css("width", e.$elem.width()), e.zoomWindow.css("height", e.$elem.height()), e.zoomWindow.css("width", e.$elem.width()))
            } else e.$elem.attr("src", i), e.options.tint && (e.zoomTintImage.attr("src", t), e.zoomTintImage.attr("height", e.$elem.height()), e.zoomTintImage.css({height: e.$elem.height()}), e.zoomTint.css({height: e.$elem.height()})), e.zoomContainer.css("height", e.$elem.height()), e.zoomContainer.css("width", e.$elem.width());
            e.options.imageCrossfade && (e.zoomWrap.css("height", e.$elem.height()), e.zoomWrap.css("width", e.$elem.width())), e.options.constrainType && ("height" == e.options.constrainType && (e.zoomContainer.css("height", e.options.constrainSize), e.zoomContainer.css("width", "auto"), e.options.imageCrossfade ? (e.zoomWrap.css("height", e.options.constrainSize), e.zoomWrap.css("width", "auto"), e.constwidth = e.zoomWrap.width()) : (e.$elem.css("height", e.options.constrainSize), e.$elem.css("width", "auto"), e.constwidth = e.$elem.width()), "inner" == e.options.zoomType && (e.zoomWrap.parent().css("height", e.options.constrainSize), e.zoomWrap.parent().css("width", e.constwidth), e.zoomWindow.css("height", e.options.constrainSize), e.zoomWindow.css("width", e.constwidth)), e.options.tint && (e.tintContainer.css("height", e.options.constrainSize), e.tintContainer.css("width", e.constwidth), e.zoomTint.css("height", e.options.constrainSize), e.zoomTint.css("width", e.constwidth), e.zoomTintImage.css("height", e.options.constrainSize), e.zoomTintImage.css("width", e.constwidth))), "width" == e.options.constrainType && (e.zoomContainer.css("height", "auto"), e.zoomContainer.css("width", e.options.constrainSize), e.options.imageCrossfade ? (e.zoomWrap.css("height", "auto"), e.zoomWrap.css("width", e.options.constrainSize), e.constheight = e.zoomWrap.height()) : (e.$elem.css("height", "auto"), e.$elem.css("width", e.options.constrainSize), e.constheight = e.$elem.height()), "inner" == e.options.zoomType && (e.zoomWrap.parent().css("height", e.constheight), e.zoomWrap.parent().css("width", e.options.constrainSize), e.zoomWindow.css("height", e.constheight), e.zoomWindow.css("width", e.options.constrainSize)), e.options.tint && (e.tintContainer.css("height", e.constheight), e.tintContainer.css("width", e.options.constrainSize), e.zoomTint.css("height", e.constheight), e.zoomTint.css("width", e.options.constrainSize), e.zoomTintImage.css("height", e.constheight), e.zoomTintImage.css("width", e.options.constrainSize))))
        }, doneCallback: function () {
            this.options.loadingIcon && this.spinner.hide(), this.nzOffset = this.$elem.offset(), this.nzWidth = this.$elem.width(), this.nzHeight = this.$elem.height(), this.currentZoomLevel = this.options.zoomLevel, this.widthRatio = this.largeWidth / this.nzWidth, this.heightRatio = this.largeHeight / this.nzHeight, "window" == this.options.zoomType && (lensHeight = this.nzHeight < this.options.zoomWindowWidth / this.widthRatio ? this.nzHeight : String(this.options.zoomWindowHeight / this.heightRatio), lensWidth = this.options.zoomWindowWidth < this.options.zoomWindowWidth ? this.nzWidth : this.options.zoomWindowWidth / this.widthRatio, this.zoomLens && (this.zoomLens.css("width", lensWidth), this.zoomLens.css("height", lensHeight)))
        }, getCurrentImage: function () {
            return this.zoomImage
        }, getGalleryList: function () {
            var i = this;
            return i.gallerylist = [], i.options.gallery ? o("#" + i.options.gallery + " a").each(function () {
                var t = "";
                o(this).data("zoom-image") ? t = o(this).data("zoom-image") : o(this).data("image") && (t = o(this).data("image")), t == i.zoomImage ? i.gallerylist.unshift({
                    href: "" + t,
                    title: o(this).find("img").attr("title")
                }) : i.gallerylist.push({href: "" + t, title: o(this).find("img").attr("title")})
            }) : i.gallerylist.push({href: "" + i.zoomImage, title: o(this).find("img").attr("title")}), i.gallerylist
        }, changeZoomLevel: function (o) {
            this.scrollingLock = !0, this.newvalue = parseFloat(o).toFixed(2), newvalue = parseFloat(o).toFixed(2), maxheightnewvalue = this.largeHeight / (this.options.zoomWindowHeight / this.nzHeight * this.nzHeight), maxwidthtnewvalue = this.largeWidth / (this.options.zoomWindowWidth / this.nzWidth * this.nzWidth), "inner" != this.options.zoomType && (maxheightnewvalue <= newvalue ? (this.heightRatio = this.largeHeight / maxheightnewvalue / this.nzHeight, this.newvalueheight = maxheightnewvalue, this.fullheight = !0) : (this.heightRatio = this.largeHeight / newvalue / this.nzHeight, this.newvalueheight = newvalue, this.fullheight = !1), maxwidthtnewvalue <= newvalue ? (this.widthRatio = this.largeWidth / maxwidthtnewvalue / this.nzWidth, this.newvaluewidth = maxwidthtnewvalue, this.fullwidth = !0) : (this.widthRatio = this.largeWidth / newvalue / this.nzWidth, this.newvaluewidth = newvalue, this.fullwidth = !1), "lens" == this.options.zoomType && (maxheightnewvalue <= newvalue ? (this.fullwidth = !0, this.newvaluewidth = maxheightnewvalue) : (this.widthRatio = this.largeWidth / newvalue / this.nzWidth, this.newvaluewidth = newvalue, this.fullwidth = !1))), "inner" == this.options.zoomType && (maxheightnewvalue = parseFloat(this.largeHeight / this.nzHeight).toFixed(2), maxwidthtnewvalue = parseFloat(this.largeWidth / this.nzWidth).toFixed(2), newvalue > maxheightnewvalue && (newvalue = maxheightnewvalue), newvalue > maxwidthtnewvalue && (newvalue = maxwidthtnewvalue), maxheightnewvalue <= newvalue ? (this.heightRatio = this.largeHeight / newvalue / this.nzHeight, this.newvalueheight = newvalue > maxheightnewvalue ? maxheightnewvalue : newvalue, this.fullheight = !0) : (this.heightRatio = this.largeHeight / newvalue / this.nzHeight, this.newvalueheight = newvalue > maxheightnewvalue ? maxheightnewvalue : newvalue, this.fullheight = !1), maxwidthtnewvalue <= newvalue ? (this.widthRatio = this.largeWidth / newvalue / this.nzWidth, this.newvaluewidth = newvalue > maxwidthtnewvalue ? maxwidthtnewvalue : newvalue, this.fullwidth = !0) : (this.widthRatio = this.largeWidth / newvalue / this.nzWidth, this.newvaluewidth = newvalue, this.fullwidth = !1)), scrcontinue = !1, "inner" == this.options.zoomType && (this.nzWidth > this.nzHeight && (this.newvaluewidth <= maxwidthtnewvalue ? scrcontinue = !0 : (scrcontinue = !1, this.fullwidth = this.fullheight = !0)), this.nzHeight > this.nzWidth && (this.newvaluewidth <= maxwidthtnewvalue ? scrcontinue = !0 : (scrcontinue = !1, this.fullwidth = this.fullheight = !0))), "inner" != this.options.zoomType && (scrcontinue = !0), scrcontinue && (this.zoomLock = 0, this.changeZoom = !0, this.options.zoomWindowHeight / this.heightRatio <= this.nzHeight && (this.currentZoomLevel = this.newvalueheight, "lens" != this.options.zoomType && "inner" != this.options.zoomType && (this.changeBgSize = !0, this.zoomLens.css({height: String(this.options.zoomWindowHeight / this.heightRatio) + "px"})), "lens" == this.options.zoomType || "inner" == this.options.zoomType) && (this.changeBgSize = !0), this.options.zoomWindowWidth / this.widthRatio <= this.nzWidth && ("inner" != this.options.zoomType && this.newvaluewidth > this.newvalueheight && (this.currentZoomLevel = this.newvaluewidth), "lens" != this.options.zoomType && "inner" != this.options.zoomType && (this.changeBgSize = !0, this.zoomLens.css({width: String(this.options.zoomWindowWidth / this.widthRatio) + "px"})), "lens" == this.options.zoomType || "inner" == this.options.zoomType) && (this.changeBgSize = !0), "inner" == this.options.zoomType && (this.changeBgSize = !0, this.nzWidth > this.nzHeight && (this.currentZoomLevel = this.newvaluewidth), this.nzHeight > this.nzWidth && (this.currentZoomLevel = this.newvaluewidth))), this.setPosition(this.currentLoc)
        }, closeAll: function () {
            self.zoomWindow && self.zoomWindow.hide(), self.zoomLens && self.zoomLens.hide(), self.zoomTint && self.zoomTint.hide()
        }, changeState: function (o) {
            "enable" == o && (this.options.zoomEnabled = !0), "disable" == o && (this.options.zoomEnabled = !1)
        }
    };
    o.fn.elevateZoom = function (t) {
        return this.each(function () {
            var e = Object.create(i);
            e.init(t, this), o.data(this, "elevateZoom", e)
        })
    }, o.fn.elevateZoom.options = {
        zoomActivation: "hover",
        zoomEnabled: !0,
        preloading: 1,
        zoomLevel: 1,
        scrollZoom: !1,
        scrollZoomIncrement: .1,
        minZoomLevel: !1,
        maxZoomLevel: !1,
        easing: !1,
        easingAmount: 12,
        lensSize: 200,
        zoomWindowWidth: 400,
        zoomWindowHeight: 400,
        zoomWindowOffetx: 0,
        zoomWindowOffety: 0,
        zoomWindowPosition: 1,
        zoomWindowBgColour: "#fff",
        lensFadeIn: !1,
        lensFadeOut: !1,
        debug: !1,
        zoomWindowFadeIn: !1,
        zoomWindowFadeOut: !1,
        zoomWindowAlwaysShow: !1,
        zoomTintFadeIn: !1,
        zoomTintFadeOut: !1,
        borderSize: 4,
        showLens: !0,
        borderColour: "#888",
        lensBorderSize: 1,
        lensBorderColour: "#000",
        lensShape: "square",
        zoomType: "window",
        containLensZoom: !1,
        lensColour: "white",
        lensOpacity: .4,
        lenszoom: !1,
        tint: !1,
        tintColour: "#333",
        tintOpacity: .4,
        gallery: !1,
        galleryActiveClass: "zoomGalleryActive",
        imageCrossfade: !1,
        constrainType: !1,
        constrainSize: !1,
        loadingIcon: !1,
        cursor: "default",
        responsive: !0,
        onComplete: o.noop,
        onZoomedImageLoaded: function () {
        },
        onImageSwap: o.noop,
        onImageSwapComplete: o.noop
    }
}(jQuery, window, document);

// jQuery jGrowl v1.4.3 | Licensed under the MIT License
!function (a) {
    a.jGrowl = function (b, c) {
        0 === a("#jGrowl").length && a('<div id="jGrowl"></div>').addClass(c && c.position ? c.position : a.jGrowl.defaults.position).appendTo(c && c.appendTo ? c.appendTo : a.jGrowl.defaults.appendTo), a("#jGrowl").jGrowl(b, c)
    }, a.fn.jGrowl = function (b, c) {
        if (void 0 === c && a.isPlainObject(b) && (c = b, b = c.message), a.isFunction(this.each)) {
            var d = arguments;
            return this.each(function () {
                void 0 === a(this).data("jGrowl.instance") && (a(this).data("jGrowl.instance", a.extend(new a.fn.jGrowl, {
                    notifications: [],
                    element: null,
                    interval: null
                })), a(this).data("jGrowl.instance").startup(this)), a.isFunction(a(this).data("jGrowl.instance")[b]) ? a(this).data("jGrowl.instance")[b].apply(a(this).data("jGrowl.instance"), a.makeArray(d).slice(1)) : a(this).data("jGrowl.instance").create(b, c)
            })
        }
    }, a.extend(a.fn.jGrowl.prototype, {
        defaults: {
            pool: 0,
            header: "",
            group: "",
            sticky: !1,
            position: "top-right",
            appendTo: "body",
            glue: "after",
            theme: "default",
            themeState: "highlight",
            corners: "10px",
            check: 250,
            life: 3e3,
            closeDuration: "normal",
            openDuration: "normal",
            easing: "swing",
            closer: !0,
            closeTemplate: "&times;",
            closerTemplate: "<div>[ close all ]</div>",
            log: function () {
            },
            beforeOpen: function () {
            },
            afterOpen: function () {
            },
            open: function () {
            },
            beforeClose: function () {
            },
            close: function () {
            },
            click: function () {
            },
            animateOpen: {opacity: "show"},
            animateClose: {opacity: "hide"}
        }, notifications: [], element: null, interval: null, create: function (b, c) {
            var d = a.extend({}, this.defaults, c);
            "undefined" != typeof d.speed && (d.openDuration = d.speed, d.closeDuration = d.speed), this.notifications.push({
                message: b,
                options: d
            }), d.log.apply(this.element, [this.element, b, d])
        }, render: function (b) {
            var c = this, d = b.message, e = b.options;
            e.themeState = "" === e.themeState ? "" : "ui-state-" + e.themeState;
            var f = a("<div/>").addClass("jGrowl-notification alert " + e.themeState + " ui-corner-all" + (void 0 !== e.group && "" !== e.group ? " " + e.group : "")).append(a("<button/>").addClass("jGrowl-close").html(e.closeTemplate)).append(a("<div/>").addClass("jGrowl-header").html(e.header)).append(a("<div/>").addClass("jGrowl-message").html(d)).data("jGrowl", e).addClass(e.theme).children(".jGrowl-close").bind("click.jGrowl", function () {
                return a(this).parent().trigger("jGrowl.beforeClose"), !1
            }).parent();
            a(f).bind("mouseover.jGrowl", function () {
                a(".jGrowl-notification", c.element).data("jGrowl.pause", !0)
            }).bind("mouseout.jGrowl", function () {
                a(".jGrowl-notification", c.element).data("jGrowl.pause", !1)
            }).bind("jGrowl.beforeOpen", function () {
                e.beforeOpen.apply(f, [f, d, e, c.element]) !== !1 && a(this).trigger("jGrowl.open")
            }).bind("jGrowl.open", function () {
                e.open.apply(f, [f, d, e, c.element]) !== !1 && ("after" == e.glue ? a(".jGrowl-notification:last", c.element).after(f) : a(".jGrowl-notification:first", c.element).before(f), a(this).animate(e.animateOpen, e.openDuration, e.easing, function () {
                    a.support.opacity === !1 && this.style.removeAttribute("filter"), null !== a(this).data("jGrowl") && "undefined" != typeof a(this).data("jGrowl") && (a(this).data("jGrowl").created = new Date), a(this).trigger("jGrowl.afterOpen")
                }))
            }).bind("jGrowl.afterOpen", function () {
                e.afterOpen.apply(f, [f, d, e, c.element])
            }).bind("click", function () {
                e.click.apply(f, [f.message, e, c.element])
            }).bind("jGrowl.beforeClose", function () {
                e.beforeClose.apply(f, [f, d, e, c.element]) !== !1 && a(this).trigger("jGrowl.close")
            }).bind("jGrowl.close", function () {
                a(this).data("jGrowl.pause", !0), a(this).animate(e.animateClose, e.closeDuration, e.easing, function () {
                    a.isFunction(e.close) ? e.close.apply(f, [f, d, e, c.element]) !== !1 && a(this).remove() : a(this).remove()
                })
            }).trigger("jGrowl.beforeOpen"), "" !== e.corners && void 0 !== a.fn.corner && a(f).corner(e.corners), a(".jGrowl-notification:parent", c.element).length > 1 && 0 === a(".jGrowl-closer", c.element).length && this.defaults.closer !== !1 && a(this.defaults.closerTemplate).addClass("jGrowl-closer " + this.defaults.themeState + " ui-corner-all").addClass(this.defaults.theme).appendTo(c.element).animate(this.defaults.animateOpen, this.defaults.speed, this.defaults.easing).bind("click.jGrowl", function () {
                a(this).siblings().trigger("jGrowl.beforeClose"), a.isFunction(c.defaults.closer) && c.defaults.closer.apply(a(this).parent()[0], [a(this).parent()[0]])
            })
        }, update: function () {
            a(this.element).find(".jGrowl-notification:parent").each(function () {
                void 0 !== a(this).data("jGrowl") && void 0 !== a(this).data("jGrowl").created && a(this).data("jGrowl").created.getTime() + parseInt(a(this).data("jGrowl").life, 10) < (new Date).getTime() && a(this).data("jGrowl").sticky !== !0 && (void 0 === a(this).data("jGrowl.pause") || a(this).data("jGrowl.pause") !== !0) && a(this).trigger("jGrowl.beforeClose")
            }), this.notifications.length > 0 && (0 === this.defaults.pool || a(this.element).find(".jGrowl-notification:parent").length < this.defaults.pool) && this.render(this.notifications.shift()), a(this.element).find(".jGrowl-notification:parent").length < 2 && a(this.element).find(".jGrowl-closer").animate(this.defaults.animateClose, this.defaults.speed, this.defaults.easing, function () {
                a(this).remove()
            })
        }, startup: function (b) {
            this.element = a(b).addClass("jGrowl").append('<div class="jGrowl-notification"></div>'), this.interval = setInterval(function () {
                var c = a(b).data("jGrowl.instance");
                void 0 !== c && c.update()
            }, parseInt(this.defaults.check, 10))
        }, shutdown: function () {
            a(this.element).removeClass("jGrowl").find(".jGrowl-notification").trigger("jGrowl.close").parent().empty(), clearInterval(this.interval)
        }, close: function () {
            a(this.element).find(".jGrowl-notification").each(function () {
                a(this).trigger("jGrowl.beforeClose")
            })
        }
    }), a.jGrowl.defaults = a.fn.jGrowl.prototype.defaults
}(jQuery);


// Magnific Popup - v0.9.9
(function (e) {
    var t, n, i, o, r, a, s, l = "Close", c = "BeforeClose", d = "AfterClose", u = "BeforeAppend", p = "MarkupParse",
        f = "Open", m = "Change", g = "mfp", v = "." + g, h = "mfp-ready", C = "mfp-removing", y = "mfp-prevent-close",
        w = function () {
        }, b = !!window.jQuery, I = e(window), x = function (e, n) {
            t.ev.on(g + e + v, n)
        }, k = function (t, n, i, o) {
            var r = document.createElement("div");
            return r.className = "mfp-" + t, i && (r.innerHTML = i), o ? n && n.appendChild(r) : (r = e(r), n && r.appendTo(n)), r
        }, T = function (n, i) {
            t.ev.triggerHandler(g + n, i), t.st.callbacks && (n = n.charAt(0).toLowerCase() + n.slice(1), t.st.callbacks[n] && t.st.callbacks[n].apply(t, e.isArray(i) ? i : [i]))
        }, E = function (n) {
            return n === s && t.currTemplate.closeBtn || (t.currTemplate.closeBtn = e(t.st.closeMarkup.replace("%title%", t.st.tClose)), s = n), t.currTemplate.closeBtn
        }, _ = function () {
            e.magnificPopup.instance || (t = new w, t.init(), e.magnificPopup.instance = t)
        }, S = function () {
            var e = document.createElement("p").style, t = ["ms", "O", "Moz", "Webkit"];
            if (void 0 !== e.transition)return !0;
            for (; t.length;)if (t.pop() + "Transition" in e)return !0;
            return !1
        };
    w.prototype = {
        constructor: w, init: function () {
            var n = navigator.appVersion;
            t.isIE7 = -1 !== n.indexOf("MSIE 7."), t.isIE8 = -1 !== n.indexOf("MSIE 8."), t.isLowIE = t.isIE7 || t.isIE8, t.isAndroid = /android/gi.test(n), t.isIOS = /iphone|ipad|ipod/gi.test(n), t.supportsTransition = S(), t.probablyMobile = t.isAndroid || t.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent), i = e(document.body), o = e(document), t.popupsCache = {}
        }, open: function (n) {
            var i;
            if (n.isObj === !1) {
                t.items = n.items.toArray(), t.index = 0;
                var r, s = n.items;
                for (i = 0; s.length > i; i++)if (r = s[i], r.parsed && (r = r.el[0]), r === n.el[0]) {
                    t.index = i;
                    break
                }
            } else t.items = e.isArray(n.items) ? n.items : [n.items], t.index = n.index || 0;
            if (t.isOpen)return t.updateItemHTML(), void 0;
            t.types = [], a = "", t.ev = n.mainEl && n.mainEl.length ? n.mainEl.eq(0) : o, n.key ? (t.popupsCache[n.key] || (t.popupsCache[n.key] = {}), t.currTemplate = t.popupsCache[n.key]) : t.currTemplate = {}, t.st = e.extend(!0, {}, e.magnificPopup.defaults, n), t.fixedContentPos = "auto" === t.st.fixedContentPos ? !t.probablyMobile : t.st.fixedContentPos, t.st.modal && (t.st.closeOnContentClick = !1, t.st.closeOnBgClick = !1, t.st.showCloseBtn = !1, t.st.enableEscapeKey = !1), t.bgOverlay || (t.bgOverlay = k("bg").on("click" + v, function () {
                t.close()
            }), t.wrap = k("wrap").attr("tabindex", -1).on("click" + v, function (e) {
                t._checkIfClose(e.target) && t.close()
            }), t.container = k("container", t.wrap)), t.contentContainer = k("content"), t.st.preloader && (t.preloader = k("preloader", t.container, t.st.tLoading));
            var l = e.magnificPopup.modules;
            for (i = 0; l.length > i; i++) {
                var c = l[i];
                c = c.charAt(0).toUpperCase() + c.slice(1), t["init" + c].call(t)
            }
            T("BeforeOpen"), t.st.showCloseBtn && (t.st.closeBtnInside ? (x(p, function (e, t, n, i) {
                n.close_replaceWith = E(i.type)
            }), a += " mfp-close-btn-in") : t.wrap.append(E())), t.st.alignTop && (a += " mfp-align-top"), t.fixedContentPos ? t.wrap.css({
                overflow: t.st.overflowY,
                overflowX: "hidden",
                overflowY: t.st.overflowY
            }) : t.wrap.css({
                top: I.scrollTop(),
                position: "absolute"
            }), (t.st.fixedBgPos === !1 || "auto" === t.st.fixedBgPos && !t.fixedContentPos) && t.bgOverlay.css({
                height: o.height(),
                position: "absolute"
            }), t.st.enableEscapeKey && o.on("keyup" + v, function (e) {
                27 === e.keyCode && t.close()
            }), I.on("resize" + v, function () {
                t.updateSize()
            }), t.st.closeOnContentClick || (a += " mfp-auto-cursor"), a && t.wrap.addClass(a);
            var d = t.wH = I.height(), u = {};
            if (t.fixedContentPos && t._hasScrollBar(d)) {
                var m = t._getScrollbarSize();
                m && (u.marginRight = m)
            }
            t.fixedContentPos && (t.isIE7 ? e("body, html").css("overflow", "hidden") : u.overflow = "hidden");
            var g = t.st.mainClass;
            return t.isIE7 && (g += " mfp-ie7"), g && t._addClassToMFP(g), t.updateItemHTML(), T("BuildControls"), e("html").css(u), t.bgOverlay.add(t.wrap).prependTo(document.body), t._lastFocusedEl = document.activeElement, setTimeout(function () {
                t.content ? (t._addClassToMFP(h), t._setFocus()) : t.bgOverlay.addClass(h), o.on("focusin" + v, t._onFocusIn)
            }, 16), t.isOpen = !0, t.updateSize(d), T(f), n
        }, close: function () {
            t.isOpen && (T(c), t.isOpen = !1, t.st.removalDelay && !t.isLowIE && t.supportsTransition ? (t._addClassToMFP(C), setTimeout(function () {
                t._close()
            }, t.st.removalDelay)) : t._close())
        }, _close: function () {
            T(l);
            var n = C + " " + h + " ";
            if (t.bgOverlay.detach(), t.wrap.detach(), t.container.empty(), t.st.mainClass && (n += t.st.mainClass + " "), t._removeClassFromMFP(n), t.fixedContentPos) {
                var i = {marginRight: ""};
                t.isIE7 ? e("body, html").css("overflow", "") : i.overflow = "", e("html").css(i)
            }
            o.off("keyup" + v + " focusin" + v), t.ev.off(v), t.wrap.attr("class", "mfp-wrap").removeAttr("style"), t.bgOverlay.attr("class", "mfp-bg"), t.container.attr("class", "mfp-container"), !t.st.showCloseBtn || t.st.closeBtnInside && t.currTemplate[t.currItem.type] !== !0 || t.currTemplate.closeBtn && t.currTemplate.closeBtn.detach(), t._lastFocusedEl && e(t._lastFocusedEl).focus(), t.currItem = null, t.content = null, t.currTemplate = null, t.prevHeight = 0, T(d)
        }, updateSize: function (e) {
            if (t.isIOS) {
                var n = document.documentElement.clientWidth / window.innerWidth, i = window.innerHeight * n;
                t.wrap.css("height", i), t.wH = i
            } else t.wH = e || I.height();
            t.fixedContentPos || t.wrap.css("height", t.wH), T("Resize")
        }, updateItemHTML: function () {
            var n = t.items[t.index];
            t.contentContainer.detach(), t.content && t.content.detach(), n.parsed || (n = t.parseEl(t.index));
            var i = n.type;
            if (T("BeforeChange", [t.currItem ? t.currItem.type : "", i]), t.currItem = n, !t.currTemplate[i]) {
                var o = t.st[i] ? t.st[i].markup : !1;
                T("FirstMarkupParse", o), t.currTemplate[i] = o ? e(o) : !0
            }
            r && r !== n.type && t.container.removeClass("mfp-" + r + "-holder");
            var a = t["get" + i.charAt(0).toUpperCase() + i.slice(1)](n, t.currTemplate[i]);
            t.appendContent(a, i), n.preloaded = !0, T(m, n), r = n.type, t.container.prepend(t.contentContainer), T("AfterChange")
        }, appendContent: function (e, n) {
            t.content = e, e ? t.st.showCloseBtn && t.st.closeBtnInside && t.currTemplate[n] === !0 ? t.content.find(".mfp-close").length || t.content.append(E()) : t.content = e : t.content = "", T(u), t.container.addClass("mfp-" + n + "-holder"), t.contentContainer.append(t.content)
        }, parseEl: function (n) {
            var i = t.items[n], o = i.type;
            if (i = i.tagName ? {el: e(i)} : {data: i, src: i.src}, i.el) {
                for (var r = t.types, a = 0; r.length > a; a++)if (i.el.hasClass("mfp-" + r[a])) {
                    o = r[a];
                    break
                }
                i.src = i.el.attr("data-mfp-src"), i.src || (i.src = i.el.attr("href"))
            }
            return i.type = o || t.st.type || "inline", i.index = n, i.parsed = !0, t.items[n] = i, T("ElementParse", i), t.items[n]
        }, addGroup: function (e, n) {
            var i = function (i) {
                i.mfpEl = this, t._openClick(i, e, n)
            };
            n || (n = {});
            var o = "click.magnificPopup";
            n.mainEl = e, n.items ? (n.isObj = !0, e.off(o).on(o, i)) : (n.isObj = !1, n.delegate ? e.off(o).on(o, n.delegate, i) : (n.items = e, e.off(o).on(o, i)))
        }, _openClick: function (n, i, o) {
            var r = void 0 !== o.midClick ? o.midClick : e.magnificPopup.defaults.midClick;
            if (r || 2 !== n.which && !n.ctrlKey && !n.metaKey) {
                var a = void 0 !== o.disableOn ? o.disableOn : e.magnificPopup.defaults.disableOn;
                if (a)if (e.isFunction(a)) {
                    if (!a.call(t))return !0
                } else if (a > I.width())return !0;
                n.type && (n.preventDefault(), t.isOpen && n.stopPropagation()), o.el = e(n.mfpEl), o.delegate && (o.items = i.find(o.delegate)), t.open(o)
            }
        }, updateStatus: function (e, i) {
            if (t.preloader) {
                n !== e && t.container.removeClass("mfp-s-" + n), i || "loading" !== e || (i = t.st.tLoading);
                var o = {status: e, text: i};
                T("UpdateStatus", o), e = o.status, i = o.text, t.preloader.html(i), t.preloader.find("a").on("click", function (e) {
                    e.stopImmediatePropagation()
                }), t.container.addClass("mfp-s-" + e), n = e
            }
        }, _checkIfClose: function (n) {
            if (!e(n).hasClass(y)) {
                var i = t.st.closeOnContentClick, o = t.st.closeOnBgClick;
                if (i && o)return !0;
                if (!t.content || e(n).hasClass("mfp-close") || t.preloader && n === t.preloader[0])return !0;
                if (n === t.content[0] || e.contains(t.content[0], n)) {
                    if (i)return !0
                } else if (o && e.contains(document, n))return !0;
                return !1
            }
        }, _addClassToMFP: function (e) {
            t.bgOverlay.addClass(e), t.wrap.addClass(e)
        }, _removeClassFromMFP: function (e) {
            this.bgOverlay.removeClass(e), t.wrap.removeClass(e)
        }, _hasScrollBar: function (e) {
            return (t.isIE7 ? o.height() : document.body.scrollHeight) > (e || I.height())
        }, _setFocus: function () {
            (t.st.focus ? t.content.find(t.st.focus).eq(0) : t.wrap).focus()
        }, _onFocusIn: function (n) {
            return n.target === t.wrap[0] || e.contains(t.wrap[0], n.target) ? void 0 : (t._setFocus(), !1)
        }, _parseMarkup: function (t, n, i) {
            var o;
            i.data && (n = e.extend(i.data, n)), T(p, [t, n, i]), e.each(n, function (e, n) {
                if (void 0 === n || n === !1)return !0;
                if (o = e.split("_"), o.length > 1) {
                    var i = t.find(v + "-" + o[0]);
                    if (i.length > 0) {
                        var r = o[1];
                        "replaceWith" === r ? i[0] !== n[0] && i.replaceWith(n) : "img" === r ? i.is("img") ? i.attr("src", n) : i.replaceWith('<img src="' + n + '" class="' + i.attr("class") + '" />') : i.attr(o[1], n)
                    }
                } else t.find(v + "-" + e).html(n)
            })
        }, _getScrollbarSize: function () {
            if (void 0 === t.scrollbarSize) {
                var e = document.createElement("div");
                e.id = "mfp-sbm", e.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;", document.body.appendChild(e), t.scrollbarSize = e.offsetWidth - e.clientWidth, document.body.removeChild(e)
            }
            return t.scrollbarSize
        }
    }, e.magnificPopup = {
        instance: null,
        proto: w.prototype,
        modules: [],
        open: function (t, n) {
            return _(), t = t ? e.extend(!0, {}, t) : {}, t.isObj = !0, t.index = n || 0, this.instance.open(t)
        },
        close: function () {
            return e.magnificPopup.instance && e.magnificPopup.instance.close()
        },
        registerModule: function (t, n) {
            n.options && (e.magnificPopup.defaults[t] = n.options), e.extend(this.proto, n.proto), this.modules.push(t)
        },
        defaults: {
            disableOn: 0,
            key: null,
            midClick: !1,
            mainClass: "",
            preloader: !0,
            focus: "",
            closeOnContentClick: !1,
            closeOnBgClick: !0,
            closeBtnInside: !0,
            showCloseBtn: !0,
            enableEscapeKey: !0,
            modal: !1,
            alignTop: !1,
            removalDelay: 0,
            fixedContentPos: "auto",
            fixedBgPos: "auto",
            overflowY: "auto",
            closeMarkup: '<button title="%title%" type="button" class="mfp-close">&times;</button>',
            tClose: "Close (Esc)",
            tLoading: "Loading..."
        }
    }, e.fn.magnificPopup = function (n) {
        _();
        var i = e(this);
        if ("string" == typeof n)if ("open" === n) {
            var o, r = b ? i.data("magnificPopup") : i[0].magnificPopup, a = parseInt(arguments[1], 10) || 0;
            r.items ? o = r.items[a] : (o = i, r.delegate && (o = o.find(r.delegate)), o = o.eq(a)), t._openClick({mfpEl: o}, i, r)
        } else t.isOpen && t[n].apply(t, Array.prototype.slice.call(arguments, 1)); else n = e.extend(!0, {}, n), b ? i.data("magnificPopup", n) : i[0].magnificPopup = n, t.addGroup(i, n);
        return i
    };
    var P, O, z, M = "inline", B = function () {
        z && (O.after(z.addClass(P)).detach(), z = null)
    };
    e.magnificPopup.registerModule(M, {
        options: {hiddenClass: "hide", markup: "", tNotFound: "Content not found"},
        proto: {
            initInline: function () {
                t.types.push(M), x(l + "." + M, function () {
                    B()
                })
            }, getInline: function (n, i) {
                if (B(), n.src) {
                    var o = t.st.inline, r = e(n.src);
                    if (r.length) {
                        var a = r[0].parentNode;
                        a && a.tagName && (O || (P = o.hiddenClass, O = k(P), P = "mfp-" + P), z = r.after(O).detach().removeClass(P)), t.updateStatus("ready")
                    } else t.updateStatus("error", o.tNotFound), r = e("<div>");
                    return n.inlineElement = r, r
                }
                return t.updateStatus("ready"), t._parseMarkup(i, {}, n), i
            }
        }
    });
    var F, H = "ajax", L = function () {
        F && i.removeClass(F)
    }, A = function () {
        L(), t.req && t.req.abort()
    };
    e.magnificPopup.registerModule(H, {
        options: {
            settings: null,
            cursor: "mfp-ajax-cur",
            tError: '<a href="%url%">The content</a> could not be loaded.'
        }, proto: {
            initAjax: function () {
                t.types.push(H), F = t.st.ajax.cursor, x(l + "." + H, A), x("BeforeChange." + H, A)
            }, getAjax: function (n) {
                F && i.addClass(F), t.updateStatus("loading");
                var o = e.extend({
                    url: n.src, success: function (i, o, r) {
                        var a = {data: i, xhr: r};
                        T("ParseAjax", a), t.appendContent(e(a.data), H), n.finished = !0, L(), t._setFocus(), setTimeout(function () {
                            t.wrap.addClass(h)
                        }, 16), t.updateStatus("ready"), T("AjaxContentAdded")
                    }, error: function () {
                        L(), n.finished = n.loadError = !0, t.updateStatus("error", t.st.ajax.tError.replace("%url%", n.src))
                    }
                }, t.st.ajax.settings);
                return t.req = e.ajax(o), ""
            }
        }
    });
    var j, N = function (n) {
        if (n.data && void 0 !== n.data.title)return n.data.title;
        var i = t.st.image.titleSrc;
        if (i) {
            if (e.isFunction(i))return i.call(t, n);
            if (n.el)return n.el.attr(i) || ""
        }
        return ""
    };
    e.magnificPopup.registerModule("image", {
        options: {
            markup: '<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',
            cursor: "mfp-zoom-out-cur",
            titleSrc: "title",
            verticalFit: !0,
            tError: '<a href="%url%">The image</a> could not be loaded.'
        }, proto: {
            initImage: function () {
                var e = t.st.image, n = ".image";
                t.types.push("image"), x(f + n, function () {
                    "image" === t.currItem.type && e.cursor && i.addClass(e.cursor)
                }), x(l + n, function () {
                    e.cursor && i.removeClass(e.cursor), I.off("resize" + v)
                }), x("Resize" + n, t.resizeImage), t.isLowIE && x("AfterChange", t.resizeImage)
            }, resizeImage: function () {
                var e = t.currItem;
                if (e && e.img && t.st.image.verticalFit) {
                    var n = 0;
                    t.isLowIE && (n = parseInt(e.img.css("padding-top"), 10) + parseInt(e.img.css("padding-bottom"), 10)), e.img.css("max-height", t.wH - n)
                }
            }, _onImageHasSize: function (e) {
                e.img && (e.hasSize = !0, j && clearInterval(j), e.isCheckingImgSize = !1, T("ImageHasSize", e), e.imgHidden && (t.content && t.content.removeClass("mfp-loading"), e.imgHidden = !1))
            }, findImageSize: function (e) {
                var n = 0, i = e.img[0], o = function (r) {
                    j && clearInterval(j), j = setInterval(function () {
                        return i.naturalWidth > 0 ? (t._onImageHasSize(e), void 0) : (n > 200 && clearInterval(j), n++, 3 === n ? o(10) : 40 === n ? o(50) : 100 === n && o(500), void 0)
                    }, r)
                };
                o(1)
            }, getImage: function (n, i) {
                var o = 0, r = function () {
                    n && (n.img[0].complete ? (n.img.off(".mfploader"), n === t.currItem && (t._onImageHasSize(n), t.updateStatus("ready")), n.hasSize = !0, n.loaded = !0, T("ImageLoadComplete")) : (o++, 200 > o ? setTimeout(r, 100) : a()))
                }, a = function () {
                    n && (n.img.off(".mfploader"), n === t.currItem && (t._onImageHasSize(n), t.updateStatus("error", s.tError.replace("%url%", n.src))), n.hasSize = !0, n.loaded = !0, n.loadError = !0)
                }, s = t.st.image, l = i.find(".mfp-img");
                if (l.length) {
                    var c = document.createElement("img");
                    c.className = "mfp-img", n.img = e(c).on("load.mfploader", r).on("error.mfploader", a), c.src = n.src, l.is("img") && (n.img = n.img.clone()), n.img[0].naturalWidth > 0 && (n.hasSize = !0)
                }
                return t._parseMarkup(i, {
                    title: N(n),
                    img_replaceWith: n.img
                }, n), t.resizeImage(), n.hasSize ? (j && clearInterval(j), n.loadError ? (i.addClass("mfp-loading"), t.updateStatus("error", s.tError.replace("%url%", n.src))) : (i.removeClass("mfp-loading"), t.updateStatus("ready")), i) : (t.updateStatus("loading"), n.loading = !0, n.hasSize || (n.imgHidden = !0, i.addClass("mfp-loading"), t.findImageSize(n)), i)
            }
        }
    });
    var W, R = function () {
        return void 0 === W && (W = void 0 !== document.createElement("p").style.MozTransform), W
    };
    e.magnificPopup.registerModule("zoom", {
        options: {
            enabled: !1,
            easing: "ease-in-out",
            duration: 300,
            opener: function (e) {
                return e.is("img") ? e : e.find("img")
            }
        }, proto: {
            initZoom: function () {
                var e, n = t.st.zoom, i = ".zoom";
                if (n.enabled && t.supportsTransition) {
                    var o, r, a = n.duration, s = function (e) {
                        var t = e.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                            i = "all " + n.duration / 1e3 + "s " + n.easing, o = {
                                position: "fixed",
                                zIndex: 9999,
                                left: 0,
                                top: 0,
                                "-webkit-backface-visibility": "hidden"
                            }, r = "transition";
                        return o["-webkit-" + r] = o["-moz-" + r] = o["-o-" + r] = o[r] = i, t.css(o), t
                    }, d = function () {
                        t.content.css("visibility", "visible")
                    };
                    x("BuildControls" + i, function () {
                        if (t._allowZoom()) {
                            if (clearTimeout(o), t.content.css("visibility", "hidden"), e = t._getItemToZoom(), !e)return d(), void 0;
                            r = s(e), r.css(t._getOffset()), t.wrap.append(r), o = setTimeout(function () {
                                r.css(t._getOffset(!0)), o = setTimeout(function () {
                                    d(), setTimeout(function () {
                                        r.remove(), e = r = null, T("ZoomAnimationEnded")
                                    }, 16)
                                }, a)
                            }, 16)
                        }
                    }), x(c + i, function () {
                        if (t._allowZoom()) {
                            if (clearTimeout(o), t.st.removalDelay = a, !e) {
                                if (e = t._getItemToZoom(), !e)return;
                                r = s(e)
                            }
                            r.css(t._getOffset(!0)), t.wrap.append(r), t.content.css("visibility", "hidden"), setTimeout(function () {
                                r.css(t._getOffset())
                            }, 16)
                        }
                    }), x(l + i, function () {
                        t._allowZoom() && (d(), r && r.remove(), e = null)
                    })
                }
            }, _allowZoom: function () {
                return "image" === t.currItem.type
            }, _getItemToZoom: function () {
                return t.currItem.hasSize ? t.currItem.img : !1
            }, _getOffset: function (n) {
                var i;
                i = n ? t.currItem.img : t.st.zoom.opener(t.currItem.el || t.currItem);
                var o = i.offset(), r = parseInt(i.css("padding-top"), 10), a = parseInt(i.css("padding-bottom"), 10);
                o.top -= e(window).scrollTop() - r;
                var s = {width: i.width(), height: (b ? i.innerHeight() : i[0].offsetHeight) - a - r};
                return R() ? s["-moz-transform"] = s.transform = "translate(" + o.left + "px," + o.top + "px)" : (s.left = o.left, s.top = o.top), s
            }
        }
    });
    var Z = "iframe", q = "//about:blank", D = function (e) {
        if (t.currTemplate[Z]) {
            var n = t.currTemplate[Z].find("iframe");
            n.length && (e || (n[0].src = q), t.isIE8 && n.css("display", e ? "block" : "none"))
        }
    };
    e.magnificPopup.registerModule(Z, {
        options: {
            markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',
            srcAction: "iframe_src",
            patterns: {
                youtube: {index: "youtube.com", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1"},
                vimeo: {index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1"},
                gmaps: {index: "//maps.google.", src: "%id%&output=embed"}
            }
        }, proto: {
            initIframe: function () {
                t.types.push(Z), x("BeforeChange", function (e, t, n) {
                    t !== n && (t === Z ? D() : n === Z && D(!0))
                }), x(l + "." + Z, function () {
                    D()
                })
            }, getIframe: function (n, i) {
                var o = n.src, r = t.st.iframe;
                e.each(r.patterns, function () {
                    return o.indexOf(this.index) > -1 ? (this.id && (o = "string" == typeof this.id ? o.substr(o.lastIndexOf(this.id) + this.id.length, o.length) : this.id.call(this, o)), o = this.src.replace("%id%", o), !1) : void 0
                });
                var a = {};
                return r.srcAction && (a[r.srcAction] = o), t._parseMarkup(i, a, n), t.updateStatus("ready"), i
            }
        }
    });
    var K = function (e) {
        var n = t.items.length;
        return e > n - 1 ? e - n : 0 > e ? n + e : e
    }, Y = function (e, t, n) {
        return e.replace(/%curr%/gi, t + 1).replace(/%total%/gi, n)
    };
    e.magnificPopup.registerModule("gallery", {
        options: {
            enabled: !1,
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
            preload: [0, 2],
            navigateByImgClick: !0,
            arrows: !0,
            tPrev: "Previous (Left arrow key)",
            tNext: "Next (Right arrow key)",
            tCounter: "%curr% of %total%"
        }, proto: {
            initGallery: function () {
                var n = t.st.gallery, i = ".mfp-gallery", r = Boolean(e.fn.mfpFastClick);
                return t.direction = !0, n && n.enabled ? (a += " mfp-gallery", x(f + i, function () {
                    n.navigateByImgClick && t.wrap.on("click" + i, ".mfp-img", function () {
                        return t.items.length > 1 ? (t.next(), !1) : void 0
                    }), o.on("keydown" + i, function (e) {
                        37 === e.keyCode ? t.prev() : 39 === e.keyCode && t.next()
                    })
                }), x("UpdateStatus" + i, function (e, n) {
                    n.text && (n.text = Y(n.text, t.currItem.index, t.items.length))
                }), x(p + i, function (e, i, o, r) {
                    var a = t.items.length;
                    o.counter = a > 1 ? Y(n.tCounter, r.index, a) : ""
                }), x("BuildControls" + i, function () {
                    if (t.items.length > 1 && n.arrows && !t.arrowLeft) {
                        var i = n.arrowMarkup,
                            o = t.arrowLeft = e(i.replace(/%title%/gi, n.tPrev).replace(/%dir%/gi, "left")).addClass(y),
                            a = t.arrowRight = e(i.replace(/%title%/gi, n.tNext).replace(/%dir%/gi, "right")).addClass(y),
                            s = r ? "mfpFastClick" : "click";
                        o[s](function () {
                            t.prev()
                        }), a[s](function () {
                            t.next()
                        }), t.isIE7 && (k("b", o[0], !1, !0), k("a", o[0], !1, !0), k("b", a[0], !1, !0), k("a", a[0], !1, !0)), t.container.append(o.add(a))
                    }
                }), x(m + i, function () {
                    t._preloadTimeout && clearTimeout(t._preloadTimeout), t._preloadTimeout = setTimeout(function () {
                        t.preloadNearbyImages(), t._preloadTimeout = null
                    }, 16)
                }), x(l + i, function () {
                    o.off(i), t.wrap.off("click" + i), t.arrowLeft && r && t.arrowLeft.add(t.arrowRight).destroyMfpFastClick(), t.arrowRight = t.arrowLeft = null
                }), void 0) : !1
            }, next: function () {
                t.direction = !0, t.index = K(t.index + 1), t.updateItemHTML()
            }, prev: function () {
                t.direction = !1, t.index = K(t.index - 1), t.updateItemHTML()
            }, goTo: function (e) {
                t.direction = e >= t.index, t.index = e, t.updateItemHTML()
            }, preloadNearbyImages: function () {
                var e, n = t.st.gallery.preload, i = Math.min(n[0], t.items.length), o = Math.min(n[1], t.items.length);
                for (e = 1; (t.direction ? o : i) >= e; e++)t._preloadItem(t.index + e);
                for (e = 1; (t.direction ? i : o) >= e; e++)t._preloadItem(t.index - e)
            }, _preloadItem: function (n) {
                if (n = K(n), !t.items[n].preloaded) {
                    var i = t.items[n];
                    i.parsed || (i = t.parseEl(n)), T("LazyLoad", i), "image" === i.type && (i.img = e('<img class="mfp-img" />').on("load.mfploader", function () {
                        i.hasSize = !0
                    }).on("error.mfploader", function () {
                        i.hasSize = !0, i.loadError = !0, T("LazyLoadError", i)
                    }).attr("src", i.src)), i.preloaded = !0
                }
            }
        }
    });
    var U = "retina";
    e.magnificPopup.registerModule(U, {
        options: {
            replaceSrc: function (e) {
                return e.src.replace(/\.\w+$/, function (e) {
                    return "@2x" + e
                })
            }, ratio: 1
        }, proto: {
            initRetina: function () {
                if (window.devicePixelRatio > 1) {
                    var e = t.st.retina, n = e.ratio;
                    n = isNaN(n) ? n() : n, n > 1 && (x("ImageHasSize." + U, function (e, t) {
                        t.img.css({"max-width": t.img[0].naturalWidth / n, width: "100%"})
                    }), x("ElementParse." + U, function (t, i) {
                        i.src = e.replaceSrc(i, n)
                    }))
                }
            }
        }
    }), function () {
        var t = 1e3, n = "ontouchstart" in window, i = function () {
            I.off("touchmove" + r + " touchend" + r)
        }, o = "mfpFastClick", r = "." + o;
        e.fn.mfpFastClick = function (o) {
            return e(this).each(function () {
                var a, s = e(this);
                if (n) {
                    var l, c, d, u, p, f;
                    s.on("touchstart" + r, function (e) {
                        u = !1, f = 1, p = e.originalEvent ? e.originalEvent.touches[0] : e.touches[0], c = p.clientX, d = p.clientY, I.on("touchmove" + r, function (e) {
                            p = e.originalEvent ? e.originalEvent.touches : e.touches, f = p.length, p = p[0], (Math.abs(p.clientX - c) > 10 || Math.abs(p.clientY - d) > 10) && (u = !0, i())
                        }).on("touchend" + r, function (e) {
                            i(), u || f > 1 || (a = !0, e.preventDefault(), clearTimeout(l), l = setTimeout(function () {
                                a = !1
                            }, t), o())
                        })
                    })
                }
                s.on("click" + r, function () {
                    a || o()
                })
            })
        }, e.fn.destroyMfpFastClick = function () {
            e(this).off("touchstart" + r + " click" + r), n && I.off("touchmove" + r + " touchend" + r)
        }
    }(), _()
})(window.jQuery || window.Zepto);

