<?php

add_action('wp_enqueue_scripts', 'main_page',1);
add_action('wp_enqueue_scripts', 'contacts_page',1);
add_action('wp_enqueue_scripts', 'team_page',1);
add_action('wp_enqueue_scripts', 'works_page',1);
add_action('wp_enqueue_scripts', 'services_page',1);
add_action('wp_enqueue_scripts', 'post_page',1);

add_theme_support('post-thumbnails' , array( 'post', 'page' ) );

show_admin_bar(false);

function main_page() {
    if(is_page('home') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/home/style.css', 'all');
        wp_enqueue_script('home', get_template_directory_uri() . '/assets/dist/home.js',array(),'2023', true);        
    }
}
function contacts_page() {
    if(is_page('contacts') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/contacts/style.css', 'all');
        wp_enqueue_script('contacts', get_template_directory_uri() . '/assets/dist/contacts.js',array(),'2023', true);        
    }
}
function team_page() {
    if(is_page('team')){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/team/style.css', 'all');
        wp_enqueue_script('team', get_template_directory_uri() . '/assets/dist/team.js',array(),'2023', true);        
    }
}
function post_page() {
    if(is_page_template('post.php')){
        // wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/team/style.css', 'all');
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/post/style.css', 'all');
        wp_enqueue_script('post', get_template_directory_uri() . '/assets/dist/simple.js',array(),'2023', true);        
    }
}
function services_page() {
    if(is_page('services') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/services/style.css', 'all');
        wp_enqueue_script('services', get_template_directory_uri() . '/assets/dist/simple.js',array(),'2023', true);        
    }
}
function works_page() {
    if(is_page('works') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/works/style.css', 'all');
        wp_enqueue_script('works', get_template_directory_uri() . '/assets/dist/works.js',array(),'2023', true);        
    }
}

?>