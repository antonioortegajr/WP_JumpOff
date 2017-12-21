var el = wp.element.createElement,
    registerBlockType = wp.blocks.registerBlockType,
    blockStyle = { backgroundColor: '#900', color: '#fff', padding: '20px' };

registerBlockType( 'blocky-block-block/hello-block', {
    title: 'hello-block',

    icon: 'universal-access-alt',

    category: 'layout',

    edit: function() {
        return el( 'p', { style: blockStyle }, 'I am a Block.' );
    },

    save: function() {
        return el( 'p', { style: blockStyle }, 'Hello saved Block.' );
    },
} );
