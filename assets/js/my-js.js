jQuery(document).ready(function ($) {

    $("ul.store-pages").children('li').children(".current").parent().addClass('active');
    $("ul.new-store-pages").children('li').children(".current").parent().addClass('active');
    $('.select-per-page').on('change', function () {
        window.location.href = this.value
    });

    if ($('ul .store-pages').length > 5) {
        //TODO:EDIT pagination.php
        //   $'ul.store-pages').removeClass('store-pages').addClass('new-store-pages')
    }

})





