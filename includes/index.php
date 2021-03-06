<?php
$src = plugins_url( 'includes/css/cemp.css', __DIR__ );
wp_register_style( 'cemp_css', $src );
function add_cemp_styles(){
  wp_enqueue_style( 'cemp_css', $src);
}
$src = plugins_url( 'includes/js/login/cemp-login.js', __DIR__ );
wp_register_script( 'cemp_login_js', $src );
function add_cemp_login_script(){
  wp_enqueue_script( 'cemp_login_js', $src);
}
$src = plugins_url( 'includes/js/login/cemp-logup.js', __DIR__ );
wp_register_script( 'cemp_logup_js', $src );
function add_cemp_logup_script(){
  wp_enqueue_script( 'cemp_logup_js', $src);
}
$src = plugins_url( 'includes/js/cemp-messages.js', __DIR__ );
wp_register_script( 'cemp_messages_js', $src );
function add_cemp_messages_script(){
  wp_enqueue_script( 'cemp_messages_js', $src);
}
$src = plugins_url( 'includes/js/cemp-messages-list.js', __DIR__ );
wp_register_script( 'cemp_messages_list_js', $src );
function add_cemp_messages_list_script(){
  wp_enqueue_script( 'cemp_messages_list_js', $src);
}
$src = plugins_url( 'includes/js/cemp-get-messages.js', __DIR__ );
wp_register_script( 'cemp_get_messages_js', $src );
function add_cemp_get_messages_script(){
  wp_enqueue_script( 'cemp_get_messages_js', $src);
}
$src = plugins_url( 'includes/js/cemp-send-messages.js', __DIR__ );
wp_register_script( 'cemp_send_messages_js', $src );
function add_cemp_send_messages_script(){
  wp_enqueue_script( 'cemp_send_messages_js', $src);
}

// Add Ajax support
wp_localize_script('cemp_login_js', 'cempAjax', [
  'url' => admin_url('admin-ajax.php')
]);
wp_localize_script('cemp_logup_js', 'cempAjax', [
  'url' => admin_url('admin-ajax.php')
]);
wp_localize_script('cemp_get_messages_js', 'cempAjax', [
  'url' => admin_url('admin-ajax.php')
]);
wp_localize_script('cemp_send_messages_js', 'cempAjax', [
  'url' => admin_url('admin-ajax.php')
]);
?>
