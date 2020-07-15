<!-- POST -->

<article class="post-card col-12">

<div class="imagem-post">
    <?php the_post_thumbnail( 'full' ) ?>
</div>
    <!-- CATEGORIAS -->
     <?php the_category(''); ?>  

    <!-- TITULO DO POST -->
    <h2><?php the_title(); ?></h2>

    <!-- DIA DE PUBLICAÇÃO -->
    <span style="font-size:12px;font-weight: bolder;"><p>Publicado em <?php echo get_the_date(); ?> por <?php
            the_author_posts_link(); ?></p></span>
    
    <!-- LIMITE DE LINHAS DO POST -->
    <?php echo the_content();?>
     
    <!-- SOCIAL ICONS -->
    <div class="icons-post col-12 ">
        <div class="icons-single">
            <a class="header" href="https://www.facebook.com/pernasdeacocicloturismo/" target="_blank">
                <i class="fab fa-facebook-square"></i>
            </a>
            
            <a class="header" href="https://www.instagram.com/pernas_de_aco/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            
            <a class="header" href="https://www.youtube.com/channel/UCR4_IdacBcPapezoASfjKoQ" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>  
        </div>    
    </div>
        
</article>
