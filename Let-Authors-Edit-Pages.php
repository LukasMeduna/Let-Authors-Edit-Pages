<?php
/*
Plugin Name: Let Authors Edit Pages
Plugin URI: https://github.com/LukasMeduna
Description: Very simple plugin that allows authors to edit pages, not only  
Version: 1.0
Author: Lukáš Meduna
Author URI: https://github.com/LukasMeduna
*/

 
function add_author_caps() {
    $role = get_role( 'author' );
    $role->add_cap( 'edit_pages' );
    $role->add_cap( 'publish_pages' );  
    $role->add_cap( 'edit_published_pages' );       
}
add_action( 'admin_init', 'add_author_caps');


?>
