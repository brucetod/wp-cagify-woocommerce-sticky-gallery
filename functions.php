<?php
/**
 * Plugin Name: Woocommerce Sticky Gallery
 * Version: 0.1
 * Plugin URI: http://www.cagify.com/review-cage
 * Description: Sticky Woocommerce product gallery to top
 * Author: Cagify
 * Author URI: http://www.cagify.com/
 * Requires at least: 6.2
 * Tested up to: 6.2
 *
 * Text Domain: wp-cgf-woocommerce-sticky-gallery
 * Domain Path: /langs/
 *
 * @package WordPress
 * @author Cagify
 * @since 0.1
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('woocommerce_before_single_product_summary', 'wp_cgf_woocommerce_sticky_gallery_woocommerce_before_single_product_summary' , 1);
function wp_cgf_woocommerce_sticky_gallery_woocommerce_before_single_product_summary(){
        echo '<div class="wp-cgf-woocommerce-sticky-gallery" style="position: relative">';
}

add_action('woocommerce_single_product_summary', 'wp_cgf_woocommerce_sticky_gallery_woocommerce_single_product_summary', 98);
function wp_cgf_woocommerce_sticky_gallery_woocommerce_single_product_summary(){
    echo '</div><div style="clear:both;"></div>';
    echo '<script type="text/javascript">';
    echo <<<EOF
    (function($){
        $(".wp-cgf-woocommerce-sticky-gallery").find(".entry-summary").prev().css("position","sticky").css("top","0").css("z-index",10);
    })(jQuery);
EOF;
    echo '</script>';
}

