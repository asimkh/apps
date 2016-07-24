var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/*
 var paths = {
    'jquery': './vendor/bower_components/jquery/',
    'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/'
}
*/


var paths = {
 	'jquery': '../jquery/',
 	'bootstrap': '../bootstrap/dist/',
    'fontawesome': '../font-awesome/',
    'theme':'../theme/'
    
}



elixir(function(mix) {

     mix.sass('app.scss')


     mix.copy('resources/assets/font-awesome/fonts/', 'public/build/fonts')
     
     .styles([
    
     	    // "../../../public/css/app.css",
     	     paths.fontawesome + "/css/font-awesome.min.css",
     		 paths.bootstrap + "css/bootstrap.min.css"
     		 //paths.theme + "css/clean-blog.min.css"
        ])

     .scripts([
	
	    paths.jquery + 'jquery.min.js',
	    paths.bootstrap + 'js/bootstrap.min.js'
	    //paths.theme + 'js/clean-blog.min.js'
		
		]);

    mix.version([

    	'public/css/all.css',
    	'public/js/all.js'

    	]);
});



