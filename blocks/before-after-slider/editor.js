/**
 * Before/After Slider — Editor script
 *
 * Registers the block in the Gutenberg editor.
 * Uses wp.element.createElement (no JSX, no ES module imports).
 */
/* global wp */
(() => {
	var registerBlockType = wp.blocks.registerBlockType;
	var InspectorControls = wp.blockEditor.InspectorControls;
	var useBlockProps = wp.blockEditor.useBlockProps;
	var MediaUpload = wp.blockEditor.MediaUpload;
	var MediaUploadCheck = wp.blockEditor.MediaUploadCheck;
	var PanelBody = wp.components.PanelBody;
	var RangeControl = wp.components.RangeControl;
	var TextControl = wp.components.TextControl;
	var SelectControl = wp.components.SelectControl;
	var el = wp.element.createElement;

	registerBlockType("dublin-painter/before-after-slider", {
		edit: (props) => {
			var attributes = props.attributes;
			var setAttributes = props.setAttributes;
			var beforeImage = attributes.beforeImage;
			var afterImage = attributes.afterImage;
			var beforeAlt = attributes.beforeAlt;
			var afterAlt = attributes.afterAlt;
			var initialPosition = attributes.initialPosition;
			var aspectRatio = attributes.aspectRatio;
			var borderRadius = attributes.borderRadius;
			var blockProps = useBlockProps();

			return el(
				"div",
				blockProps,
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: "Images" },
						el(
							"div",
							{ style: { marginBottom: "16px" } },
							el("p", null, "Before Image"),
							el(
								MediaUploadCheck,
								null,
								el(MediaUpload, {
									allowedTypes: ["image"],
									onSelect: (media) => {
										setAttributes({ beforeImage: media.url });
									},
									render: (renderProps) =>
										el(
											"button",
											{
												onClick: renderProps.open,
												className: "components-button is-secondary",
											},
											beforeImage
												? "Change Before Image"
												: "Select Before Image",
										),
								}),
							),
						),
						el(
							"div",
							null,
							el("p", null, "After Image"),
							el(
								MediaUploadCheck,
								null,
								el(MediaUpload, {
									allowedTypes: ["image"],
									onSelect: (media) => {
										setAttributes({ afterImage: media.url });
									},
									render: (renderProps) =>
										el(
											"button",
											{
												onClick: renderProps.open,
												className: "components-button is-secondary",
											},
											afterImage ? "Change After Image" : "Select After Image",
										),
								}),
							),
						),
						el(TextControl, {
							label: "Before Alt Text",
							value: beforeAlt,
							onChange: (val) => {
								setAttributes({ beforeAlt: val });
							},
						}),
						el(TextControl, {
							label: "After Alt Text",
							value: afterAlt,
							onChange: (val) => {
								setAttributes({ afterAlt: val });
							},
						}),
					),
					el(
						PanelBody,
						{ title: "Settings" },
						el(RangeControl, {
							label: "Initial Position (%)",
							value: initialPosition,
							onChange: (val) => {
								setAttributes({ initialPosition: val });
							},
							min: 0,
							max: 100,
						}),
						el(SelectControl, {
							label: "Aspect Ratio",
							value: aspectRatio,
							options: [
								{ label: "Wide (21:9)", value: "21/9" },
								{ label: "Standard (16:9)", value: "16/9" },
								{ label: "Photo (4:3)", value: "4/3" },
								{ label: "Square (1:1)", value: "1/1" },
							],
							onChange: (val) => {
								setAttributes({ aspectRatio: val });
							},
						}),
						el(TextControl, {
							label: "Border Radius",
							value: borderRadius,
							onChange: (val) => {
								setAttributes({ borderRadius: val });
							},
						}),
					),
				),
				el(
					"div",
					{ className: "dp-before-after" },
					el(
						"div",
						{
							className: "dp-ba-container",
							style: { aspectRatio: aspectRatio },
						},
						el(
							"div",
							{ className: "dp-ba-after-wrap" },
							el("img", {
								className: "dp-ba-after",
								src:
									afterImage ||
									"https://placehold.co/1200x514/2563eb/ffffff?text=After",
								alt: afterAlt,
							}),
						),
						el(
							"div",
							{
								className: "dp-ba-before-wrap",
								style: {
									clipPath: `inset(0 ${100 - initialPosition}% 0 0)`,
								},
							},
							el("img", {
								className: "dp-ba-before",
								src:
									beforeImage ||
									"https://placehold.co/1200x514/0f172a/ffffff?text=Before",
								alt: beforeAlt,
							}),
						),
						el(
							"div",
							{
								className: "dp-ba-handle",
								style: { left: `${initialPosition}%` },
							},
							el("div", { className: "dp-ba-handle-circle" }, "\u27F7"),
						),
					),
				),
			);
		},
	});
})();
