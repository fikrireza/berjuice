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
                $(".navbar-statick").css({"height": "100%"});
        });

        $("#bar-mobile-animate-hide").click(
            function(){
                $(".list-item-nav").css({"display": "none"});
                $(".resposive-mobile").css({"display": "block"});
                $("#bar-mobile-animate-show").css({"display": "block"});
                $("#bar-mobile-animate-hide").css({"display": "none"});
                $(".navbar-statick").css({"height": "60px"});
        });
    }
    // end for mobile
});
