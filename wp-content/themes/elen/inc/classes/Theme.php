<?php

namespace GhulamQadir\Elen\Class;

use GhulamQadir\Elen\Trait\Singleton;


class Theme {
    use Singleton;

    private function __construct() {
        // add_action('after_setup_theme', [$this, 'setup_theme']);
    echo "This is Theme Class";
    }

    // public function setup_theme() {
    //     add_theme_support('Elen-Blog');
    //     add_theme_support('post-thumbnails');
    //     register_nav_menus([
    //         'primary' => __('Primary Menu', 'travel-blog-theme'),
    //     ]);
    // }
}