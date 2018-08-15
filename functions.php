<!-- get_template_directory_uri()     => retorna la dirección de la plantilla original desde un child-theme -->
<!-- get_stylesheet_directory_uri()   => retorna la dirección de la plantilla activada, sea una original o un child-theme -->
<!-- get_parent_theme_file_uri($file) => retorna el archivo $file ubicado en la plantilla original -->
<!-- get_theme_file_uri($file)        => retorna el archivo $file ubicado en el child-theme, si no, lo busca en la plantilla original -->

<?php
  function enqueue_styles() {
    wp_register_style( 'parent-style', get_template_directory_uri() . '/style.css', null, null, null );
    // wp_register_style( 'child-style', get_stylesheet_directory_uri() . '/style-child.css', null, null, null );

    wp_enqueue_style( 'parent-style' );
    // wp_enqueue_style( 'child-style' );

    // if ( is_page( 'página de contacto' ) ) {
    //   wp_register_style( 'contactform-style', get_stylesheet_directory_uri() . '/style-contactform.css', null, null, null );
    //   wp_enqueue_style( 'contactform-style' );
    // }

  }

  add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

  function my_widgets_init() {

    register_sidebar( array(
      'name'          => 'Página de Contacto',
      'id'            => 'contactform_widget',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => ''
    ) );

  }

  add_action( 'widgets_init', 'my_widgets_init' );
?>
