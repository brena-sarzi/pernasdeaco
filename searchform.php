
<div class="buscar">
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" placeholder="buscar" style="font-style: italic; font-size:14px;"/>
		<button><i class="fas fa-search"></i></button>
	</form>
</div>

<div class="search">
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( '', 'twentyeleven' ); ?></label>
		<input class="search-box" type="text" class="field" name="s" />
	</form>
</div>
