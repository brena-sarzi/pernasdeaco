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
            
            <!-- DIA DE PUBLICAÇÃO -->
            <span style="font-size:12px;font-weight: bolder;text-align: center;margin-bottom: 20px;"><p>Publicado em <?php echo get_the_date(); ?> por <?php
            the_author_posts_link(); ?></p></span>
            
            <!-- TAGS -->
            <p><?php the_tags( 'Tags:',','); ?></p>
            
            <!-- LIMITE DE LINHAS DO POST -->
            <p><?php the_content(); ?></p>
        
        </div>
</article>

