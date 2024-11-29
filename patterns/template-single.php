<?php
/**
 * Title: Template single
 * Slug: js-start-two/template-single
 * Categories: pages
 * Keywords: post, single
 */
?>

<!-- wp:pattern {"slug":"js-start-two/hero-single"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:group {"className":"swt-block-featured-image","layout":{"type":"constrained"}} -->
<div class="wp-block-group swt-block-featured-image"><!-- wp:post-featured-image {"height":"432px"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"layout":{"type":"constrained"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-large","top":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:post-terms {"term":"post_tag","className":"is-style-swt-post-terms-pill"} /-->

<!-- wp:separator {"backgroundColor":"primary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:post-author {"showBio":true,"className":"is-style-swt-post-author-simple","fontSize":"small"} /--></div>
<!-- /wp:group -->