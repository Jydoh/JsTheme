<?php
/**
 * Title: Template 404
 * Slug: js-start-two/template-404
 * Categories: template
 * Inserter: false
 */
?>

<!-- wp:heading {"level":1,"align":"wide"} -->
<h1 class="alignwide"><?php echo esc_html_x( '404', 'Error code for a webpage that is not found.', 'js-start-two' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"5px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:5px">
	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'This page could not be found.', 'Message to convey that a webpage could not be found', 'js-start-two' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'js-start-two' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'js-start-two' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'js-start-two' ); ?>","buttonUseIcon":true,"align":"center"} /-->
</div>
<!-- /wp:group -->