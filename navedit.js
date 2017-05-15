<<<<<<< HEAD
$(document).ready(function() {
    $("#totop").hide(); //hide initially
    var topOfDiv = $("#programs").offset().top;
    $(window).scroll(function() {
        if($(window).scrollTop() > topOfDiv) { //scrolled past the other div?
            $("#totop").show(200); //reached the desired point -- show div
        }
        if($(window).scrollTop() < topOfDiv) { //scrolled past the other div?
            $("#totop").hide(200); //reached the desired point -- show div
        }
    });
});
=======

>>>>>>> issue2
// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.main_h').removeClass('open-nav');
    } else {
        $('.main_h').addClass('open-nav');
    }
});
$('.main_h li a').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_h').removeClass('open-nav');
    }
});
// navigation scroll lijepo radi materem
$('a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 100);
    event.preventDefault();
});
