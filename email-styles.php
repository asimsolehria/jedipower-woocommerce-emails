<?php

/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */

if (!defined('ABSPATH')) {
	exit;
}

?>

@media only screen and (min-width: 768px) {
.templateContainer {
width: 600px !important;
}
}
@media only screen and (max-width: 480px) {
body,
table,
td,
p,
a,
li,
blockquote {
-webkit-text-size-adjust: none !important;
}
body {
width: 100% !important;
min-width: 100% !important;
}
#bodyCell {
padding-top: 10px !important;
}
.Image {
width: 100% !important;
}
.CaptionTopContent,
.CaptionBottomContent,
.TextContentContainer,
.BoxedTextContentContainer,
.ImageGroupContentContainer,
.CaptionLeftTextContentContainer,
.CaptionRightTextContentContainer,
.CaptionLeftImageContentContainer,
.CaptionRightImageContentContainer,
.ImageCardLeftTextContentContainer,
.ImageCardRightTextContentContainer {
max-width: 100% !important;
width: 100% !important;
}
.TextContent,
.BoxedTextContentColumn {
padding-right: 18px !important;
padding-left: 18px !important;
}
h2 {
font-size: 24px !important;
line-height: 125% !important;
}
#templatePreheader {
display: block !important;
}
#templatePreheader .TextContent,
#templatePreheader .TextContent p {
font-size: 16px !important;
line-height: 150% !important;
}
#templateBody .TextContent,
#templateBody .TextContent p {
font-size: 13px !important;
line-height: 150% !important;
}
#templateFooter .TextContent,
#templateFooter .TextContent p {
font-size: 14px !important;
line-height: 150% !important;
}
}

<?php
