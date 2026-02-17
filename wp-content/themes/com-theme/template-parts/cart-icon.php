<?php
/**
 * Cart icon template part – shows item count.
 * Uses generic filter `ecom_get_cart_count`.
 */
$cart_count = apply_filters('ecom_get_cart_count', 0);
?>
<div class="cart-icon">
    <a href="<?php echo esc_url(apply_filters('ecom_get_cart_url', wc_get_cart_url())); ?>">
        <span class="cart-icon__icon">🛒</span>
        <span class="cart-icon__count"><?php echo intval($cart_count); ?></span>
    </a>
</div>
