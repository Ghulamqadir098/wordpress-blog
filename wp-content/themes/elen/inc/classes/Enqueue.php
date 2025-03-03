<?php

namespace GhulamQadir\Elen\Class;

use GhulamQadir\Elen\Trait\Singleton;

class Enqueue
{
    use Singleton;
    protected function __construct()
    {
        //load class
        $this->setup_hooks();
       
       
    }

    protected function setup_hooks()
    {
      
        //actions and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
        add_action('wp_enqueue_scripts', [$this, 'my_theme_enqueue_google_fonts']);
    }
    public function register_styles()
    {
        wp_register_style('style-css', ELEN_DIR_URI . '/style.css', [], filemtime(ELEN_DIR_PATH . '/style.css'), 'all');
        wp_register_style('open-iconic-bootstrap', ELEN_DIR_URI . '/assets/src/library/css/open-iconic-bootstrap.min.css', [], false, 'all');
        wp_register_style('animate-css', ELEN_DIR_URI . '/assets/src/library/css/animate.css', [], false, 'all');
        wp_register_style('owl.theme-css', ELEN_DIR_URI . '/assets/src/library/css/owl.theme.default.min.css', [], false, 'all');
        wp_register_style('magnific-popup-css', ELEN_DIR_URI . '/assets/src/library/css/magnific-popup.css', [], false, 'all');
        wp_register_style('aos-css', ELEN_DIR_URI . '/assets/src/library/css/aos.css', [], false, 'all');
        wp_register_style('ionicons-css', ELEN_DIR_URI . '/assets/src/library/css/ionicons.min.css', [], false, 'all');
        wp_register_style('bootstrap-datepicker-css', ELEN_DIR_URI . '/assets/src/library/css/bootstrap-datepicker.css', [], false, 'all');
        wp_register_style('jquery.timepicker-css', ELEN_DIR_URI . '/assets/src/library/css/jquery.timepicker.css', [], false, 'all');
        wp_register_style('flaticon-css', ELEN_DIR_URI . '/assets/src/library/css/flaticon.css', [], false, 'all');
        wp_register_style('icomoon-css', ELEN_DIR_URI . '/assets/src/library/css/icomoon.css', [], false, 'all');
        wp_register_style('theme-style-css', ELEN_DIR_URI . '/assets/src/library/css/style.css', [], false, 'all');



        //Enqueue Style files 
        wp_enqueue_style('style-css');
        wp_enqueue_style('open-iconic-bootstrap');
        wp_enqueue_style('animate-css');
        wp_enqueue_style('owl.carousel-css');
        wp_enqueue_style('owl.theme-css');
        wp_enqueue_style('magnific-popup-css');
        wp_enqueue_style('aos-css');
        wp_enqueue_style('ionicons-css');
        wp_enqueue_style('bootstrap-datepicker-css');
        wp_enqueue_style('jquery.timepicker-css');
        wp_enqueue_style('flaticon-css');
        wp_enqueue_style('icomoon-css');
        wp_enqueue_style('theme-style-css');
    }
    function my_theme_enqueue_google_fonts()
    {
        // Define the Google Fonts URL (replace with your font(s))
        $font_url = 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700';
        $font_url2 = 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700';

        // Enqueue the font
        wp_enqueue_style(
            'my-google-fonts',          // Unique handle
            esc_url_raw($font_url),     // URL (escaped for security)
            array(),                    // No dependencies
            null                        // No versioning (Google handles updates)
        );
        // Enqueue the font2
        wp_enqueue_style(
            'my-google-fonts',          // Unique handle
            esc_url_raw($font_url2),     // URL (escaped for security)
            array(),                    // No dependencies
            null                        // No versioning (Google handles updates)
        );
    }
    public function register_scripts()
    {
        wp_enqueue_script('main-js', ELEN_DIR_URI . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
        wp_register_script('jquery-js', ELEN_DIR_URI.'/assets/src/library/js/jquery.min.js',['jquery'],false,true);
        wp_register_script('jquery-migrate', ELEN_DIR_URI.'/assets/src/library/js/jquery-migrate-3.0.1.min.js',['jquery'],false,true);
        wp_register_script('popper.min', ELEN_DIR_URI.'/assets/src/library/js/popper.min.js',[],false,true);
        wp_register_script('bootstrap.min', ELEN_DIR_URI.'/assets/src/library/js/bootstrap.min.js',['jquery'],false,true);
        wp_register_script('jquery.easing', ELEN_DIR_URI.'/assets/src/library/js/jquery.easing.1.3.js',[],false,true);
        wp_register_script('jquery.waypoints', ELEN_DIR_URI.'/assets/src/library/js/jquery.waypoints.min.js',[],false,true);
        wp_register_script('jquery.stellar', ELEN_DIR_URI.'/assets/src/library/js/jquery.stellar.min.js',[],false,true);
        wp_register_script('owl.carousel', ELEN_DIR_URI.'/assets/src/library/js/owl.carousel.min.js',[],false,true);
        wp_register_script('jquery.magnific', ELEN_DIR_URI.'/assets/src/library/js/jquery.magnific-popup.min.js',[],false,true);
        wp_register_script('aos', ELEN_DIR_URI.'/assets/src/library/js/aos.js',[],false,true);
        wp_register_script('jquery-animateNumber', ELEN_DIR_URI.'/assets/src/library/js/jquery.animateNumber.min.js',[],false,true);
        wp_register_script('bootstrap-datepicker', ELEN_DIR_URI.'/assets/src/library/js/bootstrap-datepicker.js',[],false,true);
        wp_register_script('jquery.timepicker', ELEN_DIR_URI.'/assets/src/library/js/jquery.timepicker.min.js',[],false,true);
        wp_register_script('scrollax', ELEN_DIR_URI.'/assets/src/library/js/scrollax.min.js',[],false,true);
        wp_register_script('maps.googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false',[],false,true);
        wp_register_script('google-map', ELEN_DIR_URI.'/assets/src/library/js/google-map.js',[],false,true);
        wp_register_script('main', ELEN_DIR_URI.'/assets/src/library/js/main.js',[],false,true);
        


        wp_enqueue_script('jquery-js');   
        wp_enqueue_script('jquery-migrate');    
        wp_enqueue_script('popper.min');    
        wp_enqueue_script('bootstrap.min');    
        wp_enqueue_script('jquery.easing');    
        wp_enqueue_script('jquery.waypoints');    
        wp_enqueue_script('jquery.stellar');    
        wp_enqueue_script('owl.carousel');    
        wp_enqueue_script('jquery.magnific');    
        wp_enqueue_script('aos');    
        wp_enqueue_script('jquery-animateNumber');    
        wp_enqueue_script('bootstrap-datepicker');    
        wp_enqueue_script('jquery.timepicker');    
        wp_enqueue_script('scrollax');    
        wp_enqueue_script('maps.googleapis');    
        wp_enqueue_script('google-map');    
        wp_enqueue_script('main');    

    }
}
