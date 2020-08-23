!function (i) {
    "use strict";
    var e = function () {
        this.$body = i("body"), this.$wrapper = i("#wrapper"), this.$btnFullScreen = i("#btn-fullscreen"), this.$leftMenuButton = i(".button-menu-mobile"), this.$menuItem = i(".has_sub > a")
    };
    e.prototype.initSlimscroll = function () {
        i(".slimscrollleft").slimscroll({height: "auto", position: "right", size: "10px", color: "#9ea5ab"})
    }, e.prototype.initLeftMenuCollapse = function () {
        var t = this;
        this.$leftMenuButton.on("click", function (e) {
            e.preventDefault(), t.$body.toggleClass("fixed-left-void"), t.$wrapper.toggleClass("enlarged")
        })
    }, e.prototype.initComponents = function () {
        i('[data-toggle="tooltip"]').tooltip(), i('[data-toggle="popover"]').popover()
    }, e.prototype.initFullScreen = function () {
        this.$btnFullScreen.on("click", function (e) {
            e.preventDefault(), document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ? document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen && document.webkitCancelFullScreen() : document.documentElement.requestFullscreen ? document.documentElement.requestFullscreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)
        })
    }, e.prototype.initMenu = function () {
        var n = this;

        function o() {
            var e = i(document).height();
            e > i(".body-content").height() && i(".body-content").height(e)
        }

        n.$menuItem.on("click", function () {
            var e = i(this).parent(), t = e.find("> ul");
            return n.$body.hasClass("sidebar-collapsed") || (t.is(":visible") ? t.slideUp(300, function () {
                e.removeClass("nav-active"), i(".body-content").css({height: ""}), o()
            }) : (i(".has_sub").each(function () {
                var e = i(this);
                e.hasClass("nav-active") && e.find("> ul").slideUp(300, function () {
                    e.removeClass("nav-active")
                })
            }), e.addClass("nav-active"), t.slideDown(300, function () {
                o()
            }))), !1
        })
    }, e.prototype.activateMenuItem = function () {
        i("#sidebar-menu a").each(function () {
            this.href == window.location.href && (i(this).addClass("active"), i(this).parent().addClass("active"), i(this).parent().parent().prev().addClass("active"), i(this).parent().parent().parent().addClass("active"), i(this).parent().parent().prev().click())
        })
    }, e.prototype.Preloader = function () {
        i(window).on("load", function () {
            i("#status").fadeOut(), i("#preloader").delay(350).fadeOut("slow")
        })
    }, e.prototype.init = function () {
        this.initSlimscroll(), this.initLeftMenuCollapse(), this.initComponents(), this.initFullScreen(), this.initMenu(), this.activateMenuItem(), this.Preloader()
    }, i.MainApp = new e, i.MainApp.Constructor = e
}(window.jQuery), function (e) {
    "use strict";
    window.jQuery.MainApp.init()
}();
