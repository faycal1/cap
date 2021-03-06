var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix
        //.phpUnit()

        // Copy needed files from /node directories to /public directory.
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts/font-awesome')
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/build/fonts/bootstrap')
        .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'public/js/vendor')

        .sass([ // Process front-end stylesheets
                'frontend/main.scss'
            ], 'resources/assets/css/frontend/main.css')
        .styles([  // Combine pre-processed CSS files
                'css.css',
                  'custom-theme/jquery-ui-1.10.3.custom.css',
                'frontend/main.css'
            ], 'public/css/frontend.css')
        .scripts([ // Combine front-end scripts
                 'jquery-ui.js',
                 'plugin/validate/jquery.validate.min.js',
                 'plugin/validate/additional-methods.min.js',
                 'plugins.js',
                 'script.js',
                'frontend/main.js'
            ], 'public/js/frontend.js')

        .sass([ // Process back-end stylesheets
            'backend/main.scss',
            'backend/skin.scss',
            'backend/plugin/toastr/toastr.scss'
        ], 'resources/assets/css/backend/main.css')
        .styles([ // Combine pre-processed CSS files
                'backend/main.css'
            ], 'public/css/backend.css')
        .scripts([ // Combine back-end scripts
                'plugins.js',
                'backend/main.js',
                'backend/plugin/toastr/toastr.min.js',
                'backend/custom.js'
            ], 'public/js/backend.js')

        // Apply version control
        .version(["public/css/frontend.css", "public/js/frontend.js", "public/css/backend.css", "public/js/backend.js"]);
});

/**
 * Uncomment for LESS version
 */
/*elixir(function(mix) {
    mix
        .phpUnit()

        // Copy webfont files from /vendor directories to /public directory.
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts/font-awesome')
        .copy('node_modules/bootstrap-less/fonts', 'public/build/fonts/bootstrap')
        .copy('node_modules/bootstrap-less/js/bootstrap.min.js', 'public/js/vendor')

        .less([ // Process front-end stylesheets
            'frontend/main.less'
        ], 'resources/assets/css/frontend/main.css')
        .styles([  // Combine pre-processed CSS files
            'frontend/main.css'
        ], 'public/css/frontend.css')
        .scripts([ // Combine front-end scripts
            'plugins.js',
            'frontend/main.js'
        ], 'public/js/frontend.js')

        .less([ // Process back-end stylesheets
            'backend/AdminLTE.less',
            'backend/plugin/toastr/toastr.less'
        ], 'resources/assets/css/backend/main.css')
        .styles([ // Combine pre-processed CSS files
            'backend/main.css'
        ], 'public/css/backend.css')
        .scripts([ // Combine back-end scripts
            'plugins.js',
            'backend/main.js',
            'backend/plugin/toastr/toastr.min.js',
            'backend/custom.js'
        ], 'public/js/backend.js')

        // Apply version control
        .version(["public/css/frontend.css", "public/js/frontend.js", "public/css/backend.css", "public/js/backend.js"]);
});*/
