<?php
/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( 'no' === get_option( 'woocommerce_enable_review_rating' ) ) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();

$count   = $product->get_rating_count();
$average = $product->get_average_rating();
$avclass = trizzy_get_rating_class($average);

if ( $count > 0 ) : ?>

	<div class="woocommerce-product-rating reviews-counter" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star-rating rating <?php echo $avclass; ?>" title="<?php printf( __( 'Rated %s out of 5', 'trizzy' ), $average ); ?>">
            <div class="star-rating"></div>
            <div class="star-bg"></div>
           	<span>
				<strong itemprop="ratingValue" class="rating"><?php echo esc_html( $average ); ?></strong> <?php printf( __( 'out of %s5%s', 'trizzy' ), '<span itemprop="bestRating">', '</span>' ); ?>
				<?php printf( _n( 'based on %s customer rating', 'based on %s customer ratings', $rating_count, 'trizzy' ), '<span itemprop="ratingCount" class="rating">' . $rating_count . '</span>' ); ?>
			</span>
		</div>
		<?php if ( comments_open() ) : ?><a href="#reviews" class="woocommerce-review-link" rel="nofollow"><?php printf( _n( '%s review', '%s reviews', $review_count, 'trizzy' ), '<span itemprop="reviewCount" class="count">' . $review_count . '</span>' ); ?></a><?php endif ?>
	</div>



<?php endif; ?>