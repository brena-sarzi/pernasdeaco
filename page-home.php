<?php get_header();?>
    <div class="content-area">
        <main>
        <!-- <div class="container">
                <section class="services col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="services-item">
                                <?php 
                                if(is_active_sidebar( 'services-1' )){
                                    dynamic_sidebar( 'services-1' );
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>  
            </div>     -->
            
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        
                        <div class="news col-md-8">
                            <div class="container">
                                <h1>Blog</h1>
                                <div class="row">
                                    <?php 
                                    $featured = new WP_Query('post_type=post&posts_per_page=1&cat=8,4');

                                    if($featured->have_posts() ):
                                        while($featured->have_posts() ): $featured->the_post();
                                    ?>
                          
                                        
                                    <?php
                                        endwhile;
                                            wp_reset_postdata();
                                        endif;
                                  
                                
                                        $args = array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 2,
                                            'category__not_in' => array( 5 ),
                                            'category__in' => array(8,4),
                                            'offset' => 1
                                    
                                        );
                                    $secondary = new WP_Query($args);

                                    if($secondary->have_posts() ):
                                        while($secondary->have_posts() ): $secondary->the_post();
                                    ?>
                                    <div class="col-12">
                                        <?php 
                                        get_template_part( 'template-parts/content', 'secondary' );
                                        ?>

                                    </div>
                                        
                                    <?php
                                        endwhile;
                                            wp_reset_postdata();
                                        endif;
                                    ?>
                           
                                <div class="col-12">
                                        <?php 
                                        get_template_part( 'template-parts/content', 'featured' );
                                        ?>

                                    </div>
                                    </div>
                                </div>
                                                   
                       

                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div> 
            </section>
            <section class="map">
                <div class="container">
                    <div class="row">Mapa</div>
                </div>    
            </section>
        </main>
    </div>
<?php get_footer(); ?>
   