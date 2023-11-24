<?php

add_action("wp_enqueue_scripts", function(){
    wp_register_style( 'daisyui', "https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" );
	wp_enqueue_style( 'daisyui' );

    wp_register_script( 'script', "https://cdn.tailwindcss.com",[],false,true );
    wp_enqueue_script('script');
    //custom css//
    wp_register_style('elements',get_template_directory_uri() .'/css/elements.css');
    wp_enqueue_style('elements');
   
});

?>