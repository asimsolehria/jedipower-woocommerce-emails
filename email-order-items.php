<?php

/**
 * Email Order Items
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-items.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined('ABSPATH') || exit;

$text_align  = is_rtl() ? 'right' : 'left';
$margin_side = is_rtl() ? 'left' : 'right';

foreach ($items as $item_id => $item) :
	$product       = $item->get_product();
	$sku           = '';
	$purchase_note = '';
	$image         = '';

	if (!apply_filters('woocommerce_order_item_visible', true, $item)) {
		continue;
	}

	if (is_object($product)) {
		$sku           = $product->get_sku();
		$purchase_note = $product->get_purchase_note();
		$image         = $product->get_image($image_size);
		$image_id  = $product->get_image_id();
		$image_url = wp_get_attachment_image_url($image_id, 'full');
		$url = get_permalink($product->get_id());
		$name = $product->get_name();
	}

	if (strtolower($name) === 'zoe supreme') {
		$before = '<a href="<?php echo $url; ?>" _self" style="word-wrap:break-word;color:#E36E3A;font-weight:normal;text-decoration:underline">';
		$after = '</a>';
	} else {
		$before = '';
		$after = '';
	}

?>



	<tr class="kmTableRow">
		<td valign="top" class="kmTextContent" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;text-align:left;width:35%;border-top-style:solid;padding-bottom:4px;padding-right:0px;padding-left:0px;padding-top:4px;border-top-color:#d9d9d9;border-top-width:1px;">
			<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tr>
					<td class="kmImageContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding:0;padding-top:0px;padding-bottom:0;padding-left:9px;padding-right:9px;">
						<?php echo $before; ?>
						<img align="left" alt="" class="kmImage" src="<?php echo $image_url; ?>" width="174" style="border:0;height:auto;line-height:100%;outline:none;text-decoration:none;padding-bottom:0;display:inline;vertical-align:bottom;margin-right:0;max-width:200px;">
						<?php echo $after; ?>

					</td>
				</tr>
			</table>
		</td>
		<td valign="middle" class="kmTextContent" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;text-align:left;width:45%;;border-top-style:solid;padding-bottom:4px;padding-right:0px;padding-left:0px;padding-top:4px;border-top-color:#d9d9d9;border-top-width:1px;">
			<p style="margin:0;padding-bottom:0">
				<?php


				// Product name.
				echo wp_kses_post(apply_filters('woocommerce_order_item_name', $item->get_name(), $item, false));

				// SKU.
				if ($show_sku && $sku) {
					echo wp_kses_post(' (#' . $sku . ')');
				}

				// allow other plugins to add additional product information here.
				do_action('woocommerce_order_item_meta_start', $item_id, $item, $order, $plain_text);

				wc_display_item_meta(
					$item,
					array(
						'label_before' => '<strong class="wc-item-meta-label" style="float: ' . esc_attr($text_align) . '; margin-' . esc_attr($margin_side) . ': .25em; clear: both">',
					)
				);

				// allow other plugins to add additional product information here.
				do_action('woocommerce_order_item_meta_end', $item_id, $item, $order, $plain_text);
				?>
			</p>
		</td>

	</tr>


	<?php

	if ($show_purchase_note && $purchase_note) {
	?>
		<tr>
			<td align="left">
				<?php
				echo wp_kses_post(wpautop(do_shortcode($purchase_note)));
				?>

			</td>
		</tr>
	<?php
	}
	?>



<?php endforeach; ?>