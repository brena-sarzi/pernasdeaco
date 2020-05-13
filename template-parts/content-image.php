<!-- IMAGEM DOS POSTS -->
<article>

    <!-- TAMANHO IMAGEM -->
    <?php the_post_thumbnail('full') ?>

    <!-- IMAGEM DO CARD -->
    <div class="text-cards">
        <!-- CATEGORIA -->
        <?php the_category(''); ?> 
        <!-- TITULO -->
        <h2><?php the_title(); ?></h2> por 
        <!-- AUTOR -->
        <?php the_author_posts_link(); ?></p>
        <!-- TAGS -->
        <p><?php the_tags( 'Tags:',','); ?></p>
        <!-- CONTEÚDO -->
        <?php the_content(); ?>
    </div>
    
</article>

