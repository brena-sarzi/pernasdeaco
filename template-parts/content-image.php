<article>
    <?php the_post_thumbnail('medium') ?>    
    <?php the_category(''); ?>    
    <h2><?php the_title(); ?></h2> por <?php
        the_author_posts_link(); ?></p>
    <p><?php the_tags( 'Tags:',','); ?></p>
    <?php the_content(); ?>
</article>
