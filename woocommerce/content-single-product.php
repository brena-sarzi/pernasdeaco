<!-- Página Produtos -->
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<!-- Imagem -->
	<div class="imgStore">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
	</div>

	<!-- DIV Store -->
	<div class="store">

		<!-- Botão de Compra -->
		<?php global $product;  ?>
			<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt" id="buy_now_button">
				<?php echo esc_html('Compre agora'); ?>
			</button>
		<input type="hidden" name="is_buy_now" id="is_buy_now" value="0" />

		<!-- Descrição do Produto -->
		<p><?php echo '<div class="custom-short-description">' . get_the_excerpt() . '</div>'; ?></p>
			
		<!-- Stock -->
		<p><?php 
			global $product; 
			$numleft  = $product->get_stock_quantity(); 
			if($numleft==0) {
			// out of stock
				echo "<span style='color:red;'>Estamos sem stock no momento</span>"; 
			}
			else if($numleft==1) {
				echo "Estamos com ".$numleft ."item restante";
			}
			else {
				echo "Estamos com ".$numleft ."itens restantes";
			}
		?></p>

		<!-- Categorias -->
		<p><?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Categorias:', 'Categories:', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '</span>' ); ?></p>

	</div>

	<!-- Descrição do Conteúdo -->
	<div class="description">
		<p><?php echo apply_filters( 'the_content', get_post_field('post_content') ); ?></p>
	</div>

	<div class="products">
		<?php 

		global $product;

		if( ! is_a( $product, 'WC_Product' ) ){
			$product = wc_get_product(get_the_id());
		}

		woocommerce_related_products( array(
			'posts_per_page' => 4,
			'columns'        => 4,
			'orderby'        => 'rand'
		) ); 

		?>
	</div>
</div>













