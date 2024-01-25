<?php
//Start building your awesome child theme functions
add_action( 'wp_enqueue_scripts', 'trikon_enqueue_styles', 100 );
function trikon_enqueue_styles() {
    wp_enqueue_style( 'trikon-child-styles',  get_stylesheet_directory_uri() . '/style.css', array( 'nova-trikon-styles' ), wp_get_theme()->get('Version') );
}

// Custom coed for grouped products
add_action( 'woocommerce_after_shop_loop_item', 'add_button_for_grouped_products', 15 );
function add_button_for_grouped_products() {
global $product;

if ( ! $product ) {
return;
}

if ( $product->get_type() === 'grouped' ) {
echo '<div class="yith-ywraq-add-to-quote add-to-quote"> <div class="yith-ywraq-add-button show" style="display:block"> <a class="button view-products-listing-button" href="' . $product->get_permalink() . '">'. __( 'View products', 'woocommerce' ) . '</a> </div> </div>';
}
}
// --
