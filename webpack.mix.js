const mix = require('laravel-mix');

/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel application. By default, we are compiling the Sass
| file for the application as well as bundling up all the JS files.
|
*/

mix.babel([
    'resources/js/jquery-3.5.1.min.js',
    'resources/js/jquery.magnific-popup.min.js',
    'resources/js/slick.min.js',
    'resources/js/wow.min.js',
    'resources/js/script.js',
    'resources/js/intlTelInput-jquery.min.js',
    'resources/js/jquery.mask.min.js',
], 'public/js/libs.js');

// mix.babel([
//     'resources/js/flip-master.min.js',
// ], 'public/js/flip-master.min.js');

// mix.scripts([
//     'resources/js/three.min.js',
//     'resources/js/vanta.globe.min.js',
// ], 'public/js/scene.js');


mix.options({
        processCssUrls: false,
        sass: {
          quiet: true, // Игнорировать предупреждения
      },
    }).js('resources/js/app.js', 'public/js')
      .sass('resources/sass/app.scss', 'public/css')
      .sass('resources/sass/homepage.scss', 'public/css')
      .sass('resources/sass/ecommerce.scss', 'public/css')
      .sass('resources/sass/website.scss', 'public/css')
      .sass('resources/sass/smm.scss', 'public/css')
      .sass('resources/sass/portfoliopage.scss', 'public/css')
      .sass('resources/sass/contacts.scss', 'public/css')
      .sass('resources/sass/seo.scss', 'public/css')
      .sass('resources/sass/context.scss', 'public/css')
      .sass('resources/sass/mobapps.scss', 'public/css')
      .sass('resources/sass/branding.scss', 'public/css')
      .sass('resources/sass/redesign.scss', 'public/css')


 // .sass('resources/sass/portfolio/hozsklad.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/equis.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/atlanta.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/amore.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/kare.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/jeans.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/ukrticket.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/kolgotoff.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/posudgrad.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/cappi.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/planetakolgot.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/brain-up.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/doggydogs.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/yofi-tofi.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/nonna.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/bleach-bar.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/banzai.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/boneco.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/minoborona.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/baybay.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/tekstilno.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/gvaisal.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/l-america.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/lndc.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/p3dstudio.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/ytstar.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/city-parking.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/housemix.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/savemax.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/english-school-advanced.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/my-carrier.scss', 'public/css/portfolio/')
 // .sass('resources/sass/portfolio/ot-valentiny.scss', 'public/css/portfolio')

 // .sass('resources/sass/portfolio/topkolgot.scss', 'public/css/portfolio')
 .sass('resources/sass/portfolio/bereket.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/housefit.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/belity.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/tako.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/modaboom.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/homewood.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/unique-ua.scss', 'public/css/portfolio')

 // .sass('resources/sass/portfolio/energy.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/prosto-pereezd.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/hellasdental.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/idealstroy.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/swisspan.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/lighttek.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/prologue.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/usm.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/bankovspa.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/perevozchik.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/cosmopolis.scss', 'public/css/portfolio')

 // .sass('resources/sass/portfolio/strekoza.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/emf.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/stone.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/yugozapad.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/masterskaya.scss', 'public/css/portfolio')

 // .sass('resources/sass/portfolio/nasvitlo.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/damba.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/kinder.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/artsumki.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/bravetattoo.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/wizzland.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/igflowers.scss', 'public/css/portfolio')
 // .sass('resources/sass/portfolio/alden.scss', 'public/css/portfolio')
 .sass('resources/sass/portfolio/mobilus.scss', 'public/css/portfolio');
