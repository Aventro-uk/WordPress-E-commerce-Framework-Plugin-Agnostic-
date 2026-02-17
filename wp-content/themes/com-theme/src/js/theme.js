// Theme front-end JavaScript
import '../sass/main.scss';

console.log('Ecom Theme loaded');

// Example: AJAX cart count update
document.addEventListener('DOMContentLoaded', function() {
    const cartIcon = document.querySelector('.cart-icon__count');
    if (cartIcon) {
        // You could fetch the cart count via AJAX using ecom_ajax object
        fetch(ecom_ajax.ajax_url + '?action=ecom_get_cart_count&nonce=' + ecom_ajax.nonce)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    cartIcon.textContent = data.data.count;
                }
            });
    }
});
