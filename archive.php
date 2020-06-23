<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="container">
	<div id="content" role="main">

		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_search_form(); ?>
		
        <ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>

	</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>