<?php wp_head(); ?>
<main>
    
    <!-- IMAGEM DO LOGO RESPONSIVA -->
    <div class="container">
        <div class="row">
            <a href="<?php echo get_home_url(); ?>">
                <div class="logo-login col-12">
                    <?php 
                        if(is_active_sidebar('login' )){
                            dynamic_sidebar('login');
                        }
                    
                    ?>  
                </div>
            </a>
        </div>
    </div>
