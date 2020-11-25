
<?php get_header(); ?>
<div class="banner-topo-search">
    <div class="row bannerPesquisa">
        <div class="container"></div>
    </div>

    <div class="row">   
        <div class="titles-mobile-search col-12">
            <div class="container">
                <div class="titles-search">
                    <h2>
                        RESULTADOS DA PESQUISA
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="search-content col-12">
                <?php 
                    // Enquanto houver posts, mostre-os pra gente 
                    while(have_posts() ): the_post(); 

                        get_template_part( 'template-parts/content', 'search' );

                        if( comments_open() || get_comments_number() ):
                            comments_template();
                        endif;

                    endwhile;
                ?>
                            
            </div>    
        </div>
    </div> 
    <script>
        let lines = document.querySelectorAll('.row .singlePesquisa');
        let quantidadelines = lines.length;
        lines[quantidadelines - 1].style.borderBottom = 'none'

        let margin = document.querySelectorAll('.row .singlePesquisa');
        let quantidademargin = margin.length;
        margin[quantidademargin - 1].style.marginBottom = '0px'
    </script>

<?php get_footer(); ?>
