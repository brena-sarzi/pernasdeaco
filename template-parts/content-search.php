<div class="row singlePesquisa" style="border-bottom:2px solid #a6523f; padding-bottom:40px; margin-bottom:40px;">
    <div class="pesquisa col-12"> 
        <!-- image video iframe -->
        <?php echo getFeaturedVideo( $post->ID, 700, 340); ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
<div class="row">
        <div style="height:auto; width:auto; margin:0px;" class="category col-12" ><?php the_category(); ?></div>
        <h6 style="height:auto; width:auto; color:white;font-weight: bold;" class="col-12" ><?php the_title(); ?></h6>
        <p class="abstract-search col-12" style=" color:white;">
            <?php
            $excerpt = get_the_excerpt();

            $excerpt = substr($excerpt, 0, 100);
            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
            echo $result;
            echo '...'
            ?>
        </p>
        </div>

        <div id="fourth">
            <div class="link-post">
                <a href="<?php the_permalink(); ?>">
                   <i class="fas fa-book-reader"></i>
                    Leia mais...
                </a>
            </div>
        </div>

    </div>
</div>



