<?php
if( ! function_exists( 'get_plugin_data' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}


if( ! function_exists( 'test_print' ) ) {
	function test_print(){
		echo "Hello";
	}
}