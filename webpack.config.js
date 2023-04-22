const wpConfig = require( '@wordpress/scripts/config/webpack.config' );
var path = require('path');

module.exports =  {
    ...wpConfig,
    entry: {
        "front": path.resolve(__dirname, './src/js/scripts.ts'),
        "editor": path.resolve(__dirname, './src/js/editor.ts'),
    },
    output: {
        path: path.resolve(__dirname, './assets'),
        filename: '[name].min.js'
    },
}