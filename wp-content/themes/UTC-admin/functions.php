<?php

add_action('wp_enqueue_scripts', 'main_page', 10);
add_action('wp_enqueue_scripts', 'contacts_page', 10);
add_action('wp_enqueue_scripts', 'team_page', 10);
add_action('wp_enqueue_scripts', 'works_page', 10);
add_action('wp_enqueue_scripts', 'services_page', 10);
// add_action('wp_enqueue_scripts', 'tes');
show_admin_bar(true);


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
    if(is_page('team') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/team/style.css', 'all');
        // wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer/footer.css', 'all');
        wp_enqueue_script('contacts', get_template_directory_uri() . '/assets/dist/team.js',array(),'2023', true);        
    }
}
function services_page() {
    if(is_page('services') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/services/style.css', 'all');
        // wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer/footer.css', 'all');
        wp_enqueue_script('contacts', get_template_directory_uri() . '/assets/dist/services.js',array(),'2023', true);        
    }
}
function works_page() {
    if(is_page('works') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/works/style.css', 'all');
        // wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer/footer.css', 'all');
        wp_enqueue_script('contacts', get_template_directory_uri() . '/assets/dist/works.js',array(),'2023', true);        
    }
}

?>