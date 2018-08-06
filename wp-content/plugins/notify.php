<?php
/**
 * @package cn.xiongyi
 * @version 1.0
 */
/*
Plugin Name: notify change of posts 
Description: notify change of posts 
Version: 1.0
Author URI: http://xiongyizm.xin
*/

function publish_notify($post_ID) {
	file_put_contents('notify.txt', "publish" . $post_ID, FILE_APPEND);
}
add_action('publish_post', 'publish_notify');

#function save_notify($post_ID, $post) {
#	file_put_contents('notify.txt', "save" . $post_ID, FILE_APPEND);
#}

#add_action('save_post', 'save_notify');

function delete_notify($post_ID) {
	file_put_contents('notify.txt', "delete" . $post_ID, FILE_APPEND);
}

add_action('delete_post', 'delete_notify');
?>
