<!-- POST -->
<article class="page col-12 ">
    
    <!-- IMAGEM DO POST -->
    <div class="img-page">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
    </div>
        <!-- DIVISAO DE TEXTO -->
        <div class="page-post">
            
            <!-- CATEGORIAS -->
            <?php the_category(''); ?>  

            <!-- TITULO DO POST -->
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            
            <!-- LIMITE DE LINHAS DO POST -->
            <?php the_content(); ?>
        
        </div>
</article>

