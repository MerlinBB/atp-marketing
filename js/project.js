(function ($) {
    "use strict";

    var atp = {

        init: function () {
            this.bindUIActions();
            $("#welcome-scene").parallax();
        },

        windowLoaded: function () {
            this.setSlideHeight();
        },

        bindUIActions: function () {

            $(".moveslideshow").on("click", function (e) {
                atp.slider(e);
            });

            $(".hamburger").click(function () {
                $("nav.menu").slideToggle("fast");
            });

            $(window).scroll(function () {
                if ($(window).scrollTop() > 150) {
                    $(".page-header").addClass("compressed");
                } else {
                    $(".page-header").removeClass("compressed");
                }
            });

        },

        slider: function (e) {
            // selectors
            var slider = $(e.currentTarget).closest(".slider");
            var slideContainer = $(slider).parent();
            // slides
            var destination = parseInt($(e.currentTarget).data("destination"), 10);
            var targetSlide = destination + 1;
            // math
            var targetSlideHeight = $(slider).find(".slide:nth-child(" + targetSlide + ")").height() + "px";
            var margin = -Math.abs(destination) * 100 + "%";

            $(slider).css({ marginLeft: margin });
            $(slideContainer).css({ height: targetSlideHeight });
        },

        setSlideHeight: function () {
            $(".slidecontainer").each(function () {
                var height = $(this).find(".slide:first-child").height() + "px";
                $(this).height(height);
            });
        }
    };

    // DOM Ready
    $(function () { atp.init(); });
    // Images Loaded
    $(window).load(function() { atp.windowLoaded(); });

} (jQuery));
