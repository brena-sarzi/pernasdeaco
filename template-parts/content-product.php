<?php
    
    $url = $_GET['product_cat'];
   
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 6,
        'product_cat' => $url,
        'orderby' => 'title', 
        'order' => 'ASC',
    );
    
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
    
    $thumbnail = get_the_post_thumbnail($post->ID);

    global $product;

        echo '<div class="produtos-categoria col-xl-4 col-md-4 col-sm-6 col-12">';
            echo '<a href="'.get_permalink().'">';
            echo $thumbnail; 
            echo '<h2>' . get_the_title() . '</h2>';
            echo '</a>';
        echo '</div>';

    endwhile;
    wp_reset_query(); 

?>