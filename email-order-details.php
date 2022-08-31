<?php

/**
 * Order details table shown in emails.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined('ABSPATH') || exit;

$text_align = is_rtl() ? 'right' : 'left';

do_action('woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text, $email); ?>

<?php
if ($sent_to_admin) {
	$before = '<a class="link" href="' . esc_url($order->get_edit_order_url()) . '">';
	$after  = '</a>';
} else {
	$before = '';
	$after  = '';
}
?>
<table border="0" cellpadding="0" cellspacing="0" class="kmTableBlock kmTableMobile" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
	<tbody class="kmTableBlockOuter">
		<tr>
			<td class="kmTableBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:9px;padding-bottom:9px;background-color:#FFFFFF;padding-left:18px;padding-right:18px;">
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmTable" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;background-color:#FFFFFF;">
					<thead>
						<tr>
							<th valign="top" class="kmTextContent" style="color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;text-align:left;width:50%;font-weight:bold;padding-bottom:4px;padding-right:0px;padding-left:0px;padding-top:4px;">
								Order Number
							</th>
							<th valign="top" class="kmTextContent" style="color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;text-align:left;font-weight:bold;padding-bottom:4px;padding-right:0px;padding-left:0px;padding-top:4px;">
								Order Date</th>
						</tr>
					</thead>
					<tbody>
						<tr class="kmTableRow">
							<td valign="top" class="kmTextContent" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;border-bottom:none;text-align:left;width:50%;;border-top-style:solid;padding-bottom:4px;padding-right:0px;padding-left:0px;padding-top:4px;border-top-color:#d9d9d9;border-top-width:1px;">

								<span style="line-height: 20.7999992370605px;">
									<?php echo wp_kses_post($before . sprintf(__('[Order #%s]', 'woocommerce') . $after, $order->get_order_number())); ?>
								</span>

							</td>
							<td valign="top" class="kmTextContent" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;border-right:none;border-bottom:none;text-align:left;;border-top-style:solid;padding-bottom:4px;padding-right:0px;padding-left:0px;padding-top:4px;border-top-color:#d9d9d9;border-top-width:1px;">
								<span style="line-height: 20.7999992370605px;"><?php echo wp_kses_post(sprintf(__(' (<time datetime="%s">%s</time>)'), $order->get_date_created()->format('c'), wc_format_datetime($order->get_date_created()))); ?></span>

							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>


<tr>
	<td>

		<?php
		/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
		do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email);

		?>
	</td>
</tr>


<tr>
	<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
		<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
				<tr>
					<td class="rowContainer kmFloatLeft" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
		<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
				<tr>
					<td class="rowContainer kmFloatLeft" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
		<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
				<tr>
					<td class="rowContainer kmFloatLeft firstColumn" valign="top" width="33%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					</td>
					<td class="rowContainer kmFloatLeft" valign="top" width="33%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					</td>
					<td class="rowContainer kmFloatLeft lastColumn" valign="top" width="33%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
		<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
				<tr>
					<td class="rowContainer kmFloatLeft" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
		<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
				<tr>
					<td class="rowContainer kmFloatLeft firstColumn" valign="top" width="33%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					</td>
					<td class="rowContainer kmFloatLeft" valign="top" width="33%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					</td>
					<td class="rowContainer kmFloatLeft lastColumn" valign="top" width="33%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
		<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
				<tr>
					<td class="rowContainer kmFloatLeft" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
						<table border="0" cellpadding="0" cellspacing="0" class="kmTextBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
							<tbody class="kmTextBlockOuter">
								<tr>
									<td class="kmTextBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;background-color:#FFFFFF;">
										<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmTextContentContainer" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
											<tbody>
												<tr>
													<td class="kmTextContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;padding-top:15px;padding-bottom:5px;background-color:#FFFFFF;padding-left:18px;padding-right:18px;">
														<p style="margin:0;padding-bottom:0">
															<b>Here's
																what you
																ordered:</b>
														</p>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
						<table border="0" cellpadding="0" cellspacing="0" class="kmTableBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
							<tbody class="kmTableBlockOuter">
								<tr>
									<td class="kmTableBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:9px;padding-bottom:9px;background-color:#FFFFFF;padding-left:18px;padding-right:18px;">
										<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmTable" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">
											<thead>
												<tr>
													<th valign="top" class="kmTextContent" style="color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;text-align:left;width:35%;padding-top:4px;font-weight:bold;padding-bottom:4px;padding-left:0px;padding-right:0px;">
														Item</th>
													<th valign="top" class="kmTextContent" style="color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;text-align:left;width:45%;padding-top:4px;font-weight:bold;padding-bottom:4px;padding-left:0px;padding-right:0px;">
													</th>

												</tr>
											</thead>
											<tbody>
												<!-- product details row starts -->

												<?php
												echo wc_get_email_order_items( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
													$order,
													array(
														'show_sku'      => $sent_to_admin,
														'show_image'    => false,
														'image_size'    => array(32, 32),
														'plain_text'    => $plain_text,
														'sent_to_admin' => $sent_to_admin,
													)
												);
												?>
												<!-- product details row -->
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
						<table border="0" cellpadding="0" cellspacing="0" class="kmTextBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
							<tbody class="kmTextBlockOuter">
								<tr>
									<td class="kmTextBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;background-color:#FFFFFF;">
										<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmTextContentContainer" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
											<tbody>
												<tr>
													<td class="kmTextContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;padding-top:9px;padding-bottom:9px;background-color:#FFFFFF;padding-left:18px;padding-right:18px;">
														<?php
														$item_totals = $order->get_order_item_totals();

														if ($item_totals) {
															$i = 0;
															foreach ($item_totals as $total) {
																$i++;
																if ("Total:" === $total['label']) {
																	continue;
																}
														?>



																<p style="margin:0;padding-bottom:0;text-align: right;">
																	<strong><?php echo wp_kses_post($total['label']); ?>
																	</strong><?php echo wp_kses_post($total['value']); ?>
																</p>

														<?php
															}
														}
														?>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
						<table border="0" cellpadding="0" cellspacing="0" class="kmTableBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
							<tbody class="kmTableBlockOuter">
								<tr>
									<td class="kmTableBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:0px;padding-bottom:0px;background-color:#FFFFFF;padding-left:0px;padding-right:0px;">
										<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmTable" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">
											<thead>
												<tr>
													<th valign="top" class="kmTextContent" style="color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;text-align:left;width:70%;padding-top:0px;font-weight:bold;padding-bottom:0px;padding-left:0px;padding-right:0px;">
													</th>
													<th valign="top" class="kmTextContent" style="color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;text-align:right;width:30%;padding-top:0px;font-weight:bold;padding-bottom:0px;padding-left:0px;padding-right:0px;">
													</th>
												</tr>
											</thead>
											<tbody>
												<tr class="kmTableRow">
													<td valign="top" class="kmTextContent" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;border-bottom:none;text-align:left;width:70%;;border-top-style:none;padding-bottom:0px;padding-right:0px;padding-left:0px;padding-top:0px;border-top-color:#d9d9d9;border-top-width:0px;">
													</td>
													<td valign="top" class="kmTextContent" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;border-right:none;border-bottom:none;text-align:right;width:30%;;border-top-style:none;padding-bottom:0px;padding-right:0px;padding-left:0px;padding-top:0px;border-top-color:#d9d9d9;border-top-width:0px;">
														<table width="100%;" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
															<tbody>
																<tr>
																	<td style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;text-align: right;background:#e4e4e4;padding: 9px 18px;">
																		 
																		<strong style="font-size: 14px;">TOTAL
																			 </strong><span style="font-size: 14px;"><?php echo $order->get_formatted_order_total(); ?></span>
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

						<table>
							<tbody>
								<tr>
									<td>
										 <?php
											if ($order->get_customer_note()) {
											?>
										<?php echo "Note: " . wp_kses_post(nl2br(wptexturize($order->get_customer_note()))); ?>
									<?php
											}
									?>

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
<tr>
	<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
		<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
				<tr>
					<td class="rowContainer kmFloatLeft" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>


<tr>
	<td>
		<?php do_action('woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text, $email); ?>
	</td>
</tr>