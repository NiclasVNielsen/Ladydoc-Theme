<?php

function stylesheetEnqueue(){
    wp_enqueue_style("stylesheetEnqueue", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "stylesheetEnqueue");

?>