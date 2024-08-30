<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>


<li <?php wc_product_class( 'section-item', $product ); ?> id="category-item-<?= $product->get_id()?>">
                  <div class="section-img">
				  <?php
        // Выводим изображение товара
        if ( $product->get_image_id() ) {
            echo wp_get_attachment_image( $product->get_image_id(), 'woocommerce_thumbnail' );
        }
        ?>
                  </div>
                  <div class="section-text">
		    <div class="cart-div-desc">
                    <h3 class="card-heading"><?= esc_html( $product->get_name() )?></h3>
                    <p class="section-item-information">
                      <?= $product->get_description()?>
                    </p>
		   </div>
					
					<div class="cart-div">
						<p class="section-item-price"><?=$product->get_price_html() ?></p>
						<!-- <div><input type="button" value="-"/><span class="cart-quantity"></span><input type="button" value="+"/></div> -->
                    <?php woocommerce_template_loop_add_to_cart();?>
					</div>
                  </div>
                </li>
<!-- <li <?php wc_product_class( '', $product ); ?>>
    <div class="product-image">
        <?php
        // Выводим изображение товара
        if ( $product->get_image_id() ) {
            echo wp_get_attachment_image( $product->get_image_id(), 'woocommerce_thumbnail' );
        }
        ?>
    </div>
    
    <div class="product-details">
        <?php
        // Выводим название товара
        echo '<h2 class="product-title">' . esc_html( $product->get_name() ) . '</h2>';
        
        // Выводим цену товара
        if ( $price_html = $product->get_price_html() ) {
            echo '<span class="product-price">' . wp_kses_post( $price_html ) . '</span>';
        }

        // Выводим кнопку "Добавить в корзину"
        woocommerce_template_loop_add_to_cart();
        ?>
    </div>
</li> -->
<!-- <li <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li> -->
