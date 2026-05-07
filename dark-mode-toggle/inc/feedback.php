<?php
/**
 * Feedback ratings.
 *
 * @package Dark_Mode_Toggle
 */

defined( 'ABSPATH' ) || die();
?>

<div class="dmt-mt-4 xl:dmt-mt-6 dmt-px-1">
	<a target="_blank" rel="noopener noreferrer" href="https://wordpress.org/support/plugin/dark-mode-toggle/reviews/#new-post" class="focus-visible:dmt-ring-2 dmt-inline-block"><?php esc_html_e( 'Like this plugin? Leave a Review.', 'dark-mode-toggle' ); ?></a>
	<br>
	<a target="_blank" rel="noopener noreferrer" href="https://wordpress.org/support/plugin/dark-mode-toggle/reviews/#new-post" class="focus-visible:dmt-ring-2 dmt-inline-block dmt-mt-2" aria-label="<?php esc_attr_e( 'Leave a review for this plugin.', 'dark-mode-toggle' ); ?>">
		<div class="dmt-rating dmt-pointer-events-none" aria-hidden="true">
			<input type="radio" tabindex="-1" class="dmt-mask dmt-mask-star-2 dmt-bg-orange-400">
			<input type="radio" tabindex="-1" class="dmt-mask dmt-mask-star-2 dmt-bg-orange-400">
			<input type="radio" tabindex="-1" class="dmt-mask dmt-mask-star-2 dmt-bg-orange-400">
			<input type="radio" tabindex="-1" class="dmt-mask dmt-mask-star-2 dmt-bg-orange-400">
			<input type="radio" tabindex="-1" class="dmt-mask dmt-mask-star-2 dmt-bg-orange-400">
		</div>
	</a>
</div>
