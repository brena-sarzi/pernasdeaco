<?php get_header();?>
 
<div class="content-area">
        <main>
        <div class="container">
            <div class="row">
                <section class="services col-12">
                    <div class="container">
                    <div class="row">
                         
                    </div>
                </div>    
            </section>
            </div>
        </div>
            
        
        
    <section class="middle-area">
        <div class="container">
            <div class="row">
                <div class="post col-md-8">    
                    <?php 
                    // Se houver algum post
                    if(have_posts()):
                        // Enquanto houver posts, mostre-os pra gente 
                        while(have_posts() ): the_post(); 

                    ?>

                    <article>
                        <h2><?php the_title(); ?></h2>
                        <?php the_post_thumbnail('medium') ?>
                        <span style="color:black;"><p>Publicado em <?php echo get_the_date(); ?> por <?php
                            the_author_posts_link(); ?></p></span>
                        <span style="color:black;"><p>Categorias: <?php the_category(''); ?></p></span>
                        <p><?php the_tags( 'Tags:',','); ?></p>
                        <?php the_content(); ?>
                    </article>

                    <?php 
                    endwhile;
                else:
                    ?>
                    <p>There's nothing yet to be displayed...</p>
                <?php endif; ?>
                </div>
                <aside class="sidebar col-md-4">Barra Lateral</aside>
            </div>
        </div> 
    </section>
            <section class="map">
                <div class="container">
                    <div class="row">Mapa</div>
                </div>    
            </section>
        </main>
    </div>
<?php get_footer(); ?>
   