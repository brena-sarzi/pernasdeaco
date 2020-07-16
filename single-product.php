<?php get_header();?>
    <main>
        <!-- POSTS BLOG -->
        <div id="primary">
            <div id="main">
                <div class="container">
                    <div class="row">
                        <div class="single-product col-xl-8 col-md-8 col-12">

                            <?php 
                            // Se houver algum post
                            if(have_posts()):
                                // Enquanto houver posts, mostre-os pra gente 
                                while(have_posts() ): the_post(); 
                        
                            ?>
                                <?php get_template_part( 'template-parts/content-single-product', get_post_format() ); ?>
                            <?php 
                                endwhile;
                            ?>

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
                        <?php
                            else:
                        ?>
                        <p>There's nothing yet to be displayed...</p>
                        <?php endif; ?>
                </div> 
            </div> 
        </div>
        <section class="map">
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
         </section>
    </main>
<!-- FOOTER -->
<?php get_footer(); ?>

<script>document.querySelector(".onsale").style.display = 'none'</script>
   