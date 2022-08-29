<?php

/**
 * Admin cancelled order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/admin-cancelled-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.1.0
 */

if (!defined('ABSPATH')) {
	exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
*/
do_action('woocommerce_email_header', $email_heading, $email); ?>

<?php /* translators: %1$s: Order number, %2$s: Customer full name.  */ ?>



<table border="0" cellpadding="0" cellspacing="0" class="kmTextBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
	<tbody class="kmTextBlockOuter">
		<tr>
			<td class="kmTextBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;background-color:#FFFFFF;">
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmTextContentContainer" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					<tbody>
						<tr>
							<td class="kmTextContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left;padding-top:9px;padding-bottom:9px;background-color:#FFFFFF;padding-left:18px;padding-right:18px;">
								<p style="margin:0;padding-bottom:1em">
									<?php printf(esc_html__('Notification to let you know &mdash; order #%1$s belonging to %2$s has been cancelled:', 'woocommerce'), esc_html($order->get_order_number()), esc_html($order->get_formatted_billing_full_name())); ?>
								</p>

							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>


<?php
/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);

/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email);


?>

<table align="center">
	<tr>
		<td align="center">
			<?php
			/**
			 * Show user-defined additional content - this is set in each email's settings.
			 */
			if ($additional_content) {
				echo wp_kses_post(wpautop(wptexturize($additional_content)));
			}

			?>
		</td>
	</tr>
</table>

<?php

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action('woocommerce_email_footer', $email);
