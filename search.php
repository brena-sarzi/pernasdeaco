<?php get_header();?>
<main>
        <!-- POSTS BLOG -->
        <div id="primary">
            <div id="main">
                <div class="container">
                    <div class="row">
                        <div class="post col-xl-8">
                            <?php 
                                // Enquanto houver posts, mostre-os pra gente 
                                while(have_posts() ): the_post(); 

                                    get_template_part( 'template-parts/content', 'search' );
            
                                    if( comments_open() || get_comments_number() ):
                                        comments_template();
                                    endif;

                                endwhile;

                                the_posts_pagination( 
                                    array(
                                        'prev_text' => '<i class="fas fa-angle-double-left"> </i><i class="fas fa-bicycle"></i>',
                                        'next_text' => '<i class="fas fa-bicycle"></i> <i class="fas fa-angle-double-right"></i>'
                                    )
                                );
                            ?>
                        
                        </div>
                   <?php get_sidebar(); ?>
                    </div>
                </div> 
            </div> 
        </div>
        </main>
<!-- FOOTER -->
<?php get_footer(); ?>
   