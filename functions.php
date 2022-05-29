<?php

function multiversity_files(){
    //The first is a nickname, the second is the location of the file
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('multiversity_main_style', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('multiversity_extra_style', get_theme_file_uri('/build/index.css'));
}
// Second argument is the name of our function
add_action('wp_enqueue_scripts','multiversity_files');
