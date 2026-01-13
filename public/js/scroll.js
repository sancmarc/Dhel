$(function () {
    $(document).scroll(function () {
        var $nav = $("#contactInfo");
        var $navbar = $("#navbar");
        var $cover = $('#carouselFurniture');
        var $coverTop = $('#coverTop');
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        $navbar.toggleClass("scrolled-nav", $(this).scrollTop() > $cover.height());
        $navbar.toggleClass("scrolled-nav", $(this).scrollTop() > $coverTop.height());
    });
});
