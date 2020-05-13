<?php 

require get_template_directory() . '/inc/customizer.php';

//Carregando scripts e folhas de estilos
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
    wp_enqueue_style( 'home', get_template_directory_uri() . '/css/home.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'login', get_template_directory_uri() . '/css/login.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'posts', get_template_directory_uri() . '/css/posts.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/css/woocommerce.css', array(), '1.0',
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
        add_theme_support('custom-store', $args);
    }

add_action('after_setup_theme','wpsite_config',0);
add_action('widgets_init','wpsite_sidebars');

function wpsite_sidebars(){
    // SIDEBAR 
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'sidebar',
            'description' => 'Sidebar to be used on Page',
            'before_widget'=> '<div class="widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    // STORE
    register_sidebar (
        array(
            'name' => 'Services',
            'id' => 'services',
            'description' => 'Services',
            'before_widget'=> '<div class="widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    // PAGE LOGIN
    register_sidebar (
        array(
            'name' => 'Login',
            'id' => 'login',
            'description' => 'login',
            'before_widget'=> '<div class="widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    // PAGE APOIAR
    register_sidebar (
        array(
            'name' => 'Apoiar',
            'id' => 'apoiar',
            'description' => 'apoiar',
            'before_widget'=> '<div class="widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    // PAGEPROJETOS
    register_sidebar (
        array(
            'name' => 'Projetos',
            'id' => 'projetos',
            'description' => 'projetos',
            'before_widget'=> '<div class="widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}



function videoThumbSize($embed_size){
    if ( is_home() == 1 ) {
        $embed_size['width'] = 335;
        $embed_size['height'] = 280;
        return $embed_size;
    } else {
        $embed_size['width'] = 600;
        $embed_size['height'] = 480;
        return $embed_size;
    }

}
    
add_filter('embed_defaults', 'videoThumbSize');

function buy_now_submit_form() {
    ?>
     <script>
         jQuery(document).ready(function(){
             // listen if someone clicks 'Buy Now' button
             jQuery('#buy_now_button').click(function(){
                 // set value to 1
                 jQuery('#is_buy_now').val('1');
                 //submit the form
                 jQuery('form.cart').submit();
             });
         });
     </script>
    <?php
   }
   add_action('woocommerce_after_add_to_cart_form', 'buy_now_submit_form');

   add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout($redirect_url) {
  if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {
     global $woocommerce;
     $redirect_url = wc_get_checkout_url();
  }
  return $redirect_url;
}