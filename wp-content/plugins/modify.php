<?php
/**
 * @package cn.xiongyi
 * @version 1.0
 */
/*
Plugin Name: modify-first-post-title 
Description: modify first post title 
Version: 1.0
Author URI: http://xiongyizm.xin
*/

function modify() {
    global $wpdb;
    #file_put_contents("test.txt", "123456"); 
    $ids = $wpdb->get_results("SELECT blog_id FROM wp_blogs", ARRAY_N);
    for($x = 0; $x < count($ids); $x++) {
	#file_put_contents("test.txt",$ids[$x],FILE_APPEND);
	$wpdb->get_results("update wp_" . $ids[$x][0] . "_posts set post_title = 'The Latest real estate news!' where post_title = 'Hello world!'");
    }
    
}
add_action('wp_login', 'modify');

?>
