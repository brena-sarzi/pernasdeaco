<?php get_header();?>

        <!-- POSTS BLOG -->
        <div id="primary">
            <div id="main">
                <div class="container">
                    <?php 
                        // Enquanto houver posts, mostre-os pra gente 
                        while(have_posts() ): the_post(); 

                        get_template_part( 'template-parts/content', 'single' );

                        if( comments_open() || get_comments_number() ):
                            comments_template();
                        endif;

                    endwhile;
                    ?>
                </div> 
            </div> 
        </div>
<!-- FOOTER -->
<?php get_footer(); ?>
   