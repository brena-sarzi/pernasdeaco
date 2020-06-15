<!-- POST -->
<article class="product-single col-12">
<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

    <div class="imagem-product">
        <?php global $product; ?>
        <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" />

    </div>

    <span style="text-align: center;"><h2><?php the_title();?></h2></span>
  
    <span style="text-align: center; font-size:12px;font-weight: bolder;"><p>Publicado em <?php echo get_the_date(); ?> por <?php
    the_author_posts_link(); ?></p></span>

    <?php the_content(); ?>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>


<script>
    document.querySelector(".pointcomunicacao-message-out-of-stock").style.display = 'none'
    document.querySelector(".onsale").style.display = 'none'
    
</script>
        
</article>