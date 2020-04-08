<article>
    <?php the_post_thumbnail('medium') ?>
    <h2><?php the_title(); ?></h2>
   <p>Publicado em <?php echo get_the_date(); ?> por</p>
    <p>Categorias: <?php the_category(''); ?></p>
    <p><?php the_tags( 'Tags:',','); ?></p>
    <?php the_content(); ?>
</article>
