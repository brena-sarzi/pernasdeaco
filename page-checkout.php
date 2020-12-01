<?php get_header();?>

	<div class="container">
		<div class="row col-12" style="color:white;">

		<?php while (have_posts()) : the_post(); ?>

		<?php the_content(); ?>

		<?php endwhile; ?>

		</div>
	</div>

	<script>
		$('#customer_details .col-1').removeClass('col-1').addClass('col-12').css({"display": "inline-block", "vertical-align": "top"});
		$('#customer_details .col-2').removeClass('col-2').addClass('col-12').css('display','inline-block');
		$('.woocommerce-MyAccount-content .col-1').removeClass('col-1').addClass('col-12');
		$('.woocommerce-MyAccount-content .col-2').removeClass('col-2').addClass('col-12');
	</script>

<?php get_footer(); ?>
