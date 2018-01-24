/**
 * Created by ASUS1 on 2018/1/24.
 */
const path = require('path');
const HtmlPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
module.exports = {
    //入口设置
    entry: {
        // entry1:'./src/entry.js',
        index: './src/entry.js',
    },
    //设置出口
    output: {
        path: path.resolve(__dirname, 'dist'), //路径
        filename: '[name].js', //name对应上面的entry1
        publicPath: "http://localhost:8081/"
    },
    //css 图片 压缩
    module: {
        rules: [{
            test: /\.css$/,
            // use:['style-loader','css-loader']
            use: ExtractTextPlugin.extract({
                fallback: "style-loader",
                use: "css-loader"
            })
        }, {
            test: /\.(png|jpg|gif)$/,
            use: [{
                loader: "url-loader",
                options: {
                    limit: 50000000000000000000000000,
                    outputPath: "images/"
                }
            }]

        }

        ]

    },

    plugins: [
        new HtmlPlugin({
            minify: {
                removeAttributeQuotes: true
            },
            hash: true,
            template: './src/index.html',
        }),
        new ExtractTextPlugin('css/index.css'),

    ], //是一个数组
    devServer: {
        contentBase: path.resolve(__dirname, 'dist'),
        host: 'localhost',
        port: "8081", //确认不冲突
        compress: true, //服务器压缩
    },
};