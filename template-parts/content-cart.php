<article class="page col-12 ">

    <!-- TITULO DO POST -->
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    
    <!-- DIA DE PUBLICAÇÃO -->
    <span style="font-size:12px;font-weight: bolder;text-align: center;margin-bottom: 20px;"><p>Publicado em <?php echo get_the_date(); ?> por <?php
    the_author_posts_link(); ?></p></span>
    
    <!-- TAGS -->
    <p><?php the_tags( 'Tags:',','); ?></p>
    
    <!-- LIMITE DE LINHAS DO POST -->
        <?php the_content(); ?>

</article>