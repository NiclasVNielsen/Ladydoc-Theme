<?php

function stylesheetEnqueue(){
    wp_enqueue_style("stylesheetEnqueue", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "stylesheetEnqueue");


function resom_register_menu() {
    register_nav_menu("main-menu", "main menu");
}
add_action("init", "resom_register_menu");

?>