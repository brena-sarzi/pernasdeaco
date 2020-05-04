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
                    <div class="apoiar col-8">
                    <div class="apoiar">
                        <?php 
                        if(is_active_sidebar('apoiar' )){
                            dynamic_sidebar('apoiar');
                        }
                        ?>
                        </div>
                                    
                            <div class="caixa-comentarios">
                                <form class="caixa-comentarios">
                                    <div class="name-comentario">
                                        <label for="name">Nome:</label>
                                        <input type="text"><br>
                                    </div>

                                    <div class="mensagem-comentario">
                                        <label for="text">Mensagem:</label>
                                        <textarea name="mensagem" rows="5" cols="60"></textarea>
                                        
                                    </div>
                                    <div class="button-comentarios">
                                    <button type="button">Enviar</button>
                                    </div>
                                    
                                </form>  
                            </div>

                    </div>  
                    <?php get_sidebar(); ?>
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

<!-- FOOTER -->
<?php get_footer(); ?>
   