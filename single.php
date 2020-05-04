<?php get_header();?>

        <!-- POSTS BLOG -->
        <div id="primary">
            <div id="main">
                <div class="container">
                    <div class="row">
                        <div class="post col-xl-8 col-md-8 col-12">
                    <?php 
                        // Enquanto houver posts, mostre-os pra gente 
                        while(have_posts() ): the_post(); 

                        get_template_part( 'template-parts/content', 'single' );
                    ?>

                       <div class="row">
                            <div class="pages-post text-left col-6">
                                <?php next_post_link('<i class="fas fa-angle-double-left"></i> %link'); ?>
                            </div>
                            <div class="pages-post text-right col-6">
                                <?php previous_post_link('%link <i class="fas fa-angle-double-right"></i>'); ?>
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
                
            </div> 
           
        </div>
<!-- FOOTER -->
<?php get_footer(); ?>
   