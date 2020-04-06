<?php 

//Carregando nossos scripts e folhas de estilos
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', 
    array( 'jquery' ), '4.4.1', true );
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', 
    array(), '4.4.1', 'all' );
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'menu-mobile', get_template_directory_uri() . '/css/menu-mobile.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'store', get_template_directory_uri() . '/css/store.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css', array(), '1.0',
    'all' );


}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Função de configurações do tema
    function wpsite_config(){
    //Registrando nossos menus
        register_nav_menus(
            array(
                'my_main_menu' => 'Main Menu',
                'footer_menu'  => 'Footer Menu'
            )
        );
        
        $args = array(
            'height' => 380,
            'width'  => 1920
        );
        add_theme_support('custom-header', $args );
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('video', 'image'));
    }

add_action('after_setup_theme','wpsite_config',0);



