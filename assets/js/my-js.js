jQuery(document).ready(function ($) {
    $('.pull-left').children('ul').addClass('store-pages');
    $("ul.store-pages").children('li').children(".current").parent().addClass('active');
    $("ul.new-store-pages").children('li').children(".current").parent().addClass('active');
    $('.select-per-page').on('change', function () {
        window.location.href = this.value
    });



})





