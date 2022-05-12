<?php

function university_files(){
    //The first is a nickname, the second is the location of the file
    wp_enqueue_style('multiversity_main_style', get_themefile_uri('/build/style-index.css'));
    wp_enqueue_style('multiversity_extra_style', get_themefile_uri('/build/index.css'));
}
// Second argument is the name of our function
add_action('wp_enqueue_scripts','multiversity_files');
