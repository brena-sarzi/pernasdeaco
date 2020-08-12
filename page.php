<?php get_header();?>
    <div class="content-area">

         <!-- ÁREA DE SERVIÇOS - LOJA -->
         <div class="container">
                <div class="row">
                    <div class="services-item" style="padding-left:15px;">
                        <?php 
                        if(is_active_sidebar('services' )){
                            dynamic_sidebar('services');
                        }
                        ?>
                    </div>
                </div>  
            </div>    

        <!-- POSTS BLOG -->
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="pages-single col-xl-8 col-md-8 col-12">
                        <?php 
                            // Se houver algum post
                            if(have_posts()):
                                // Enquanto houver posts, mostre-os pra gente 
                                while(have_posts() ): the_post(); 

                            ?>
                                <?php get_template_part( 'template-parts/content-page'); ?>
                            <?php 
                            endwhile;
                        else:
                            ?>
                            <p>There's nothing yet to be displayed...</p>
                        <?php endif; ?>
                       
                    </div>  
                    <?php get_sidebar(); ?>
                </div> 
            </div>
        </section>
    
        <!-- MAPA ACIMA FOOTER -->
        <section class="map">
            <div class="row">
            <?php
            
            $key = get_theme_mod( 'set_map_apikey' );
            $address = urlencode( get_theme_mod( 'set_map_address' ) );

            ?>
            <iframe
                width="100%"
                height="200"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?>&q=<?php echo $address; ?>" allowfullscreen>
            </iframe>
            </div>
         </section>
<!-- FOOTER -->
<?php get_footer(); ?>
   