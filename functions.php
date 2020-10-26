<?php
//style und scripte registrieren
function vogel_files() {
  wp_enqueue_script(
    'bootstrap',
    get_template_directory_uri() . '/js/jquery-3.5.1.min.js',
    array( 'jquery' ), 
    true
  );
  wp_enqueue_script(
    'bootstrap',
    get_template_directory_uri() . '/js/popper.min.js',
    array( 'popper' ),
    true
  );
  wp_enqueue_script(
    'bootstrap',
    get_template_directory_uri() . '/js/bootstrap.min.js',
    array( 'bootstrap' ), 
    true
  );
  wp_enqueue_style( 
    'bootstrap',
    get_template_directory_uri() . '/css/bootstrap.min.css',
    array(),
    '4.5.0'
  );

  wp_enqueue_style('font-awesome',
  '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 

  wp_enqueue_style(
    'vogel_main_styles',
    get_stylesheet_uri(),
    array( 'bootstrap' ),
    '1.0.0'
);
}
add_action('wp_enqueue_scripts','vogel_files');


//menus registrieren
function register_my_menus() {
  register_nav_menus(
    array('menu' => __( 'Header Menu' ) )
  );
}
add_action ('init', 'register_my_menus');

//widgets, sidebar  registrieren
function widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar'),
        'id' => 'sidebar-widget-area',
        'description' => __( 'Bereich für Widgets innerhalb der Sidebar' ),
        'before_widget' => '<small id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</small>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer'),
        'id' => 'footer-widget-area',
        'description' => __( 'Bereich für Widgets innerhalb des Footer'),
        'before_widget' => '<small id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</small>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ) );
}
add_action( 'widgets_init', 'widgets_init' );

//beitragsbilder registrieren
if ( ! function_exists( 'theme_slug_setup' ) ) :
  /**
   * theme einrichten und unterstürtzung für versch. features registrieren
   */
  function theme_slug_setup() {
      // Other Theme S

      // beitragsbilder erzeugen - Post Thumbnails auf posts und pages.
      add_theme_support( 'post-thumbnails' );

      // Standard Post Thumbnail größe setzen
      set_post_thumbnail_size( 300, 200, true );

      //zusätzlich customize bildgröße festlegen
      add_image_size( 'theme-slug-single-post', 800, 9999 );
  }
endif;
add_action( 'after_setup_theme', 'theme_slug_setup' );

/*function admin_bar(){

  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );*/