<?php
/**
 * Add to wishlist template
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Wishlist
 * @version 3.2.0
 */

global $product;
?>

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-<?php echo esc_attr($product_id) ?>">
    <div class="yith-wcwl-add-button <?php echo ( $exists && ! $available_multi_wishlist ) ? 'hide': 'show' ?>" style="display:<?php echo ( $exists && ! $available_multi_wishlist ) ? 'none': 'block' ?>">

        <?php yith_wcwl_get_template( 'add-to-wishlist-' . $template_part . '.php', $atts ); ?>

    </div>

    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
        <span class="feedback"><?php echo esc_html__($product_added_text) ?></span>
        <a href="<?php echo esc_url( $wishlist_url )?>" >
            <?php echo apply_filters( 'yith-wcwl-browse-wishlist-label', $browse_wishlist_text )?>
        </a>
    </div>

    <div class="yith-wcwl-wishlistexistsbrowse <?php echo ( $exists && ! $available_multi_wishlist ) ? 'show' : 'hide' ?>" style="display:<?php echo ( $exists && ! $available_multi_wishlist ) ? 'block' : 'none' ?>">
        <span class="feedback"><?php echo esc_html__($already_in_wishslist_text) ?></span>
        <a href="<?php echo esc_url( $wishlist_url ) ?>">
            <?php echo apply_filters( 'yith-wcwl-browse-wishlist-label', $browse_wishlist_text )?>
        </a>
    </div>

    <div style="clear:both"></div>
    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div>