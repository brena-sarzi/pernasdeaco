<<<<<<< HEAD
<?php
/**
 * Template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( '<i class="fas fa-search"></i>', 'twentyeleven' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
	</form>
=======

<div class="buscar">
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( '', 'twentyeleven' ); ?></label>
		<input type="text" class="field" name="s" placeholder="buscar" style="font-style: italic; font-size:14px;"/>
		<button><i class="fas fa-search"></i></button>
	</form>
</div>

<!-- <div class="search">
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( '', 'twentyeleven' ); ?></label>
		<input class="search-box" type="text" class="field" name="s" />
	</form>
</div> -->
>>>>>>> ccf921cd412e67d0d3ea3a0fad5b476fc18662a0
