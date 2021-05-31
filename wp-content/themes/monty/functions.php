<?php
function montheme_supports()
{
    add_theme_support('title-tag');
}

function montheme_register_assets()
{
    
}

add_action('after-setup-theme', 'montheme_supports');
