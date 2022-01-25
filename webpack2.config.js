const path = require('path');
const webpack = require("webpack");
// const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CopyPlugin = require("copy-webpack-plugin");

module.exports = {
  mode: 'production',
  entry: './assets/index.js',
  output: {
    filename: './js/main.js',
    path: path.resolve(__dirname, 'dist'),
    clean: true,
  },
  module: {
    rules: [
      {
        // test: /\.(sa|sc|c)ss$/,
        test: /\.css$/i,
        exclude: path.resolve(__dirname, 'node_modules'),
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: '../'
            }
          },
          'css-loader',
          /* 'postcss-loader',
          'sass-loader', */	
        ],
      },
      {
        test: /\.(ttf|otf|eot|woff2?)$/,
        exclude: path.resolve(__dirname, 'node_modules'),
        include: path.resolve(__dirname, 'assets'),
        loader: 'url-loader',
        options: {
          // limit: 4096,
          name: './fonts/[name].[ext]',
        },
      },
      {
        test: /\.(png|jpe?g|gif|svg|ico)$/,
        exclude: path.resolve(__dirname, 'node_modules'),
        loader: 'url-loader',
        options: {
          name: './img/[name].[ext]',
        },
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
			filename: "./css/main.css",
		}),
    new CleanWebpackPlugin(),
    new CopyPlugin({
      patterns: [
        { from: path.resolve(__dirname, 'assets/img'), to: path.resolve(__dirname, 'dist/img') },
      ],
    }),
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery",
      Swal: "sweetalert2"
    })
  ],
};