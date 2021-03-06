$(document).ready(function() {

    var win = $(window);

    // for dekstop
    if(win.width() > 960){
        // function for animate scroll fixed and static
        var initNavbar = 100;
        win.scroll(function () {
            if (win.scrollTop() >= initNavbar) {
               $(".navbar-statick").addClass('scroller');
               $(".icon-scroller-nav").addClass('scroller');
            }
            else if (win.scrollTop() <= initNavbar) {
               $(".navbar-statick").removeClass('scroller');
               $(".icon-scroller-nav").removeClass('scroller');
            }
        });
    }
    // end for dekstop

    // for mobile
    else if( win.width() < 720 ){
        // function dropdown for mobile navbar
        $("#bar-mobile-animate-show").click(
            function(){
                $(".list-item-nav").css({"display": "block"});
                $(".resposive-mobile").css({"display": "block"});
                $("#bar-mobile-animate-show").css({"display": "none"});
                $("#bar-mobile-animate-hide").css({"display": "block"});
                $(".navbar-statick").css({"background-color": "rgba(242,165,45,1)"});
        });

        $("#bar-mobile-animate-hide").click(
            function(){
                $(".list-item-nav").css({"display": "none"});
                $(".resposive-mobile").css({"display": "block"});
                $("#bar-mobile-animate-show").css({"display": "block"});
                $("#bar-mobile-animate-hide").css({"display": "none"});
                $(".navbar-statick").css({"background-color": "rgba(242,165,45,0)"});
        });
    }
    // end for mobile

    // publict

    $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 50
                    }, 1500);
                return false;
            }
        }
    });
});
    // not use
        // var $currentElement = $(".part-of-scroll").first();

        // $("#scroll-next").click(function () {
        //     var $nextElement = $currentElement.next('.part-of-scroll');
        //     // Check if next element actually exists
        //     if($nextElement.length) {
        //         // If yes, update:
        //         // 1. $currentElement
        //         // 2. Scroll position
        //         $currentElement = $nextElement;
        //         $('html, body').stop(true).animate({
        //             scrollTop: $nextElement.offset().top
        //         }, 1000);
        //     }
        //     return false;
        // });

        // $("#scroll-prev").click(function () {
        //     var $prevElement = $currentElement.prev('.part-of-scroll');
        //     // Check if previous element actually exists
        //     if($prevElement.length) {
        //         // If yes, update:
        //         // 1. $currentElement
        //         // 2. Scroll position
        //         $currentElement = $prevElement;
        //         $('html, body').stop(true).animate({
        //             scrollTop: $prevElement.offset().top
        //         }, 1000);
        //     }
        //     return false;  
        // });\
    // not use

});

// animate scroll in
    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
          (element_top_position <= window_bottom_position)) {
          $element.addClass('in-view');
        } else {
          $element.removeClass('in-view');
        }
      });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
// animate scroll in
