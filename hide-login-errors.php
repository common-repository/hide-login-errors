<?php
/*
Plugin Name: Hide Login Errors
Plugin URI: https://wordpress.org/plugins/hide-login-errors/
Description: A simple plugin that will hide WordPress login errors from hackers.
Version: 1.0.0
Author: Zuziko
Author URI: https://zuziko.com
License: GPLv3
*/
function hle_hide_login_errors(){
  return 'Something is wrong!';
}
add_filter( 'login_errors', 'hle_hide_login_errors' );