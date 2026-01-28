/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const { beforeText, afterText } = attributes;
	const previewCount = 'XXX';

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Label', 'sbird-posts-number-block' ) }>
					<TextControl
						label={ __( 'Before', 'sbird-posts-number-block' ) }
						value={ beforeText }
						onChange={ ( value ) =>
							setAttributes( { beforeText: value } )
						}
					/>
					<TextControl
						label={ __( 'After', 'sbird-posts-number-block' ) }
						value={ afterText }
						onChange={ ( value ) =>
							setAttributes( { afterText: value } )
						}
					/>
				</PanelBody>
			</InspectorControls>
			<p { ...useBlockProps() }>
				{ beforeText }
				<span className="sbird-posts-number-block__count">
					{ previewCount }
				</span>
				{ afterText }
			</p>
		</>
	);
}
