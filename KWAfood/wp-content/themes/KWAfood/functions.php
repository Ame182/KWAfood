<?php
//Registro de estilos:

    function register_enqueue_style(){
        $theme_data = wp_get_theme();

    /* Registrando Stilos */
    wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/vendor/css/bootstrap.css'), null, '1.0.0', 'screen');
    wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css', null, '1.0.0', 'screen');
    wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Raleway|Roboto');
    wp_register_style('magnificPopup', get_parent_theme_file_uri('/assets/vendor/css/magnific-popup.css'), null, '1.0.0', 'screen');
    wp_register_style('lity', get_parent_theme_file_uri('assets/vendor/css/lity.css'), null , '3.0.0' , 'screen');
    wp_register_style('main', get_parent_theme_file_uri('assets/css/style.css'), null, '1.0.0', 'screen');

    


    /* Enqueue estilos */
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('googleFonts');
    wp_enqueue_style('magnificPopup');
    wp_enqueue_style('lity');
    wp_enqueue_style('main');

    }

    add_action('wp_enqueue_scripts' , 'register_enqueue_style');


//Registro de scripts:

    function register_enqueue_scripts(){
        $theme_data = wp_get_theme();

    /* Deregister scripts*/



    /* Registrando Scripts */

    wp_register_script('bootstrap', get_parent_theme_file_uri ('/assets/vendor/js/bootstrap.min.js'), array('jquery_migrate'), null, true);
    wp_register_script('easingJquery', get_parent_theme_file_uri ('/assets/vendor/js/jquery.easing.min.js'), array('jquery_migrate'), null, true);
    wp_register_script('scrollreveal', get_parent_theme_file_uri ('/assets/vendor/js/scrollreveal.min.js'), array('jquery_migrate'), null, true);
    wp_register_script('macnificPopup', get_parent_theme_file_uri ('/assets/vendor/js/jquery.magnific-popup.min.js'), array('jquery_migrate'), null, true);
    wp_register_style('lity', get_parent_theme_file_uri('assets/vendor/js/lity.js'), null, '3.0.0', true);
    wp_register_script('mainJS', get_parent_theme_file_uri ('assets/js/script.js'), array('jQuery3'), null, true);

    /* Enqueue scripts */

    wp_enqueue_script('bootstrap');
    wp_enqueue_script('easingJquery');
    wp_enqueue_script('scrollreveal');
    wp_enqueue_script('magnificPopup');
    wp_enqueue_script('mainJS');

    }

    add_action('wp_enqueue_scripts' , 'register_enqueue_scripts');


//Logo Personalizado
    function config_custom_logo() {
        add_theme_support('custom-logo' , array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        ));
    }

    add_action('after_setup_theme', 'config_custom_logo');


//Tamaños personalizados de imagenes

  function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }

  function dl_image_sizes( $sizes ) {

    $add_sizes = array(
      'platos-menu'     => __( 'Tamaño de las imágenes del menu en el home' ),
      'square'              => __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'    => __( 'Tamaño personalizado para la imagen destada de los post' ),
      'custom-size-blog'    => __( 'Tamaño personalizado para la imagen destada de los post' )
    );

    return array_merge( $sizes, $add_sizes );

  }

  if ( function_exists( 'add_theme_support' ) ) {

    add_image_size( 'platos-menu', 690, 250, true );
    add_image_size( 'square', 400, 400, true );
    add_image_size( 'post-custom-size', 800, 600, true );
    add_image_size( 'custom-size-blog', 400, 300, true );

    add_filter( 'image_size_names_choose', 'dl_image_sizes' );

  }

  add_action( 'after_setup_theme', 'thumbnails_setup' );