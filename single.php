
<?php get_header();?>
<main>
<!-- POSTS BLOG -->
        <div class="container">
            <div class="row">
                <div class="single-post col-xl-8 col-md-8 col-12">
            <?php 
                // Enquanto houver posts, mostre-os pra gente 
                while(have_posts() ): the_post(); 

                get_template_part( 'template-parts/content', 'single' );
            ?>

               <div class="row">
                    <div class="pages-post text-left col-6">
                        <?php next_post_link('<i class="fas fa-angle-double-left"></i><i class="fas fa-bicycle"></i> %link'); ?>
                    </div>
                    <div class="pages-post text-right col-6">
                        <?php previous_post_link('%link  <i class="fas fa-bicycle"></i><i class="fas fa-angle-double-right"></i>'); ?>
                    </div>
               </div>
               
            <?php
                if( comments_open() || get_comments_number() ):
                    comments_template();
                endif;

            endwhile;
            ?>
     
           </div>
           <?php get_sidebar(); ?>
        </div>

        </div> 
        
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
<!-- FOOTER -->
<?php get_footer(); ?>