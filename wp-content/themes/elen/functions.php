<?php



require_once __DIR__ . '/vendor/autoload.php';
use GhulamQadir\Elen\Class\Theme;

// Define the directory path for the theme
if(!defined('ELEN_DIR_PATH')){
    define('ELEN_DIR_PATH',untrailingslashit(get_template_directory()));
}
// Define the directory URI for the theme
if(!defined('ELEN_DIR_URI')){
    define('ELEN_DIR_URI',untrailingslashit(get_template_directory_uri()));
}

Theme::get_instance();