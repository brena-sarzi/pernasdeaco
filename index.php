<?php get_header();?>
    <div class="content-area">
        <main>

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
        <section class="middle-area">
            <div class="container">
                <div class="row">
                <div class="post col-xl-8 col-12" style="display:block;">
                            <?php 
                            // Se houver algum post
                            if(have_posts()):
                                // Enquanto houver posts, mostre-os pra gente 
                                while(have_posts() ): the_post(); 

                            ?>
                                <?php get_template_part( 'template-parts/content' ); ?>
                            <?php 
                                endwhile;
                            ?>

                            <div class="row">
                                <div class="pages text-left col-6">
                                    <?php previous_posts_link('<i class="fas fa-angle-double-left"></i> <i class="fas fa-bicycle"></i>'); ?>
                                </div>
                                <div class="pages text-right col-6">
                                    <?php next_posts_link('<i class="fas fa-bicycle"></i> <i class="fas fa-angle-double-right"></i>') ?>
                                </div>
                            </div>

                            <?php
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
            <iframe
                width="100%"
                height="200"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC55IpUaK2VJ1jAeaCLTlhDjSj5jH6C7nM
                &q=Eiffel+Tower,Paris+France" allowfullscreen>
            </iframe>
        </div>
        
        </main>
    </div>

<!-- FOOTER -->
<?php get_footer(); ?>
   