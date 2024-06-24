<?php
function cf2m_init_theme(){
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'cf2m_init_theme');