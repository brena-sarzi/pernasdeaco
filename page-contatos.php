<?php get_header();?>
    <div class="content-area">
        <main>
        
        <!-- ÁREA DE SERVIÇOS - LOJA -->
        <div class="container-full">
            <div class="container container_up">
                <section class="services col-12">
                    <div class="row">
                        <div class="services-item">
                        <?php 
                        if(is_active_sidebar('services' )){
                            dynamic_sidebar('services');
                        }
                        ?>
                        </div>
                    </div>
                </section>  
            </div>    
        </div>

        <!-- CONTATOS -->
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="usuarios col-xl-8 col-md-9 col-12">
                      
                        
                        
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
   