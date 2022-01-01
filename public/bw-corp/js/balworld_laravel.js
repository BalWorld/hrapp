/*
Bal World Laravel
*/

! function (a) {
    "use strict";
    a("#side-menu").metisMenu(), a("#vertical-menu-btn").on("click", function (t) {
        t.preventDefault(), a("body").toggleClass("sidebar-enable"), 992 <= a(window).width() ? a("body").toggleClass("vertical-collpsed") : a("body").removeClass("vertical-collpsed")
    }), a("#sidebar-menu a").each(function () {
        var t = window.location.href.split(/[?#]/)[0];
        this.href == t && (a(this).addClass("active"), a(this).parent().addClass("mm-active"), a(this).parent().parent().addClass("mm-show"), a(this).parent().parent().prev().addClass("mm-active"), a(this).parent().parent().parent().addClass("mm-active"), a(this).parent().parent().parent().parent().addClass("mm-show"), a(this).parent().parent().parent().parent().parent().addClass("mm-active"))
    }), a(".navbar-nav a").each(function () {
        var t = window.location.href.split(/[?#]/)[0];
        this.href == t && (a(this).addClass("active"), a(this).parent().addClass("active"), a(this).parent().parent().addClass("active"), a(this).parent().parent().parent().parent().addClass("active"), a(this).parent().parent().parent().parent().parent().addClass("active"), a(this).parent().parent().parent().parent().parent().parent().addClass("active"), a(this).parent().parent().parent().parent().parent().parent().parent().addClass("active"))
    }), a(".right-bar-toggle").on("click", function (t) {
        a("body").toggleClass("right-bar-enabled")
    }), a(document).on("click", "body", function (t) {
        0 < a(t.target).closest(".right-bar-toggle, .right-bar").length || a("body").removeClass("right-bar-enabled")
    }), a(".dropdown-menu a.dropdown-toggle").on("click", function (t) {
        return a(this).next().hasClass("show") || a(this).parents(".dropdown-menu").first().find(".show").removeClass("show"), a(this).next(".dropdown-menu").toggleClass("show"), !1
    }), a(function () {
        a('[data-toggle="tooltip"]').tooltip()
    }), a(function () {
        a('[data-toggle="popover"]').popover()
    }), Waves.init()
}(jQuery);

(function () {

    var laravel = {
        initialize: function () {
            this.methodLinks = $('a[data-method]');
            this.token = $('a[data-token]');
            this.registerEvents();
        },

        registerEvents: function () {
            this.methodLinks.on('click', this.handleMethod);
        },

        handleMethod: function (e) {
            var link = $(this);
            var httpMethod = link.data('method').toUpperCase();
            var form;

            // If the data-method attribute is not PUT or DELETE,
            // then we don't know what to do. Just ignore.
            if ($.inArray(httpMethod, ['PUT', 'DELETE']) === -1) {
                return;
            }

            // Allow user to optionally provide data-confirm="Are you sure?"
            if (link.data('confirm')) {
                if (!laravel.verifyConfirm(link)) {
                    return false;
                }
            }

            form = laravel.createForm(link);
            form.submit();

            e.preventDefault();
        },

        verifyConfirm: function (link) {
            return confirm(link.data('confirm'));
        },

        createForm: function (link) {
            var form =
                $('<form>', {
                    'method': 'POST',
                    'action': link.attr('href')
                });

            var token =
                $('<input>', {
                    'type': 'hidden',
                    'name': '_token',
                    'value': link.data('token')
                });

            var hiddenInput =
                $('<input>', {
                    'name': '_method',
                    'type': 'hidden',
                    'value': link.data('method')
                });

            return form.append(token, hiddenInput)
                .appendTo('body');
        }
    };

    laravel.initialize();

})();
