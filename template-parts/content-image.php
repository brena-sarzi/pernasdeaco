<article>
<?php the_post_thumbnail('medium') ?>

<div class="text-cards">
    <?php the_category(''); ?>    
    <h2><?php the_title(); ?></h2> por <?php
        the_author_posts_link(); ?></p>
    <p><?php the_tags( 'Tags:',','); ?></p>
    <?php the_content(); ?>
    </div>
</article>

