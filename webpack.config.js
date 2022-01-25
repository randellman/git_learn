const path = require('path');
const webpack = require("webpack");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CopyPlugin = require("copy-webpack-plugin");

module.exports = {
  mode: 'development',
  entry: './assets/index.js',
  devServer: {
    contentBase: './dist',
    client: {
      overlay: true,
    },
    stats: 'errors-only'
  },
  output: {
    filename: './js/main.js',
   /* filename: './js/[name].[contenthash].js',*/
    path: path.resolve(__dirname, 'dist'),
    publicPath: "/themes/best-of-shop",
    clean: true,
  },
  /**/ externals: {
		// jquery: 'jQuery',
	}, /**/
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
      Swal: "sweetalert2",
      select2: "select2",
      // ionRangeSlider: "ionRangeSlider",
      Dropzone: "dropzone",
    }),
  ],

  optimization: {
    splitChunks: {
      chunks: 'async',
      minSize: 20000,
      minRemainingSize: 0,
      minChunks: 1,
      maxAsyncRequests: 30,
      maxInitialRequests: 30,
      enforceSizeThreshold: 50000,
      cacheGroups: {
        defaultVendors: {
          test: /[\\/]node_modules[\\/]/,
          priority: -10,
          reuseExistingChunk: true,
        },
        default: {
          minChunks: 2,
          priority: -20,
          reuseExistingChunk: true,
        },
      },
    },
  },


};