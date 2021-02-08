
// Redirect users to Login page if not logged in
function redirect_user() {
  if ( ! is_user_logged_in() && ! is_page( 'login' ) ) {
    //$return_url = esc_url( home_url( '/wp-login.php?redirect_to=' . urlencode( $_SERVER['REQUEST_URI']) ) );
    $url=get_site_url().'/wp-admin/';
    $return_url = esc_url( home_url( '/wp-login.php?redirect_to=' . urlencode($url) ) );
    wp_redirect( $return_url );
    exit;
  }
}
add_action( 'template_redirect', 'redirect_user' );
