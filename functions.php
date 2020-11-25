<?php 
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

require get_template_directory() . '/inc/customizer.php';

//Carregando scripts e folhas de estilos
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', 
    array( 'jquery' ), '4.4.1', true );
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', 
    array(), '4.4.1', 'all' );
    wp_enqueue_style('template', get_template_directory_uri() . '/assets/css/template.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'menu-mobile', get_template_directory_uri() . '/assets/css/menu-mobile.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/assets/css/blog.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'login', get_template_directory_uri() . '/assets/css/login.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'posts', get_template_directory_uri() . '/assets/css/posts.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/mobile.css', array(), '1.0',
    'all' );
    wp_enqueue_style( 'wordpress', get_template_directory_uri() . '/assets/css/wordpress.css', array(), '1.0',
    'all' );


}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Função de configurações do tema
    function wpsite_config(){
    //Registrando nossos menus
        register_nav_menus(
            array(
                'main-menu' => 'Menu Principal',
            )
        );
        
        $args = array(
            'height' => 380,
            'width'  => 1920
        );
        add_theme_support('custom-header', $args );
        add_theme_support('post-thumbnails');
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

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

// Remove the product rating display on product loops
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

add_action( 'woocommerce_single_product_summary', 'pointcomunicacao_single_product_out_of_stock', 20 );
function pointcomunicacao_single_product_out_of_stock(){
     global $product;
     if( !$product->is_in_stock() ){
         echo '<div class="pointcomunicacao-message-out-of-stock">Indisponível</div>';
     }
 }
 add_filter( 'woocommerce_loop_add_to_cart_link', 'pointcomunicacao_message_after_prices', 10, 3 );
function pointcomunicacao_message_after_prices( $add_to_cart_html, $product, $args ){
    if( !$product->is_in_stock() ){
        $add_to_cart_html = '<div class="pointcomunicacao-message-out-of-stock">Indisponível</div>' . $add_to_cart_html;
    }
    return $add_to_cart_html;
}

function mytheme_customize_register( $wp_customize ) {

    // Bloco
    $wp_customize->add_setting( 'header_textcolor' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_textcolor', array(
        'label'        => __('Cor de texto', 'mytheme' ),
        'section'    => 'colors',
    ) ) );

    // Páragrafo sidebar
    $wp_customize->add_setting( 'text_sidebar_color' , array(
    'default'     => "#000000",
    'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_sidebar_color', array(
        'label'        => __( 'Cor do texto sidebar', 'mytheme' ),
        'section'    => 'colors',
    ) ) );

    // Titulo H1
    $wp_customize->add_setting( 'title_color' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_color', array(
        'label'        => __( 'Cor do titulo', 'mytheme' ),
        'section'    => 'colors',
    ) ) );

    // Titulo do sidebar
    $wp_customize->add_setting( 'titlesidebar_color' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'titlesidebar_color', array(
        'label'        => __( 'Cor do titulo sidebar', 'mytheme' ),
        'section'    => 'colors',
    ) ) );
 
    // Background página
    $wp_customize->add_setting( 'background-color' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background-color', array(
        'label'        => __( 'Cor de fundo', 'mytheme' ),
        'section'    => 'colors',
    ) ) );

    // fotter bloco
    $wp_customize->add_setting( 'footer-color' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer-color', array(
        'label'        => __( 'Texto footer', 'mytheme' ),
        'section'    => 'colors',
    ) ) );
   
    // Text card
    $wp_customize->add_setting( 'card-color' , array(
    'default'     => "#000000",
    'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'card-color', array(
        'label'        => __( 'Cor do card', 'mytheme' ),
        'section'    => 'colors',
    ) ) );

    // Sidebar
    $wp_customize->add_setting( 'sidebar-color' , array(
    'default'     => "#000000",
    'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar-color', array(
        'label'        => __( 'Cor do sidebar', 'mytheme' ),
        'section'    => 'colors',
    ) ) );

    // Menu
    $wp_customize->add_setting( 'menu-color' , array(
    'default'     => "#000000",
    'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu-color', array(
        'label'        => __( 'Cor do menu', 'mytheme' ),
        'section'    => 'colors',
    ) ) );

    $wp_customize->add_setting( 'hover-color' , array(
    'default'     => "#000000",
    'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover-color', array(
        'label'        => __( 'Cor do menu Hover', 'mytheme' ),
        'section'    => 'colors',
    ) ) );

    $wp_customize->add_setting( 'buttoncheckout-color' , array(
    'default'     => "#000000",
    'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'buttoncheckout-color', array(
        'label'        => __( 'Botão Checkout', 'mytheme' ),
        'section'    => 'colors',
    ) ) );

    $wp_customize->add_setting( 'checkouthover-color' , array(
    'default'     => "#000000",
    'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'checkouthover-color', array(
        'label'        => __( 'Botão Checkout Hover', 'mytheme' ),
        'section'    => 'colors',
    ) ) );


    $wp_customize->add_setting( 'text-menu' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text-menu', array(
            'label'        => __( 'Texto Menu', 'mytheme' ),
            'section'    => 'colors',
        ) ) );


    $wp_customize->add_setting( 'links' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'links', array(
            'label'        => __( 'Links', 'mytheme' ),
            'section'    => 'colors',
        ) ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );

