<?php
/*Single Project*/

add_action( 'init', 'wk_project_endpoint' );
//add_filter( 'woocommerce_account_menu_items', 'wk_new_menu_items_project' );
add_action( 'woocommerce_account_project_endpoint', 'wk_endpoint_project' );
function wk_project_endpoint() {
  add_rewrite_endpoint( 'project',  EP_PAGES );
}
function wk_new_menu_items_project( $items ) {
    $items[ 'project' ] = __( 'Project', 'webkul' );
    return $items;
}
function wk_endpoint_project() {
	  get_template_part('woocommerce/myaccount/myaccount','project'); 
	
}

/*Project Listing*/

add_action( 'init', 'wk_projects_endpoint' );
add_filter( 'woocommerce_account_menu_items', 'wk_new_menu_items_projects' );
add_action( 'woocommerce_account_projects_endpoint', 'wk_endpoint_projects' );
function wk_projects_endpoint() {
  add_rewrite_endpoint( 'projects',  EP_PAGES );
}
function wk_new_menu_items_projects( $items ) {
    $items[ 'projects' ] = __( 'Projects', 'webkul' );
    return $items;
}
function wk_endpoint_projects() {
	  get_template_part('woocommerce/myaccount/myaccount','projects'); 
	
}

function _jcredirect404(){
	global $wp_query;
	$wp_query->set_404();
	status_header( 404 );
	get_template_part( 404 ); exit();
}

function applycode() {
	if ( isset($_REQUEST) ) {
		echo 'fefe';
    }
	die();
}
 
add_action( 'wp_ajax_applycode', 'applycode' );
