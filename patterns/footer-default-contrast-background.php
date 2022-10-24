<?php
/**
 * Title: Footer with text, links.
 * Slug: frost/footer-default-contrast-background
 * Categories: frost-footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color","fontSize":"small"} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-top:0px;padding-top:40px;padding-bottom:40px">
<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph -->
<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Your Company LLC · <a href="#"><?php echo esc_html__( 'Contact Us', 'frost' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="#">Facebook</a> · <a href="#">Twitter</a> · <a href="#">Instagram</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->