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
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$layout         = get_post_meta($post->ID, 'pp_sidebar_layout', TRUE);
if(empty($layout)) { $layout = 'full-width'; }
?>


<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div id="product-<?php the_ID(); ?>" <?php post_class('container'); ?>>

<?php if($layout != 'full-width') : ?>
<div class="columns twelve <?php echo $layout; ?>">
	<?php
endif;
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>

	<?php echo $layout != 'full-width' ? '<div class="six columns omega">' : '<div class="eight columns">'; ?>
		<div class="product-page">

		<?php
			/**
			 * woocommerce_single_product_summary hook
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>


		</div>
	</div> <!-- eof six/eight column if -->
	
<?php if($layout == 'full-width') : ?>
<!-- #product-<?php the_ID(); ?> -->

	<div class="sixteen columns">
<?php endif; ?>
	<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />
<?php if($layout == 'full-width') : ?>
	</div>
<?php endif; ?>

<?php if($layout != 'full-width') : ?>
</div> <!-- eof twelve -->
<?php endif;

/**
 * woocommerce_sidebar hook
 *
 * @hooked woocommerce_get_sidebar - 10
 */

if(!empty($layout) && $layout != 'full-width') {
 	do_action( 'woocommerce_sidebar' );
}

do_action( 'woocommerce_after_single_product' ); ?>
</div> <!-- eof container -->
</div> <!-- eof container -->
