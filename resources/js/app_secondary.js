/**
 *   1- Color menu
 *   2- Cerrar menu al clikear
 *   3- Smoth
 *   4- Share
 *-----------------------------------------------------------------
 **/


//  1- Color menu
$(window).scroll(function(){
    var prueba = $(this).scrollTop();
    if (prueba > 100) {
        $(".navbar").addClass("scroll");
    }
    else if (prueba < 100) {
        $(".navbar").removeClass("scroll");
    }
});



//  2- Cerrar menu al clikear
$(".navbar-nav li a").click(function(event) {
    if (!$(this).parent().hasClass('dropdown'))
        $(".navbar-collapse").collapse('hide');
});

//  3- Smoth
$(function() {
    $('nav a').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : s('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
})


//  4- Share
$('.share').click(function() {
    if ($('#busc_').hasClass("active_none")) {

        $('#busc_').addClass('active_view');
        $('#busc_').removeClass('active_none');
    } else {
        $('#busc_').removeClass('active_view');
        $('#busc_').addClass('active_none');
    }

});

$('.share').click(function() {
    if ($('.share a i' ).hasClass('icon-cancel')) {

        $('.share a i' ).addClass('icon-search');
        $('.share a i' ).removeClass('icon-cancel');
    } else {
        $('.share a i' ).removeClass('icon-search');
        $('.share a i' ).addClass('icon-cancel');
    }

});

