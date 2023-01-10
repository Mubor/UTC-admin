<?php

add_action('wp_enqueue_scripts', 'main_page', 20);
// add_action('wp_enqueue_scripts', 'test');
show_admin_bar(true);


function main_page() {
    // if(is_page('test1') ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/home/style.css', 'all');
        wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer/footer.css', 'all');
        wp_enqueue_script('home', get_template_directory_uri() . '/assets/dist/home.js',array(),'2023', true);        
    // }
}

?>