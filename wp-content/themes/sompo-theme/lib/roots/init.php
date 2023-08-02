<?php
ini_set ("display_errors", "1");
error_reporting( E_ALL ^ ( E_NOTICE | E_WARNING | E_STRICT | E_DEPRECATED ) );
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");

/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/roots-translations
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus(array(
    'menu_principal' => __('Menu Principal', 'roots')
  ));

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', array('caption', 'comment-form', 'comment-list'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'roots_setup');

/**
 * Register sidebars
 */
function roots_widgets_init() {
  register_sidebar(array(
    'name'          => __('Primary', 'roots'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'name'          => __('Footer', 'roots'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'roots_widgets_init');


function peb_body_classes( $classes ) 
{
    if ( is_category() ) :

        $cat = get_category( get_query_var( 'cat' ) );

        $classes[] = $cat->slug;    

        if ( $cat->parent != 0 ) :

            while ( $cat->parent != 0 ) :
                $classes[] = $cat->slug;
                $cat = get_category( $cat->parent );
            endwhile;

        endif;

    /*elseif ( is_tag() ) :

    elseif ( is_page() ) :

        global $post;*/

    elseif ( is_single() ) :

        global $post;

        $cats = wp_get_post_categories( $post->ID );

        //my_print( $cats ); exit;

        if ( !empty( $cats ) ) :

            foreach ( $cats as $cat ) :

                $cat = get_category( $cat );
                $classes[] = $cat->slug;

                if ( $cat->parent != 0 ) :

                    while ( $cat->parent != 0 ) :
                        $classes[] = $cat->slug;
                        $cat = get_category( $cat->parent );
                    endwhile;

                endif;

            endforeach;

        endif;

    else :

    endif;

    return $classes;
}
add_filter( 'body_class', 'peb_body_classes' );