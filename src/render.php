<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php
	$before_text = isset( $attributes['beforeText'] ) ? (string) $attributes['beforeText'] : '';
	$after_text = isset( $attributes['afterText'] ) ? (string) $attributes['afterText'] : '';
	$counts = wp_count_posts( 'post' );
	$published_count = isset( $counts->publish ) ? (int) $counts->publish : 0;
	echo esc_html( $before_text );
	printf(
		'<span class="%s">%s</span>',
		esc_attr( 'sbird-posts-number-block__count' ),
		esc_html( (string) $published_count )
	);
	echo esc_html( $after_text );
	?>
</p>
