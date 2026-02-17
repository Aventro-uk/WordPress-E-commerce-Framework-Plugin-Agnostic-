# Hooks & Filters

The framework provides several generic hooks prefixed with `ecom_`. You can use these to interact with the framework or to bridge your e‑commerce plugin.

## Actions

- `ecom_cart_item_added($cart_item, $cart)` – Fires when an item is added to the cart.
- `ecom_checkout_validate_fields($fields, $errors, $posted_data)` – Validate checkout fields.
- `ecom_checkout_update_order_meta($order_id)` – Save custom checkout fields to order meta.
- `ecom_order_status_changed($order_id, $old_status, $new_status)` – Triggered on order status change.

## Filters

- `ecom_checkout_fields($fields)` – Modify the array of checkout fields.
- `ecom_cart_item_price($price, $cart_item)` – Modify the displayed price of a cart item.
- `ecom_get_product($product_id)` – Retrieve a product object/array.
- `ecom_get_product_price($price, $product_id)` – Get the formatted price of a product.
- `ecom_get_cart_count($count)` – Get the current cart item count.
- `ecom_order_email_subject($subject, $order)` – Customise order email subject.

## Using the Hooks

To use these hooks, simply add your own callbacks:

```php
add_filter('ecom_get_cart_count', function($count) {
    if (function_exists('WC')) {
        return WC()->cart->get_cart_contents_count();
    }
    return $count;
});
