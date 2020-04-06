<footer>
    <!-- BARRA FOOTER -->
        <div class="row">
            
            <div class="footer col-12">
            <div class="text-footer">
            <p>Todos os direitos reservados a Pernas de Aço</p>
            <p>Site desenvolvido por <span style="color:orange;">Estudio Roda Pião</span></p>
            </div>
               <!-- ICONS FOOTER -->
                <div class="link">    
                    <a href="https://www.youtube.com/channel/UCR4_IdacBcPapezoASfjKoQ" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    
                    <a href="https://www.facebook.com/pernasdeacocicloturismo/" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                            
                    <a href="https://www.instagram.com/pernas_de_aco/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            <!-- MENU FOOTER -->
            <nav class="footer-menu">
                <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_menu'
                    )
                );
                ?>
            </nav>
            </div>
        </div>
</footer>
<?php wp_footer()?>
</body>
</html>