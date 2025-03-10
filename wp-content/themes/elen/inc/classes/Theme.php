<?php

namespace GhulamQadir\Elen\Class;

use GhulamQadir\Elen\Trait\Singleton;


class Theme {
    use Singleton;

    private function __construct() {
        // add_action('after_setup_theme', [$this, 'setup_theme']);
        Enqueue::get_instance();
      
        
    }

   
}