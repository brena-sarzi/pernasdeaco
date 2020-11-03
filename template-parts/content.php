<!-- POST -->
<article class="cards col-full-2 col-12 ">
    
    <!-- IMAGEM DO POST -->
    <div class="hover10">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
    </div>
        <!-- DIVISAO DE TEXTO -->
        <div class="text-cards">
            
            <!-- CATEGORIAS -->
            <?php the_category(''); ?>

            <!-- TITULO DO POST -->
            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            
            <!-- LIMITE DE LINHAS DO POST -->
            <p class="abstract">
            <?php
            $excerpt = get_the_excerpt();

            $excerpt = substr($excerpt, 0, 100);
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

