<?php

// add pages for Custom Form on wp-admin
function add_custom_form_option() {
	add_menu_page(
		'Custom Form',
		'Custom Form',
		'manage_options',
		'custom-form',
		'custom_form_callback',
		'dashicons-format-aside',
		15
	);

	add_submenu_page(
		'custom-form',
		'All',
		'All',
		'manage_options',
		'all-submenu',
		'all_submenu_callback'
	);
    
	add_submenu_page(
		'custom-form',
		'Edit',
		'Edit',
		'manage_options',
		'edit-submenu',
		'edit_submenu_callback'
	);
	
	add_submenu_page(
		'custom-form',
		'Setting',
		'Setting',
		'manage_options',
		'setting-submenu',
		'setting_submenu_callback'
	);
}

function custom_form_callback() {
    echo '<h1>Custom Form</h1>';
    echo '<p>Add your custom content the the  submenu page<p>';


}

function all_submenu_callback() {
	echo '<h1>All Submenu Page</h1>';
	echo '<p>Add your custom content the the  submenu page<p>';
}

function edit_submenu_callback() {
	echo '<h1>Edit Submenu Page</h1>';
	if(!empty($_GET['page']) && $_GET['page'] == 'edit-submenu'){
	    include('test.php'); 
    }
}

function setting_submenu_callback() {
	echo '<h1>Setting Submenu Page</h1>';
	if(!empty($_GET['page']) && $_GET['page'] == 'setting-submenu'){
	    include('test.php'); 
    }
}

add_action('admin_menu', 'add_custom_form_option');
?>
