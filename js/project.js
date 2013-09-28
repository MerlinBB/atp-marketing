var atp = {

    init: function () {
        this.bindUIActions();
        $("#welcome-scene").parallax();
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
        var destination = parseInt($(e.currentTarget).data("destination"));
        var margin = -Math.abs(destination) * 100 + "%";

        $(e.currentTarget).closest(".slider").css({ marginLeft: margin });
    }

};

// DOM Ready
$(function () {
    atp.init();
});
