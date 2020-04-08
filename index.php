<?php get_header();?>
 
<div class="content-area">
        <main>
            <div class="container">
                <section class="services col-12">
                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="services-item">
                                <?php 
                                if(is_active_sidebar( 'services-1' )){
                                    dynamic_sidebar( 'services-1' );
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                        <div class="services-item">
                                <?php 
                                if(is_active_sidebar( 'services-2' )){
                                    dynamic_sidebar( 'services-2' );
                                }
                                ?>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-12">
                            <div class="services-item">
                                <?php 
                                if(is_active_sidebar( 'services-3' )){
                                    dynamic_sidebar( 'services-3' );
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>  
            </div>    
</div>
    <section class="middle-area">
        <div class="container">
            <div class="row">
                <div class="post col-md-8 col-sm-10 col-12">    
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
    </section>
    
                <div class="container">
                    <div class="row">
                        <section class="map">Mapa</section> 
                    </div>
                </div>  
              
        </main>
    </div>
<?php get_footer(); ?>
   