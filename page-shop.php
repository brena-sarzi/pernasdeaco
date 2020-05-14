<?php get_header();?>
	<main>
		<div class="container">
			<div class="row">
				<div class="products-store col-xl-8">
					<?php
						$args = array(
							'post_type' => 'product',
							'posts_per_page' => 12
							);
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) {
							while ( $loop->have_posts() ) : $loop->the_post();
								wc_get_template_part( 'content', 'product' );
							endwhile;
						} else {
							echo __( 'No products found' );
						}
						wp_reset_postdata();
					?>
					</div><!--/.products-->
				<?php get_sidebar(); ?>
			</div>
			
		</div>

        <!-- MAPA ACIMA FOOTER -->
        <div class="row">
            <iframe
                width="100%"
                height="200"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC55IpUaK2VJ1jAeaCLTlhDjSj5jH6C7nM
                &q=Eiffel+Tower,Paris+France" allowfullscreen>
            </iframe>
        </div>
	</main>
<!-- FOOTER -->
<?php get_footer(); ?>
   