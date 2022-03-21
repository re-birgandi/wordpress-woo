jQuery(document).ready(function ($) {
    //TODO:ADD ONCLICK
    $('button.add-to-cart .add-cart').on('click', function (e) {
        e.preventDefault();
        let type_product = $(this).data('type-product');
        let quantity = $(this).data('quantity');
        let product_id = $(this).data('product_id');
        let product_sku = $(this).data('product_sku');
        $.ajax({
            type: 'POST',
            url: brs_ajax_handel.brs_ajax_url,
            data: {
                action: "brs_add_cart_shop",
                type_product: type_product,
                quantity: quantity,
                product_id: product_id,
                product_sku: product_sku,
                brs_get_nonce:brs_ajax_handel.brs_create_nonce

            },
            datatype: "json",
            success: function (response) {
            //  console.log(response)
            },
            error: function (response) {
             //   console.log(response)

            }
        })

    })

})
