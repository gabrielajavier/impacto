const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
     .js('resources/js/app_root.js', 'public/js')
     .js('resources/js/dashboard/mantenimiento.js', 'public/js/dashboard')
     .js('resources/js/dashboard/noticias.js', 'public/js/dashboard')
     .js('resources/js/dashboard/categoria.js', 'public/js/dashboard')
     .js('resources/js/dashboard/posts.js', 'public/js/dashboard')
     .sass('resources/sass/app.scss', 'public/css')
     .sass('resources/sass/app_root.scss','public/css')
     .sass('resources/sass/dashboard_root/login_root.scss','public/css/dashboard_root')
     .sass('resources/sass/dashboard_root/noticias.scss','public/css/dashboard_root')
     .sass('resources/sass/dashboard_root/posts.scss','public/css/dashboard_root')
    .browserSync({
        open: 'external',
        host: 'http://127.0.0.1:8000/',
        proxy: 'http://127.0.0.1:8000/',
        files: ['resources/views/**/*.php', 'app/**/*.php', 'routes/**/*.php',
        'public/js/*.js','public/js/**/*.js' ,'public/css/*.css',
        'public/css/**/*.css']
    });
mix.disableNotifications();
