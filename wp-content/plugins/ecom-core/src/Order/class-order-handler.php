<?php
namespace EcomCore\Order;

class Order_Handler {
    public function __construct() {
        add_action('ecom_order_status_changed', [$this, 'on_status_change'], 10, 3);
        add_filter('ecom_order_email_subject', [$this, 'modify_email_subject'], 10, 2);
    }

    public function on_status_change($order_id, $old_status, $new_status) {
        // Trigger actions when order status changes.
    }

    public function modify_email_subject($subject, $order) {
        // Customize order email subject.
        return $subject;
    }
}
