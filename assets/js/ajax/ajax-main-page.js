jQuery(document).ready(function ($) {
    //TODO:ADD ONCLICK
    $('button.add-to-cart .add-cart').on('click', function (e) {
        e.preventDefault();
        var pointer = $(this)
        let type_product = $(this).data('type-product');
        let quantity = $(this).data('quantity');
        let product_id = $(this).data('product_id');
        let product_sku = $(this).data('product_sku');
        pointer.parent().parent().next('.massage-add-cart').html("<img src=' " + brs_ajax_handel.brs_img_loader + "'>")
        $.ajax({
            type: 'POST',
            url: brs_ajax_handel.brs_ajax_url,
            datatype: "json",
            data: {
                action: "brs_add_cart_shop",
                type_product: type_product,
                quantity: quantity,
                product_id: product_id,
                product_sku: product_sku,
                brs_get_nonce: brs_ajax_handel.brs_create_nonce

            },
            success: function (response) {
                if (typeof response.massage !== 'undefined') {
                    pointer.parent().parent().next('.massage-add-cart')
                        .html(brs_ajax_handel.brs_notification_add_cart +
                            "<div class='show-add-to-cart'> تعداد " +
                            " <span class='quantity_product'>" + response.quantity_product + "</span>" +
                            "</div>")
                }
                if (typeof response.fragments !== "undefined"){
                    pointer.parent().parent().next('.massage-add-cart')
                        .html( brs_ajax_handel.brs_notification_add_cart )
                }
            },
            error: function (error) {

            }
        })

    })

})