function mytheme_customize_css()
{
    ?>
    <style type="text/css">
        p { color: #<?php echo get_theme_mod('header_textcolor', "#000000"); ?>; }
        h2 { color: <?php echo get_theme_mod('title_color', "#000000"); ?>; }
        h2.widget-title { color: <?php echo get_theme_mod('titlesidebar_color', "#000000"); ?>; }
        .sidebar p  { color: <?php echo get_theme_mod('text_sidebar_color', "#000000"); ?>; }
        body{ background: <?php echo get_theme_mod('background-color', "#000000"); ?>; }
        .content-area{ background: <?php echo get_theme_mod('background-color', "#000000"); ?>; }
        .text-footer p{ color: <?php echo get_theme_mod('footer-color', "#000000"); ?>; }
        .text-cards{ background: <?php echo get_theme_mod('card-color', "#000000"); ?>; }
        #submit{ background: <?php echo get_theme_mod('card-color', "#000000"); ?>; }
        .comments-area{ background: <?php echo get_theme_mod('card-color', "#000000"); ?>; }
        .comment-form textarea{ background: <?php echo get_theme_mod('card-color', "#000000"); ?>; }
        .comment-respond{ background: <?php echo get_theme_mod('card-color', "#000000"); ?>; }
        .post-card{ background: <?php echo get_theme_mod('card-color', "#000000"); ?>; }
        .text-cards-video{ background: <?php echo get_theme_mod('card-color', "#000000"); ?>; }
        .sidebar{ background: <?php echo get_theme_mod('sidebar-color', "#000000"); ?>; }
        .menu-top{ background: <?php echo get_theme_mod('menu-color', "#000000"); ?>; }
        .social-media-icons{ background: <?php echo get_theme_mod('menu-color', "#000000"); ?>; }
        .footer { background: <?php echo get_theme_mod('menu-color', "#000000"); ?>; }
        .menu-top ul li:hover{ background: <?php echo get_theme_mod('hover-color', "#000000"); ?>; }
        main{ background: <?php echo get_theme_mod('background-color', "#000000"); ?>; }
        .woocommerce-cart table.cart input{ background: <?php echo get_theme_mod('background-color', "#000000"); ?>; }
        .woocommerce-cart table.cart td.actions .coupon .input-text{ background: <?php echo get_theme_mod('card-color', "#000000"); ?>; }
        .woocommerce button.button{ background: <?php echo get_theme_mod('buttoncheckout-color', "#000000"); ?>; }
        .woocommerce button.button:hover{ background: <?php echo get_theme_mod('checkouthover-color', "#000000"); ?>; }
        .page{ background: <?php echo get_theme_mod('card-color', "#000000"); ?>; }
        .menu-top li a{ color: <?php echo get_theme_mod('text-menu', "#000000"); ?>; }
        .icons a{ color: <?php echo get_theme_mod('text-menu', "#000000"); ?>; }
        .fa-search:before{ color: <?php echo get_theme_mod('text-menu', "#000000"); ?>; }
        .fa-bars:before{ color: <?php echo get_theme_mod('text-menu', "#000000"); ?>; }
         a{ color: <?php echo get_theme_mod('links', "#000000"); ?>; }
        .woocommerce-cart table.cart td [type=submit]:not(:disabled), button:not(:disabled){ background: <?php echo get_theme_mod('buttoncheckout-color', "#000000"); ?>; }
        .woocommerce-cart .wc-proceed-to-checkout a.checkout-button{ background: <?php echo get_theme_mod('buttoncheckout-color', "#000000"); ?>; }
        .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover{ background: <?php echo get_theme_mod('checkouthover-color', "#000000"); ?>; }
        .select2-container--default .select2-selection--single .select2-selection__rendered{ background: <?php echo get_theme_mod('card-color', "#000000"); ?>; }
        #order_comments{ background: <?php echo get_theme_mod('card-color', "#000000"); ?>; }
</style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');
function custom_label( $label, $method ) {
    if ( $method->cost == 0 ) {
        $label .= "(Free)";
    }
    return $label;
}
add_filter( 'woocommerce_cart_shipping_method_full_label', 'custom_label', 10, 2 );

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

//Não trazer resultados ao pesquisar uma página
if (!is_admin()) {
    function wpb_search_filter($query) {
    if ($query->is_search) {
    $query->set('post_type', 'post');
    }
    return $query;
    }
    add_filter('pre_get_posts','wpb_search_filter');
}

// HOOKS
add_action( 'add_meta_boxes', 'featuredVideo_add_custom_box' );
add_action( 'save_post', 'featuredVideo_save_postdata' );

// Create metabox
function featuredVideo_add_custom_box() {
    add_meta_box(  'featuredVideo_sectionid', 'Featured Video', 'featuredVideo_inner_custom_box', 'post', 'side' );
}

// Create print box
function featuredVideo_inner_custom_box( $post ) {
    wp_nonce_field( plugin_basename( __FILE__ ), 'featuredVideo_noncename' );
 
    // mostre-me a featured do video se existir
    echo getFeaturedVideo( $post->ID, 260, 120);   
 
    echo '<h4 style="margin: 10px 0 0 0;">URL [YouTube Only]</h4>';
    echo '<input type="text" id="featuredVideoURL_field" name="featuredVideoURL_field" value="'.get_post_meta($post->ID, 'featuredVideoURL', true).'" style="width: 100%;" />';
}
// handle box post
function featuredVideo_save_postdata( $post_id ) {
 
    // verificar e salvar automaticamente
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;
 
    // verificar autorização
    if ( !wp_verify_nonce( $_POST['featuredVideo_noncename'], plugin_basename( __FILE__ ) ) )
      return;
 
    // atualizar metabox
    update_post_meta( $post_id, 'featuredVideoURL', $_POST['featuredVideoURL_field'] );
}
// função auxiliar, exibe o vídeo do YouTube
// que também pode ser usado para exibir o vídeo do YouTube dentro do seu tema
function getFeaturedVideo($post_id, $width = 680, $height = 360) {
    $featuredVideoURL = get_post_meta($post_id, 'featuredVideoURL', true);
 
    preg_match('%(?:youtube\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $featuredVideoURL, $youTubeMatch);
 
    if ($youTubeMatch[1])
        return '<iframe width="'.$width.'" height="'.$height.'" src="http://ww'.
               'w.youtube.com/embed/'.$youTubeMatch[1].'?rel=0&showinfo=0&cont'.
               'rols=0&autoplay=0&modestbranding=1" frameborder="0" allowfulls'.
               'creen ></iframe>';
    else
        return null;
}