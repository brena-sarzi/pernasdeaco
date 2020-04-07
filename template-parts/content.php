<article>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('medium') ?>
    <span style="color:black;"><p>Publicado em <?php echo get_the_date(); ?> por <?php
        the_author_posts_link(); ?></p></span>
    <span style="color:black;"><p>Categorias: <?php the_category(''); ?></p></span>
    <p><?php the_tags( 'Tags:',','); ?></p>
    <?php the_content(); ?>
</article>