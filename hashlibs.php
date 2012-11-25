<?php
/*
Plugin Name: HashLibs
Plugin URI: http://josh.dvvvvvvvv.com/hashlibs
Description: Dynamically build a page with simple shortcode based on URL values (hash).
Version: 0.9
Author: Josh Davis
Author URI: http://josh.dvvvvvvvv.com/
*/

/*  Copyright 2012  Josh Davis

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function hashlibs_enqueue() {
	wp_enqueue_script('jquery');
    wp_register_script('hashlibs-script', plugins_url('hashlibs.js', __FILE__));
    wp_enqueue_script('hashlibs-script', array('jquery'));
}
add_action('wp_enqueue_scripts', 'hashlibs_enqueue');

function hashlibs_shortcode($atts){
	$hashlibs_holder = '<span id="hashlibs-' . $atts[0] . '"></span>';
	return $hashlibs_holder;
}
add_shortcode('echo-hash', 'hashlibs_shortcode');
?>
