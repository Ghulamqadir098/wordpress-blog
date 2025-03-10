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
        wp_register_style('custom-style', ELEN_DIR_URI . '/assets/src/library/css/styles.css', [], false, 'all');

        //Enqueue Style files 
        wp_enqueue_style('style-css');
        wp_enqueue_style('custom-style');
    }
    function my_theme_enqueue_google_fonts()
    {
        // Define the Google Fonts URL (replace with your font(s))
        $font_url = "https://use.fontawesome.com/releases/v6.3.0/js/all.js";

        $font_url2 = 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic';

        $font_url3 = 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800';
        $bootstrap_url = 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js';

        // Enqueue the font
        wp_enqueue_style(
            'font-awesome',
            esc_url_raw($font_url),     // URL (escaped for security)
            array(),                    // No dependencies
            null                        // No versioning (Google handles updates)
        );
        // Enqueue the font2
        wp_enqueue_style(
            'my-google-fonts2',          // Unique handle
            esc_url_raw($font_url2),     // URL (escaped for security)
            array(),                    // No dependencies
            null                        // No versioning (Google handles updates)
        );
        // Enqueue the font3
        wp_enqueue_style(
            'my-google-fonts3',          // Unique handle
            esc_url_raw($font_url3),     // URL (escaped for security)
            array(),                    // No dependencies
            null                        // No versioning (Google handles updates)
        );
        // Enqueue the Bootstrap
        wp_enqueue_style(
            'bootstrap',          // Unique handle
            esc_url_raw($bootstrap_url),     // URL (escaped for security)
            array(),                    // No dependencies
            null                        // No versioning (Google handles updates)
        );
    }
    public function register_scripts()
    {
        wp_enqueue_script('main-js', ELEN_DIR_URI . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
        wp_register_script('scripts-js', ELEN_DIR_URI . '/assets/src/library/js/scripts.js', [], false, true);


        wp_enqueue_script('scripts-js');
        wp_enqueue_script('main-js');
    }
}
