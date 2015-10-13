/* main */

$(document).ready(function(){
    //alert("OK!");
});

$(window).scroll(function(){
    var sect1 = $(this).scrollTop();
    $(".section_1").css({
        "transform" : "translate(0%, " + sect1 / 20 + "%)"
    });
});
