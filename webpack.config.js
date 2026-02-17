const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const autoprefixer = require('autoprefixer');

module.exports = (env, argv) => {
    const isProduction = argv.mode === 'production';

    return {
        entry: {
            'theme': './wp-content/themes/ecom-theme/assets/src/js/theme.js',
            'admin': './wp-content/themes/ecom-theme/assets/src/js/admin.js',
        },
        output: {
            filename: 'js/[name].js',
            path: path.resolve(__dirname, 'wp-content/themes/ecom-theme/assets/dist'),
        },
        module: {
            rules: [
                {
                    test: /\.scss$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        {
                            loader: 'css-loader',
                            options: { url: false, sourceMap: !isProduction },
                        },
                        {
                            loader: 'postcss-loader',
                            options: {
                                postcssOptions: {
                                    plugins: [ autoprefixer() ],
                                },
                                sourceMap: !isProduction,
                            },
                        },
                        {
                            loader: 'sass-loader',
                            options: { sourceMap: !isProduction },
                        },
                    ],
                },
                {
                    test: /\.(png|svg|jpg|jpeg|gif|ico)$/,
                    type: 'asset/resource',
                    generator: {
                        filename: 'images/[name][ext]',
                    },
                },
            ],
        },
        plugins: [
            new MiniCssExtractPlugin({
                filename: 'css/[name].css',
            }),
        ],
        devtool: isProduction ? false : 'source-map',
        watchOptions: {
            ignored: /node_modules/,
        },
    };
};
