// Add placeholders to WooCommerce checkout fields
function dixy_custom_checkout_placeholders($fields) {
    // Add placeholder to billing first name field
    $fields['billing']['billing_first_name']['placeholder'] = 'Your First Name';

    // Add placeholder to billing last name field
    $fields['billing']['billing_last_name']['placeholder'] = 'Your Last Name';

    // Add placeholder to billing email field
    $fields['billing']['billing_email']['placeholder'] = 'Your Email Address';

    // Add placeholder to billing phone field
    $fields['billing']['billing_phone']['placeholder'] = 'Your Phone Number';

    // Add placeholder to billing city field
    $fields['billing']['billing_city']['placeholder'] = 'Your City';

    // Add placeholder to order notes field
    $fields['order']['order_comments']['placeholder'] = 'Any additional notes';

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'dixy_custom_checkout_placeholders');
