<!-- POST -->
<article class="cards col-xl-12 col-md-8 col-12">
    
    <!-- IMAGEM DO POST -->
    <div class="hover10">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium') ?></a>
    </div>
        <!-- DIVISAO DE TEXTO -->
        <div class="text-cards">
            
            <!-- CATEGORIAS -->
            <?php the_category(''); ?>  

            <!-- TITULO DO POST -->
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            
            <!-- DIA DE PUBLICAÇÃO -->
            <span style="font-size:12px;font-weight: bolder;"><p>Publicado em <?php echo get_the_date(); ?> por <?php
            the_author_posts_link(); ?></p></span>
            
            <!-- TAGS -->
            <p><?php the_tags( 'Tags:',','); ?></p>
            
            <!-- LIMITE DE LINHAS DO POST -->
            <?php
            $excerpt = get_the_excerpt();

            $excerpt = substr($excerpt, 0, 70);
            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
            echo $result;?>
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

