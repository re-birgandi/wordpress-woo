<!-- Logo -->
<div class="header-logo">
    <?php  if ( get_header_image() ) :?>
	<a class="logo" href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ) ?>">
        <img src="<?php header_image(); ?>"
             width="<?php echo absint( get_custom_header()->width ); ?>"
             height="<?php echo absint( get_custom_header()->height ); ?>"
             alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
    </a>
    <?php endif; ?>
</div>
<!-- /Logo -->

