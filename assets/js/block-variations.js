wp.blocks.registerBlockVariation(
	'core/group',
	{
		name: 'p-relative-group',
		title: 'Position Relative group',
		attributes: {
			align: 'full',
            className: 'group-is-relative'
		}
	}
);

wp.blocks.registerBlockVariation(
	'core/group',
	{
		name: 'fancy-heading',
		title: 'Fancy Heading',
		attributes: {
            className: 'group-is-relative',
            align: 'full',
            "templateLock": "all",
			"style": {
				"spacing": {
					"padding": "var(--wp--preset--spacing--30)",
				},
			},
			"borderRadius": '4px'
		},
        innerBlocks: [
            [ 'core/heading', { content: 'Get a 10% discount on your first order.' } ],
            [ 'core/heading', { content: 'Subscribe to our Newsletter', level:'3', className:'is-style-hody-sgpd-yestyear-bg-heading has-white-color has-text-color', fontSize: 'large', style: {typography: {fontFamily:'yesteryear'}} } ],
            ]
        }
);