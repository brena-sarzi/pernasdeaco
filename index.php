<?php get_header();?>
    <div class="content-area">
        <main>

        <!-- ÁREA DE SERVIÇOS - LOJA -->
        <div class="container">
                <section class="services col-12">
                    <div class="row">
                        <div class="services-item">
                        <?php 
                        if(is_active_sidebar('services' )){
                            dynamic_sidebar('services');
                        }
                        ?>
                        </div>
                    </div>
                </section>  
            </div>    
        </div>

        <!-- POSTS BLOG -->
        <section class="middle-area">
            <div class="container">
                <div class="row">
                <div class="post col-xl-8 col-md-9 col-12" style="display:block;">
                            <?php 
                            // Se houver algum post
                            if(have_posts()):
                                // Enquanto houver posts, mostre-os pra gente 
                                while(have_posts() ): the_post(); 

                            ?>
                                <?php get_template_part( 'template-parts/content' ); ?>
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
            </div>
        </section>
    
        <!-- MAPA ACIMA FOOTER -->
        <div class="row">
            <section class="map">Mapa</section> 
        </div>
        
        </main>
    </div>

<!-- FOOTER -->
<?php get_footer(); ?>
   