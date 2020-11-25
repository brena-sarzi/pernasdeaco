<!DOCTYPE html>
<html lang="pt-BR" style="height: auto;">

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

<body>
<header>


<div class="menu-mobile">
    <div class="row">
        <a href="<?php echo get_home_url() ?>">
        <div class="topo-topo col-12">
        </a>
            <?php get_search_form(); ?>
        </div>

    </div>
</div>

<!-- SLIDE RESPONSIVO -->
<div class="row">
    <section class="cover col-12">
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header('full')->height;?>" width="<?php echo get_custom_header()->width;?>" alt="" />
    </section>  
</div>


    <div class="top-bar">
        <div class="container">
            <div class="row">
            
                <nav class="navbar navbar-expand-sm col-xl-7 col-lg-7 col-md-9 col-9" style="padding: 0px;">  
                    <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'main-menu',
                            'depth'             => 4,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>

                </nav>

                <section class="social-media-icons col-xl-2 col-lg-2 col-md-3 col-sm-3   ">
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

                <div class="buscar-form col-xl-3 col-lg-3">
                    <?php get_search_form(); ?>
                </div>

            </div>
        </div>
    </div>
</header> 
