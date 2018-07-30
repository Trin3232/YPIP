<?php

function wpb_adding_scripts() {
wp_register_script('script', get_template_directory_uri() . '/script.js', array('jquery'),'1.0', true);
wp_enqueue_script('script');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
?>

<!-- WHAT IS IN THE FUNCTION.PHP FILE -->

<!-- wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer); -->

<!-- $handle is the name for the script. -->
<!-- $src defines where the script is located. -->
<!-- $deps is an array that can handle any script that your new script depends on, such as jQuery. -->
<!-- $ver lets you list a version number. -->
<!-- $in_footer is a boolean parameter (true/false) that allows you to place your scripts in the footer of your HTML document rather then in the header, so that it does not delay the loading of the DOM tree. -->
