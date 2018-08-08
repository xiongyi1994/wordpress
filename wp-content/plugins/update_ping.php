<?php
/**
 * @package cn.xiongyi
 * @version 1.0
 */
/*
Plugin Name: update ping_sites 
Description: update ping_sites 
Version: 1.0
Author URI: http://xiongyizm.xin
*/

function update_ping() {
    global $wpdb;
#    file_put_contents("test.txt", "123456"); 
    $ids = $wpdb->get_results("SELECT blog_id FROM wp_blogs", ARRAY_N);
    for($x = 0; $x < count($ids); $x++) {
#	file_put_contents("test.txt",$ids[$x],FILE_APPEND);
	if ($ids[$x][0] == 1) {
		$wpdb->get_results("update wp_options set option_value = 'https://site-api.chime.me/blog/wordpress/notify' where option_name = 'ping_sites'");
	} else {
		$wpdb->get_results("update wp_" . $ids[$x][0] . "_options set option_value = 'https://site-api.chime.me/blog/wordpress/notify' where option_name = 'ping_sites'");
	}
    }
    
}
add_action('wp_login', 'update_ping');

?>

