/**
 * Before/After Slider — Editor script
 *
 * Registers the block in the Gutenberg editor.
 */
import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, InspectorControls, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { PanelBody, RangeControl, TextControl, SelectControl } from '@wordpress/components';
import { createElement as h } from '@wordpress/element';

registerBlockType('dublin-painter/before-after-slider', {
	edit: function Edit({ attributes, setAttributes }) {
		const { beforeImage, afterImage, beforeAlt, afterAlt, initialPosition, aspectRatio, borderRadius } = attributes;
		const blockProps = useBlockProps();

		return h('div', blockProps,
			h(InspectorControls, null,
				h(PanelBody, { title: 'Images' },
					h('div', { style: { marginBottom: '16px' } },
						h('p', null, 'Before Image'),
						h(MediaUploadCheck, null,
							h(MediaUpload, {
								allowedTypes: ['image'],
								onSelect: (media) => setAttributes({ beforeImage: media.url }),
								render: ({ open }) => h('button', { onClick: open, className: 'components-button is-secondary' }, beforeImage ? 'Change Before Image' : 'Select Before Image')
							})
						)
					),
					h('div', null,
						h('p', null, 'After Image'),
						h(MediaUploadCheck, null,
							h(MediaUpload, {
								allowedTypes: ['image'],
								onSelect: (media) => setAttributes({ afterImage: media.url }),
								render: ({ open }) => h('button', { onClick: open, className: 'components-button is-secondary' }, afterImage ? 'Change After Image' : 'Select After Image')
							})
						)
					),
					h(TextControl, { label: 'Before Alt Text', value: beforeAlt, onChange: (val) => setAttributes({ beforeAlt: val }) }),
					h(TextControl, { label: 'After Alt Text', value: afterAlt, onChange: (val) => setAttributes({ afterAlt: val }) })
				),
				h(PanelBody, { title: 'Settings' },
					h(RangeControl, { label: 'Initial Position (%)', value: initialPosition, onChange: (val) => setAttributes({ initialPosition: val }), min: 0, max: 100 }),
					h(SelectControl, { label: 'Aspect Ratio', value: aspectRatio, options: [
						{ label: 'Wide (21:9)', value: '21/9' },
						{ label: 'Standard (16:9)', value: '16/9' },
						{ label: 'Photo (4:3)', value: '4/3' },
						{ label: 'Square (1:1)', value: '1/1' }
					], onChange: (val) => setAttributes({ aspectRatio: val }) }),
					h(TextControl, { label: 'Border Radius', value: borderRadius, onChange: (val) => setAttributes({ borderRadius: val }) })
				)
			),
			h('div', { className: 'dp-before-after' },
				h('div', { className: 'dp-ba-container', style: { aspectRatio: aspectRatio } },
					h('div', { className: 'dp-ba-after-wrap' },
						h('img', { className: 'dp-ba-after', src: afterImage || 'https://placehold.co/1200x514/2563eb/ffffff?text=After', alt: afterAlt })
					),
					h('div', { className: 'dp-ba-before-wrap', style: { clipPath: `inset(0 ${100 - initialPosition}% 0 0)` } },
						h('img', { className: 'dp-ba-before', src: beforeImage || 'https://placehold.co/1200x514/0f172a/ffffff?text=Before', alt: beforeAlt })
					),
					h('div', { className: 'dp-ba-handle', style: { left: `${initialPosition}%` } },
						h('div', { className: 'dp-ba-handle-circle' }, '⟷')
					)
				)
			)
		);
	}
});