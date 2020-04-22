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
        </div>


        <!-- POSTS BLOG -->
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="projetos col-xl-8">
                        <?php 
                        if(is_active_sidebar('projetos' )){
                            dynamic_sidebar('projetos');
                        }
                        ?>    
                    </div>
                    <?php get_sidebar(); ?>
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
   