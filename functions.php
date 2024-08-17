<?php

/**
 * @package Bootscore Child
 *
 * @version 6.0.0
 */

/**
 * Change entire container classes
 */
function container_class($string, $location) {
  if ($location == 'index') {
    return "container-fluid";
  }
  return $string;
}
add_filter('bootscore/class/container', 'container_class', 10, 2);

// Exit if accessed directly
defined('ABSPATH') || exit;



function add_test_theme_page() {
$page_title = 'Eventhc Theme configuracion';
$menu_title = 'Eventhc Theme';
$menu_slug = 'theme_configuracion';
  // Crea el Menu de Configuracion Principal
add_theme_page (  $page_title, // titulo de la pagina a mostrar
                $menu_title, // titulo del menu 
                'administrator', // permisos 
                $menu_slug, // url unica 
                'theme_option_page', // funcion que contiene el codigo que queremos pintar
                '', // icono que queramos poner ver dashicons
                null // posicion en la list 
              );
}
add_action( 'admin_menu', 'add_test_theme_page' );
function theme_option_page() {
  echo 'This is a test theme options page!';
}



/**
 * Enqueue scripts and styles
 */
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  wp_enqueue_style('anicool-css', get_stylesheet_directory_uri() . '/assets/anicool/style.css');

  wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/assets/slick/slick.css');
  wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/assets/slick/slick-theme.css');



  // slickJS
  wp_enqueue_script("slick-js", get_stylesheet_directory_uri() . '/assets/slick/slick.min.js', array('jquery'));
  // masonryJS
  wp_enqueue_script("masonry-js", get_stylesheet_directory_uri() . '/assets/masonry/masonry.pkgd.min.js', array('jquery'));
  // anicool
  wp_enqueue_script("anicool-js", get_stylesheet_directory_uri() . '/assets/anicool/main.js', array('jquery'));


  // custom.js
  // Get modification time. Enqueue file with modification date to prevent browser from loading cached scripts when file content changes. 
  $modificated_CustomJS = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/js/custom.js'));
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), $modificated_CustomJS, false, true);
wp_localize_script(
        'custom-js', 'wp_variable',
      array( 
          'path' => get_stylesheet_directory_uri(),
    )
    );
}


