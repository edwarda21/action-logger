<?php
/*
Plugin Name: Action Logger
Plugin URI: edwarda21.sps-prosek.cz
Description: Monitors and logs actions of users on your website
Author: Davza
Version: 1.1
Author URI:
*/

add_action('admin_menu', 'aclogger_create_menu');
add_action('wp_enqueue_scripts','aclogger_plugin_scripts');
function aclogger_create_menu() {
    add_menu_page("Action Logger Menu", "Action Logger", "administrator","action-logger","aclogger_generate_menu"); // add_menu_page má 5 parametrů, titulek, název menu, role uživatele, který menu uvidí, slug a funkci kterou má spustit při kliknutí
}

function aclogger_generate_menu(){
    echo "Ahoj";
}
function aclogger_plugin_scripts(){
    wp_enqueue_script('aclogger-link-checker', plugins_url("/js/aclogger-link-checker.js", __FILE__), array("jquery"),"1.0", true);
}
