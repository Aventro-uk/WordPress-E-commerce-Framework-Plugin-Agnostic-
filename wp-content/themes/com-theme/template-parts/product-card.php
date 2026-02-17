<?php
/**
 * Product card template part
 *
 * Expects a $product variable (can be a post ID, WP_Post, or an array of product data).
 * This is deliberately generic – you will adapt it to your e‑commerce plugin's data.
 */
global $product; // fallback
$product_id = isset($product) && is_object($product) ? $product->ID : get_the_ID();
$title      = get_the_title($product_id);
$price      = apply_filters('ecom_get_product_price', '', $product_id); // Generic filter
$image      = get_the_post_thumbnail_url($product_id, 'medium');
?>
<div class="product-card">
    <?php if ($image) : ?>
        <div class="product-card__image">
            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
        </div>
    <?php endif; ?>
    <h3 class="product-card__title"><?php echo esc_html($title); ?></h3>
    <div class="product-card__price"><?php echo esc_html($price); ?></div>
    <a href="<?php the_permalink($product_id); ?>" class="product-card__button"><?php esc_html_e('View Product', 'ecom-theme'); ?></a>
</div>
