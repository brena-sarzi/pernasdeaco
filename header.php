<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <title>Pernas de Aço</title>
    <?php wp_head(); ?>
</head>
    
<body <?php body_class(); ?>>
<header>
            
    <!-- MENU MOBILE RESPONSIVO -->
        <div class="row">
            <input type="checkbox" id="bt_menu">
            <label for="bt_menu"><i class="fas fa-bars"></i></label> 
            <nav class="menu-mobile col-12">  
                <?php wp_nav_menu( array('theme_location' => 'my_main_menu') ); ?>
            </nav>
        </div>
            
    <!-- SLIDE RESPONSIVO -->
        <div class="row">
            <section class="cover col-12">
                <img src="<?php header_image(); ?>" height="<?php echo get_custom_header('full')->height;?>"
                width="<?php echo get_custom_header()->width;?>" alt="" />
                </section>  
        </div>
        
    <!-- MENU DESKTOP RESPONSIVO -->
        <section class="top-bar">
            <div class="menu-top">
                <div class="container">
                    <div class="row">
                        <nav class="menu-top col-7">
                            <?php wp_nav_menu( array('theme_location' => 'my_main_menu') ); ?>
                        </nav>
                                        
                            <!-- SOCIAL ICONS -->
                            <section class="social-media-icons col-2 ">
                                <div class="icons">
                                    <a class="header" href="https://www.facebook.com/pernasdeacocicloturismo/" target="_blank">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    
                                    <a class="header" href="https://www.instagram.com/pernas_de_aco/" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                
                                    <a class="header" href="https://www.youtube.com/channel/UCR4_IdacBcPapezoASfjKoQ" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>    
                            </section>
            
                        <!-- BARRA DE PESQUISA MENU DESKTOP -->
                            <div class="search col-3">
                                <?php get_search_form() ?>
                            </div>
                    </div>
                </div>
            </div>
        </section>                 
</header>