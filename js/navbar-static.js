$(document).ready(function() {

    // function animate change logo berri and juice united
    var CountLogoChange = 0;
    setInterval(function() {
        if(CountLogoChange % 2 == 0){
            document.getElementById("icon-berri").setAttribute("src", "image/base/logo-juice-united.png");
        }
        else{
            document.getElementById("icon-berri").setAttribute("src", "image/base/logo-beri.png");
        }
        CountLogoChange = CountLogoChange + 1;
    }, 2500);

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

    // function for animate scroll fixed and static
    var win = $(window);
    // for dekstop
    if(win.width() > 960){
    var initNavbar = 100;
        win.scroll(function () {
            if (win.scrollTop() >= initNavbar) {
               $(".navbar-statick").css({
                    "position":"fixed", 
                    "z-index":"5", 
                    "top":"0px", 
                    "width":"100%",
                    "background":"rgba(242,185,65,.98)"
                });
               $(".icon-berri").css({
                    "position":"absolute", 
                    "top":"30px", 
                    "left":"60px", 
                    "width":"180px"
                });

               // $(".nav-bar").css({"margin-top":"70px"});
            }
            else if (win.scrollTop() <= initNavbar) {
               $(".navbar-statick").css({
                    "position":"relative", 
                    "top":"0px", 
                    "width":"100%",
                    "background":"rgba(242,165,45,0)"
                });
               $(".icon-berri").css({
                    "position":"static", 
                    "top":"0px", 
                    "left":"0px", 
                    "width":"80px"
                });
            }
        });
    }
    // end for dekstop
    
    // for mobile
    // else if( win.width() < 720 ){
    //     var initNavbar = 60;
    //     // alert("success");
    //     $(".hide-in-mobile").remove();
    //     $(".magestore-bannerslider").remove();
    //     $(".bar").css({"padding":"10px 0px"});

    //     win.scroll(function () {
    //         if (win.scrollTop() >= initNavbar) {
    //            $(".header-nav").css({"position":"fixed", "top":"0"});
    //            $(".nav-bar").css({"margin-top":"70px"});
    //         }
    //         else if (win.scrollTop() <= initNavbar) {
    //            $(".header-nav").css({"position":"relative"});
    //            $(".nav-bar").css({"margin-top":"0px"});
    //         }
    //     });
    // }
    // end for mobile
});
