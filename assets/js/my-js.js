jQuery(document).ready(function () {
    jQuery('.pull-left').children('ul').addClass('store-pages');
    jQuery("ul.store-pages").children('li').children(".current").parent().addClass('active');
})