<!-- FOOTER -->
<footer>
    <!-- BARRA FOOTER -->
        <div class="row">
            <div class="footer col-12">
                <div class="text-footer">
                    <p style="margin-top:15px;">Todos os direitos reservados a Expandindo Mundos</p>
                        <p>Site desenvolvido por <span style="color:orange;">Estudio Roda Pião</span></p>
                </div>
                <!-- ICONS FOOTER -->
                <div class="link">    
                    <a href="https://www.facebook.com/pernasdeacocicloturismo/" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    
                    <a href="https://www.youtube.com/channel/UCR4_IdacBcPapezoASfjKoQ" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>

                    <a href="https://www.instagram.com/pernas_de_aco/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>
            </div>
        </div>
</footer>
<script src="<?php get_template_directory_uri() . '/assets/js/xzoom-gallery.js' ?>"></script>
<script>
    $(document).ready(function(){
        $("ul.sub-menu").parent().addClass("dropdown");
        $("ul.sub-menu").addClass("dropdown-menu");
        $("ul#menuid li.dropdown a").addClass("dropdown-toggle");
        $("ul.sub-menu li a").removeClass("dropdown-toggle"); 
        $('.navbar .dropdown-toggle').append('<b class="caret"></b>');
        $('a.dropdown-toggle').attr('data-toggle', 'dropdown');
    });
</script>
<script>
    $(document).ready(function () {

    $('.first-button').on('click', function () {

    $('.animated-icon1').toggleClass('open');
    });
    $('.second-button').on('click', function () {

    $('.animated-icon2').toggleClass('open');
    });
    $('.third-button').on('click', function () {

    $('.animated-icon3').toggleClass('open');
    });
    });
</script>
<?php wp_footer(); ?> 
</body>
</html>