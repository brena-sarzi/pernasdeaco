<!-- POST -->
<article class="cards col-full-2 col-12 ">

        <!-- DIVISAO DE TEXTO -->
        <div class="text-cards-video">
            
            <!-- CATEGORIAS -->
            <div class="category-video">
            <?php the_category(''); ?>  
            </div>
        
            <!-- TITULO DO POST -->
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            
            <div class="link-video">
            <p><a href="<?php the_permalink(); ?>"><i class="fas fa-step-backward"></i> <i class="far fa-play-circle"></i> <i class="fas fa-step-forward"></i></a></p>
            </div>
            
            <!-- LIMITE DE LINHAS DO POST -->
            <p class="abstract">
            <?php
            $excerpt = get_the_excerpt();

            $excerpt = substr($excerpt, 0, 150);
            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
            echo $result;?>...
            </p>
            <div id="fourth">
            <div class="link-post">
                <a href="<?php the_permalink(); ?>">
                   <i class="fas fa-book-reader"></i>
                    Leia mais...
                </a>
            </div>
            </div>
        
        </div>
</article>


