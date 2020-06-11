<!-- POST -->
<article class="cards col-full-2 col-12 ">

    <!-- IMAGEM DO POST -->
    <div class="video">
        <?php the_content(); ?>
    </div>
        <!-- DIVISAO DE TEXTO -->
        <div class="text-cards-video">
            
            <!-- CATEGORIAS -->
            <div class="category-video">
            <?php the_category(''); ?>  
            </div>
            <!-- TITULO DO POST -->
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            
            <!-- DIA DE PUBLICAÇÃO -->
            <span style="font-size:12px;font-weight: bolder;"><p>Publicado em <?php echo get_the_date(); ?> por <?php
            the_author_posts_link(); ?></p></span>
            

            <div class="link-video">
            <p><a href="<?php the_permalink(); ?>"><i class="fas fa-step-backward"></i> <i class="far fa-play-circle"></i> <i class="fas fa-step-forward"></i></a></p>
            </div>
            <!-- TAGS -->
            <p><?php the_tags( 'Tags:',','); ?></p>
            
            <!-- LIMITE DE LINHAS DO POST -->
            <div id="fourth">
                <div class="link-post-video">
                    <a href="<?php the_permalink(); ?>">
                        <i class="fas fa-book-reader"></i>
                            Leia mais...
                    </a>
                </div>
            </div>
        
        </div>
</article>


