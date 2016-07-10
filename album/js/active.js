$(function () {
    //      $('li.active').removeClass('active');
    $("li.active").on('click', function () {
        console.log("clicked");
        $(this).addClass("active").siblings().removeClass("active");
        $(this).child.css("color", "#555");
        $(this).child.siblings().css("color", "#fff");
    });

});