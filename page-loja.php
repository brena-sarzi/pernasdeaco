<?php get_header();?>

	<main>
		<div class="container">
			<div class="row">
				<div class="products-store col-xl-8 col-md-8 col-12">
					<?php get_template_part( 'template-parts/content-product'); ?>
				</div><!--/.products-->
					<?php get_sidebar(); ?>
			</div>
		</div>
	</main>


<!-- MAPA ACIMA FOOTER -->
	<section class="map">
		<div class="row">
			<?php
			
			$key = get_theme_mod( 'set_map_apikey' );
			$address = urlencode( get_theme_mod( 'set_map_address' ) );

			?>
			<iframe
				width="100%"
				height="200"
				frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?>&q=<?php echo $address; ?>" allowfullscreen>
			</iframe>
		</div>
	</section>
		 
<!-- FOOTER -->
<?php get_footer(); ?>
   