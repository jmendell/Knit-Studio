'use strict'; // eslint-disable-line

const { default: ImageminPlugin } = require('imagemin-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

const config = require('./config');

class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-z0-9-:\/]+/g) || [];
  }
}

const glob = require('glob-all');
const PurgecssPlugin = require('purgecss-webpack-plugin');

module.exports = {
  plugins: [
    new ImageminPlugin({
      optipng: { optimizationLevel: 2 },
      gifsicle: { optimizationLevel: 3 },
      pngquant: { quality: '65-90', speed: 4 },
      svgo: {
        plugins: [
          { removeUnknownsAndDefaults: false },
          { cleanupIDs: false },
          { removeViewBox: false },
        ],
      },
      plugins: [imageminMozjpeg({ quality: 75 })],
      disable: (config.enabled.watcher),
    }),
    new UglifyJsPlugin({
      uglifyOptions: {
        ecma: 5,
        compress: {
          warnings: true,
          drop_console: true,
        },
      },
    }),
    new PurgecssPlugin({
      paths: glob.sync([
        'app/**/*.php',
        'resources/views/**/*.php',
        'resources/assets/scripts/**/*.js',
        'node_modules/slick-carousel/slick/slick.js',
        'node_modules/venobox/venobox/venobox.js',
      ]),
      extractors: [
        {
          extractor: TailwindExtractor,
          extensions: ["js", "php"]
        }
      ],
      whitelist: [
      ],
      whitelistPatterns: [],
      whitelistPatternsChildren: [/nf-form-cont$/, /category-list$/, /video-wave$/]
    }),
  ],
};
