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
                            <?php 
                            // Se houver algum post
                            if(have_posts()):
                                // Enquanto houver posts, mostre-os pra gente 
                                while(have_posts() ): the_post(); 

                            ?>

                                <p>Conteúdo vindo do arquivo home.php</p>

                            <?php 
                            endwhile;
                        else:
                            ?>
                            <p>Ainda não há nada a ser exibido ...</p>
                        <?php endif; ?>
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
   