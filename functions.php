<?php
// Product featured Image Show

if ( has_post_thumbnail( get_the_ID() ) ) {
    echo get_the_post_thumbnail( get_the_ID(), 'shop_single' );
} else {
    echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />';
}


// Product Price Show
$product->get_price_html();

// Add To Cart link with text
woocommerce_template_loop_add_to_cart();
