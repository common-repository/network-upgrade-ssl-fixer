<?php
/*
Plugin Name: Network Upgrade SSL fixer
Plugin URI: http://gamerpa.net
Description: a simple plugin to fix Wordpress Multisite Network Upgrade SSL Errors!
Version: 1.0
Author: Seyed Ali Mirkarimi
Author URI: https://profiles.wordpress.org/senpaixdoge/
*/
add_filter('https_ssl_verify', '__return_false');
add_filter('https_local_ssl_verify', '__return_false');
?>