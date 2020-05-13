<!-- POST -->
<article class="cards" <?php post_class( array('class' => 'secondary') ); ?>>
    
    <!-- IMAGEM DO POST -->
    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-fluid' ) ); ?></a>
    </div>
    
        <!-- DIVISAO DE TEXTO -->
        <div class="text-cards">
            
            <!-- CATEGORIAS -->
            <?php the_category(''); ?>    
            
            <!-- TITULO DO POST -->
            <h2><?php the_title(); ?></h2>
            
            <!-- DIA DE PUBLICAÇÃO -->
            <p>Publicado em <?php echo get_the_date(); ?> por <?php
            the_author_posts_link(); ?></p>
            
            <!-- TAGS -->
            <p><?php the_tags( 'Tags:',','); ?></p>
            
            <!-- LIMITE DE LINHAS DO POST -->
            <?php
            $excerpt = get_the_excerpt();

            $excerpt = substr($excerpt, 0, 150);
            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
            echo $result;?>
            
            <a href="<?php the_permalink(); ?>">
                <div class="icon-post">
                    <i class="fas fa-book-reader">
                        <div class="leia-mais">Leia mais...</div>
                    </i>
                </div>
            </a>
        
        </div>
    <?php the_excerpt(); ?>
</article>
