var winHeight = $(window).innerHeight();
$(document).ready(function () {
    $(".panel").height(winHeight);
    $("body").height(winHeight);
});

window.addEventListener('resize', function (event) {
    $(".panel").height($(window).innerHeight());
    winHeight = $(window).innerHeight();
    $("body").height(winHeight*$(".panel").length);
});