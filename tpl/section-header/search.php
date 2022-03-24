<!-- Search -->
<div class="header-search">
    <form action="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ) ?>" method="get">
        <input class="input search-input" type="text" name="s" placeholder="جستجو">
		<?php
		brs_active_plugin(BRS_PLUGIN_ACTIVE) ? brs_show_categoreis() : '';
		?>
        <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
</div>
<!-- /Search -->
