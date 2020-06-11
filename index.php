<?php get_header();?>
    <div class="content-area">

        <!-- ÁREA DE SERVIÇOS - LOJA -->
            <div class="container">
                <div class="row">
                    <div class="services-item">
                        <?php 
                        if(is_active_sidebar('services' )){
                            dynamic_sidebar('services');
                        }
                        ?>
                    </div>
                </div>  
            </div>    

        <!-- POSTS BLOG -->
        <main>

        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="post col-xl-8 col-md-8 col-12">

                        <?php 
                        // Se houver algum post
                        if(have_posts()):
                            // Enquanto houver posts, mostre-os pra gente 
                            while(have_posts() ): the_post(); 

                        ?>
                            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                        <?php 
                            endwhile;
                        ?>
                        <?php
                            else:
                        ?>
                        <p>There's nothing yet to be displayed...</p>
                        <?php endif; ?>

                    </div>
                    <?php get_sidebar(); ?> 
                </div>  
                        <!-- PAGES POSTS -->
                        <div class="pages text-left col-8">
                            <?php previous_posts_link('<i class="fas fa-angle-double-left"></i> <i class="fas fa-bicycle"></i>'); ?>
                        </div>
                        
                        <div class="pages text-right col-8">
                            <?php next_posts_link('<i class="fas fa-bicycle"></i> <i class="fas fa-angle-double-right"></i>') ?>
                        </div>

                   
            </div> 
        </section>
    
        <!-- MAPA ACIMA FOOTER -->
        <div class="map">
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
        </div>
        </main>
    </div>
<!-- FOOTER -->
<?php get_footer(); ?>
   