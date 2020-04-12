<!-- POST -->
<article class="post-card col-11">

    <!-- IMAGEM DO POST -->
    <?php the_post_thumbnail('medium') ?>  
    
    <!-- TITULO DO POST -->
    <h2><?php the_title(); ?></h2>
    
    <!-- TAGS -->
    <p><?php the_tags( 'Tags:',','); ?></p>
    
    <!-- LIMITE DE LINHAS DO POST -->
    <?php
    echo the_content();
    ?>
        
</article>

