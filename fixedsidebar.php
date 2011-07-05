<?php 
/*
Plugin Name: Fixed Admin Sidebar
Plugin URI: http://www.matthodder.com/fixed-admin-sidebar
Description: Fixes the positioning of the admin sidebar to the side of the browser, even when scrolled down. Best used with collapsed view.
Author: Matt Hodder
Version: 1.1
Author URI: http://www.matthodder.com/
*/

add_action('admin_head', 'fixed_sidebar');
function fixed_sidebar() {
	if(is_admin()) {
	?>
		<style>#adminmenu { position: fixed !important; left: 0; top: 0; margin-left: 0 !important; }</style>
	<?php
	}
}