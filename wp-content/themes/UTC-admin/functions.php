<?php

add_action('wp_enqueue_scripts', 'main_page');
add_action('wp_enqueue_scripts', 'contacts_page');
add_action('wp_enqueue_scripts', 'team_page');
add_action('wp_enqueue_scripts', 'works_page');
add_action('wp_enqueue_scripts', 'services_page');
add_action('wp_enqueue_scripts', 'post_page');

add_theme_support('post-thumbnails' , array( 'post', 'page' ) );

// show_admin_bar(true);

function main_page() {
    if(is_page('home') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/home/style.css', 'all');
        wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer/footer.css', 'all');
        wp_enqueue_script('home', get_template_directory_uri() . '/assets/dist/home.js',array(),'2023', true);        
    }
}
function contacts_page() {
    if(is_page('contacts') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/contacts/style.css', 'all');
        // wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer/footer.css', 'all');
        wp_enqueue_script('contacts', get_template_directory_uri() . '/assets/dist/contacts.js',array(),'2023', true);        
    }
}
function team_page() {
    if(is_page('team')){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/team/style.css', 'all');
        // wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer/footer.css', 'all');
        wp_enqueue_script('team', get_template_directory_uri() . '/assets/dist/team.js',array(),'2023', true);        
    }
}
function post_page() {
    if(is_page_template('post.php')){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/team/style.css', 'all');
        // wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer/footer.css', 'all');
        // wp_enqueue_script('contacts', get_template_directory_uri() . '/assets/dist/team.js',array(),'2023', true);        
    }
}
function services_page() {
    if(is_page('services') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/services/style.css', 'all');
        // wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer/footer.css', 'all');
        wp_enqueue_script('simple', get_template_directory_uri() . '/assets/dist/simple.js',array(),'2023', true);        
    }
}
function works_page() {
    if(is_page('works') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/works/style.css', 'all');
        // wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer/footer.css', 'all');
        wp_enqueue_script('works', get_template_directory_uri() . '/assets/dist/works.js',array(),'2023', true);        
    }
}
if (function_exists( 'add_theme_support' )){
    add_filter('manage_posts_columns', 'posts_columns', 5);
    add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
    add_filter('manage_pages_columns', 'posts_columns', 5);
    add_action('manage_pages_custom_column', 'posts_custom_columns', 5, 2);
}
function posts_columns($defaults){
    $defaults['wps_post_thumbs'] = __('Головне зображення');
    return $defaults;
}
function posts_custom_columns($column_name, $id){
    if($column_name === 'wps_post_thumbs'){
        echo the_post_thumbnail( array(125,80) );
    }
}
?>