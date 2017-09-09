const { mix } = require('laravel-mix');

mix.sass('resources/assets/sass/app.scss', 'public/css');

mix
    .scripts('node_modules/highlightjs/highlight.pack.js', 'public/js/temp.js')
    .js('resources/assets/js/app.js', 'public/js')
    .scripts([
        'node_modules/highlightjs/highlight.pack.js',
        'public/js/app.js',
        'node_modules/select2/dist/js/select2.js',
        'node_modules/dropzone/dist/dropzone.js',
        'node_modules/marked/lib/marked.js',
        'node_modules/jquery-tabby/jquery.textarea.js',
        'node_modules/autosize/dist/autosize.js',
        'resources/assets/js/forum.js'
    ], 'public/js/app.js');

mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
mix.copy('node_modules/semantic-ui-css/semantic.min.css', 'public/css/semantic.min.css');
mix.copy('node_modules/semantic-ui-css/semantic.min.js', 'public/js/semantic.min.js');

