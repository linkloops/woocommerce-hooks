//Send an email to custom email address along with customer in wooCommerce processing order email

add_filter( 'woocommerce_email_recipient_customer_processing_order', 'shop_email_recipient', 10, 2 );
function shop_email_recipient( $recipient, $order ) {
    if ( ! is_a( $order, 'WC_Order' ) ) return $recipient;

    // Set HERE your replacement recipient email(s)… (If multiple, separate them by a coma)
    $recipient = $recipient .', abc@test.in';
    return $recipient;
}




/// Email to User Email ID
add_filter( 'woocommerce_email_recipient_customer_processing_order', 'shop_email_recipient', 10, 2 );
function shop_email_recipient( $recipient, $order ) {
    if ( ! is_a( $order, 'WC_Order' ) ) return $recipient;

	$user_info = get_userdata($order->user_id);
    $user_email=$user_info->user_email;  
	
    // Email to user email id
    $recipient = $recipient .','. $user_email;
	 return $recipient;
}
