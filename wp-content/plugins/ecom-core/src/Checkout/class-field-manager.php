<?php
namespace EcomCore\Checkout;

class Field_Manager {
    public function __construct() {
        // Generic hooks – replace with your plugin's specific hooks.
        add_filter('ecom_checkout_fields', [$this, 'add_custom_fields']);
        add_action('ecom_checkout_validate_fields', [$this, 'validate_fields'], 10, 3);
        add_action('ecom_checkout_update_order_meta', [$this, 'save_custom_fields']);
    }

    public function add_custom_fields($fields) {
        $fields['billing_vat'] = [
            'type'     => 'text',
            'label'    => __('VAT Number', 'ecom-core'),
            'required' => false,
            'priority' => 25,
            'class'    => ['form-row-wide'],
        ];
        return $fields;
    }

    public function validate_fields($fields, $errors, $posted_data) {
        // Example validation
        if (empty($posted_data['billing_vat'])) {
            $errors->add('validation', __('VAT Number is required.', 'ecom-core'));
        }
    }

    public function save_custom_fields($order_id) {
        if (!empty($_POST['billing_vat'])) {
            update_post_meta($order_id, '_billing_vat', sanitize_text_field($_POST['billing_vat']));
        }
    }
}
