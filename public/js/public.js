$(document).ready(function () {
    // $(".search-show").hover(function () {
    //     $(".search-box").fadeIn(300);
    // }, function () {
    //     $(".search-box").stop(true, true).fadeOut(300);
    // });
    var random_bg = Math.floor(Math.random() * 3 + 1);
    var bg = 'url(images/banner-' + random_bg + '.jpg)';
    $(".banner").css("background-image", bg);
    $(".last-slide").hover(function () {
        $(".last-nav-down").slideDown(200);
    }, function () {
        $(".last-nav-down").stop(true, true).slideUp(200);
    });
    $(".list-slide").hover(function () {
        $(".list-slide-down").slideDown(200);
    }, function () {
        $(".list-slide-down").stop(true, true).slideUp(200);
    });
    $(".last-nav-down a:odd,.list-slide-down a:odd").css("background-color", "#f7f7f7");
});