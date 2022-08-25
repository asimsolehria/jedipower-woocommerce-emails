<?php

/**
 * Email Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-addresses.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 5.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

$text_align = is_rtl() ? 'right' : 'left';
$address    = $order->get_formatted_billing_address();
$shipping   = $order->get_formatted_shipping_address();

?>

<table id="addresses" cellspacing="0" cellpadding="0" style="
                                                                            width: 100%;
                                                                            vertical-align: top;
                                                                            margin-bottom: 40px;
                                                                            padding: 0;
                                                                            border-collapse: collapse;
                                                                            mso-table-lspace: 0pt;
                                                                            mso-table-rspace: 0pt;
                                                                            -ms-text-size-adjust: 100%;
                                                                            -webkit-text-size-adjust: 100%;
                                                                        " border="0">
	<tr>
		<td style="
                                                                                    text-align: left;
                                                                                    font-family: 'Helvetica Neue',
                                                                                        Helvetica,
                                                                                        Roboto,
                                                                                        Arial,
                                                                                        sans-serif;
                                                                                    border: 0;
                                                                                    padding: 0;
                                                                                    mso-line-height-rule: exactly;
                                                                                    -ms-text-size-adjust: 100%;
                                                                                    -webkit-text-size-adjust: 100%;
                                                                                " valign="top" width="50%">
			<h2 style="
                                                                                        color: #7d766f;
                                                                                        display: block;
                                                                                        font-family: Helvetica;
                                                                                        font-size: 16px;
                                                                                        font-weight: bold;
                                                                                        line-height: 125%;
                                                                                        text-align: left;
                                                                                        margin: 10px
                                                                                            0;
                                                                                        font-style: normal;
                                                                                        letter-spacing: normal;
                                                                                    ">
				Billing
				address
			</h2>

			<address class="address" style="
                                                                                        color: #858585;
                                                                                    ">
				<address class="address">
					<?php echo wp_kses_post($address ? $address : esc_html__('N/A', 'woocommerce')); ?>
					<?php if ($order->get_billing_phone()) : ?>
						<br /><?php echo wc_make_phone_clickable($order->get_billing_phone()); ?>
					<?php endif; ?>

				</address>
				<p style="
                                                                                            margin: 10px
                                                                                                0;
                                                                                            padding: 0;
                                                                                            mso-line-height-rule: exactly;
                                                                                            -ms-text-size-adjust: 100%;
                                                                                            -webkit-text-size-adjust: 100%;
                                                                                            color: #666666;
                                                                                            font-family: Helvetica;
                                                                                            font-size: 13px;
                                                                                            line-height: 150%;
                                                                                            text-align: left;
                                                                                        ">
					<?php if ($order->get_billing_email()) : ?>
						<?php echo esc_html($order->get_billing_email()); ?>
					<?php endif; ?>
				</p>
			</address>
		</td>


		<?php if (!wc_ship_to_billing_address_only() && $order->needs_shipping_address() && $shipping) : ?>


			<td style="
                                                                                    text-align: left;
                                                                                    font-family: 'Helvetica Neue',
                                                                                        Helvetica,
                                                                                        Roboto,
                                                                                        Arial,
                                                                                        sans-serif;
                                                                                    padding: 0;
                                                                                    mso-line-height-rule: exactly;
                                                                                    -ms-text-size-adjust: 100%;
                                                                                    -webkit-text-size-adjust: 100%;
                                                                                " valign="top" width="50%">
				<h2 style="
                                                                                        color: #7d766f;
                                                                                        display: block;
                                                                                        font-family: Helvetica;
                                                                                        font-size: 16px;
                                                                                        font-weight: bold;
                                                                                        line-height: 125%;
                                                                                        text-align: left;
                                                                                        margin: 10px
                                                                                            0;
                                                                                        font-style: normal;
                                                                                        letter-spacing: normal;
                                                                                    ">
					Shipping
					address
				</h2>

				<address class="address">
					<?php echo wp_kses_post($shipping); ?>
					<?php if ($order->get_shipping_phone()) : ?>
						<br /><?php echo wc_make_phone_clickable($order->get_shipping_phone()); ?>
					<?php endif; ?>
				</address>
			</td>
		<?php endif; ?>
	</tr>
</table>
<!--  Here Goes Content: End  -->
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>


























