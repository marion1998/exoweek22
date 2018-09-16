<?php
/*
* Plugin Name: Zolietext
*/

function wp_zolitext($att, $content=null){
    echo "<i>".$content."</i>";
}

function wp_zolig($att, $content=null){
    echo "<b>".$content."</b>";
}

function wp_zoligi($att, $content=null){
    echo "<b><i>".$content."</b></i>";
}

add_shortcode('zoli', 'wp_zolitext');
add_shortcode('zolig', 'wp_zolig');
add_shortcode('zoligi', 'wp_zoligi');

?>