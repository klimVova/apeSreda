<?php


add_action('wp_enqueue_scripts', 'apeSreda_scripts');
add_action('after_setup_theme', 'apeSreda');
function apeSreda_scripts()
{           
    //wp_enqueue_script('slick', _rickmans_assets_path('js/for_slider_jquery/slick.min.js'), [], '1.0', true);
    //wp_enqueue_script('slickjq', _rickmans_assets_path('js/for_slider_jquery/jquery-3.7.1.min.js'), [], '1.0', true);
    //wp_enqueue_script('main', _rickmans_assets_path('js/main.js'), [], '1.0', true);
    //wp_enqueue_script('mob', _rickmans_assets_path('js/mob.js'), [], '1.0', true);
    //wp_enqueue_script('slider', _rickmans_assets_path('js/slider.js'), [], '1.0', true);
    wp_enqueue_style('style', _apeSreda_assets_path('css/style.css'), [], '1.0', 'all');
    //wp_enqueue_style('style', _apeSreda_assets_path('js/for_slider_jquery/slick.css'), [], '1.0', 'all');
}



function _apeSreda_assets_path($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}


function apeSreda()
{
  register_nav_menu('menu-background', 'меню в шапке');
  register_nav_menu('menu-mob',    'мобильное меню');
  register_nav_menu('menu-footer', 'меню в подвале');

  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support( 'menus');
}