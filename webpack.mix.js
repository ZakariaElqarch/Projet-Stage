let mix = require('laravel-mix');
// var LiveReloadPlugin = require('webpack-livereload-plugin');
mix.js('node_modules\\jquery\\dist\\jquery.js', 'assets\\js')
.js('node_modules\\bootstrap\\dist\\js\\bootstrap.js', 'assets\\js')
    .js('node_modules\\underscore\\underscore.js', 'assets\\js')
    .js('node_modules\\metismenu\\dist\\metisMenu.js', 'assets\\js')
    .js('node_modules\\validator\\validator.js', 'assets\\js')
    

    .setPublicPath('public').browserSync({
        proxy: 'http://127.0.0.1:3000/index',
        files: ['assets/js/'],
        open: false,
        reloadOnRestart: true,
        notify: false
    });

mix.css('node_modules\\@fortawesome\\fontawesome-free\\css\\fontawesome.css', 'assets\\css')
.css('node_modules\\bootstrap\\dist\\css\\bootstrap.css', 'assets\\css').setPublicPath('public').browserSync({
    proxy: 'http://127.0.0.1:3000/index',
    files: ['assets/css/'],
    open: false,
    reloadOnRestart: true,
    notify: false
});;

// mix.webpackConfig({
//     plugins: [new LiveReloadPlugin()]
// });

if (mix.inProduction()) {
    mix.version();
};