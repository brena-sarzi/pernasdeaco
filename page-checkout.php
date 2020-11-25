<?php get_header();?>
<div class="container">
	<div class="row">
		<div class="checkout">
	<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	$checkout = WC()->checkout();

	do_action( 'woocommerce_before_checkout_form', $checkout );

	// If checkout registration is disabled and not logged in, the user cannot checkout.
	if ( $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
		echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
		return;
	}

	?>

	<form name="checkout" method="post" class="checkout woocommerce-checkout "ss action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

		<?php if ( $checkout->get_checkout_fields() ) : ?>

			<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

			<div class="formulario" id="customer_details">
				
				<?php do_action( 'woocommerce_checkout_billing' ); ?>

				<p><label for="order_comments" class="order-comments">
					Observações &nbsp;
					<span class="optional">(optional)</span>
				</label></p>
				
				<textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="5" cols="12"></textarea>

			</div>

			<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

			<?php endif; ?>

			<div class="pagamento">
				<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
			
				<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
			
				<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

				<div id="order_review" class="woocommerce-checkout-review-order">
					<?php do_action( 'woocommerce_checkout_order_review' ); ?>
				</div>

				<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
			</div>
	</form>

		<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
</div>
</div>
</div>
<?php get_footer(); ?>
