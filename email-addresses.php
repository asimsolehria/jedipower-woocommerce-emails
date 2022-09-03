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


							<table border="0" cellpadding="0" cellspacing="0" class="kmTableBlock kmTableMobile" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
								<tbody class="kmTableBlockOuter">
									<tr>
										<td class="kmTableBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:9px;padding-bottom:9px;background-color:#FFFFFF;padding-left:18px;padding-right:18px;">
											<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmTable" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;background-color:#FFFFFF;">
												<thead>
													<tr>
														<th valign="top" class="kmTextContent" style="color:#000000;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;text-align:left;padding-right:0px;padding-bottom:4px;font-weight:bold;padding-left:0px;padding-top:4px;">
															Shipping Address
														</th>
														<th valign="top" class="kmTextContent" style="color:#000000;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;text-align:left;padding-right:0px;padding-bottom:4px;font-weight:bold;padding-left:0px;padding-top:4px;">
															Billing Address
														</th>
													</tr>
												</thead>
												<tbody>
													<tr class="kmTableRow">
														<td valign="top" class="kmTextContent" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#000000;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;border-bottom:none;text-align:left;;border-top-style:solid;padding-bottom:4px;padding-right:0px;padding-left:0px;padding-top:4px;border-top-color:#d9d9d9;border-top-width:1px;">

															<?php if (!wc_ship_to_billing_address_only() && $order->needs_shipping_address() && $shipping) : ?>


																<address>
																	<?php echo wp_kses_post($shipping); ?>
																	<?php if ($order->get_shipping_phone()) : ?>
																		<br /><?php echo wc_make_phone_clickable($order->get_shipping_phone()); ?>
																	<?php endif; ?>
																</address>

															<?php endif; ?>
														</td>
														<td valign="top" class="kmTextContent" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#000000;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;border-right:none;border-bottom:none;text-align:left;;border-top-style:solid;padding-bottom:4px;padding-right:0px;padding-left:0px;padding-top:4px;border-top-color:#d9d9d9;border-top-width:1px;">
															<address>
																<?php echo wp_kses_post($address ? $address : esc_html__('N/A', 'woocommerce')); ?>
																<?php if ($order->get_billing_phone()) : ?>
																	<br /><?php echo wc_make_phone_clickable($order->get_billing_phone()); ?>
																<?php endif; ?>
																<?php if ($order->get_billing_email()) : ?>
																	<br /><?php echo esc_html($order->get_billing_email()); ?>
																<?php endif; ?>
															</address>
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
			</tbody>
		</table>
	</td>
</tr>