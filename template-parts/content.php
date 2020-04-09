<article class="cards">
    <?php the_post_thumbnail('medium') ?>
    <div class="text-cards">
    <?php the_category(''); ?>    
    <h2><?php the_title(); ?></h2>
   <p>Publicado em <?php echo get_the_date(); ?> por <?php
        the_author_posts_link(); ?></p>
    <p><?php the_tags( 'Tags:',','); ?></p>
    <?php echo get_the_excerpt(); ?>
    </div>
</article>

