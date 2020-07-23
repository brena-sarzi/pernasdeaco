<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1565190285/Scripts/xzoom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1565190284/Scripts/xzoom.css" media="all" />
    <title>Expandindo Mundos</title>
    <?php wp_head(); ?>
</head>
    
<body <?php body_class(''); ?>>
<header>
            
    <!-- MENU MOBILE RESPONSIVO -->
        <nav class="navbar navbar-dark red lighten-1 mb-4">

        <a class="navbar-brand" href="#">Expandindo Mundos</a>

        <button class="navbar-toggler second-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent23"
            aria-controls="navbarSupportedContent23" aria-expanded="false" aria-label="Toggle navigation">
            <div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent23">
            <ul class="navbar-nav mr-auto">
                <?php wp_nav_menu( array('theme_location' => 'my_main_menu') ); ?>
            </ul>
        </div>

        </nav>
            
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
                        <nav class="menu-top col-xl-7 col-lg-8 col-9">
                            <?php wp_nav_menu( array('theme_location' => 'my_main_menu') ); ?>
                        </nav>
                                        
                            <!-- SOCIAL ICONS -->
                            <section class="social-media-icons col-xl-2 col-sm-3  ">
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
                            <div class="search col-xl-3 col-sm-2 ">
                                <?php get_search_form() ?>
                            </div>
                    </div>
                </div>
            </div>
        </section>                 
</header>