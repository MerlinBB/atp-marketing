$(function() {
    
    $("#welcome-scene").parallax();

    // switch header state based on scroll
    $(window).scroll(function () {
        if ($(window).scrollTop() > 150) { 
            $(".page-header").addClass("compressed"); 
        } else { 
            $(".page-header").removeClass("compressed"); 
        }
    });

});