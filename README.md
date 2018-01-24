# woocommerce-functions-hook-filter-lists
### I will lists woocommerce functions and hook lists. you can help me to add any hook and functions.

#functions

### //Product Image show 

```
if ( has_post_thumbnail( get_the_ID() ) ) {
    echo get_the_post_thumbnail( get_the_ID(), 'shop_single' );
} else {
    echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />';
}
```
