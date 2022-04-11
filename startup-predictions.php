<?php

/**
 * Plugin Name: Startup Predictions
 * Plugin URI: http://www.startup-predictions.com
 * Description: A plugin to predict the future of startups.
 * Version: 1.0
 * Requires at least: 5.6
 * Author: Amar FILALI
 * Author URI: http://www.amarfilali.com
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text-domain: startup-pre
 * Domain-path: /languages
 */

/*
MV Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
MV Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with MV Slider. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

if( ! defined( 'ABSPATH' ) ){
    die( "This is just a wordpress plugin" );
    exit;
}

if( ! class_exists( 'STRT_Pre' ) ){
    class STRT_Pre {

        public function __construct(){
            $this->define_constants();
            $this->init();

        }

        public function init() {

        }

        public function define_constants() {
            define( 'STRTPRE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
            define( 'STRTPRE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
            define( 'STRTPRE_PLUGIN_FILE', __FILE__ );
            define( 'STRTPRE_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
            define( 'STRTPRE_PLUGIN_VERSION', '1.0' );
        }

        public static function activate(){

        }

        public static function deactivate(){

        }

        public static function uninstall(){

        }

    }
}

if( class_exists( 'STRT_Pre' ) ){
    register_activation_hook( __FILE__ , array( 'STRT_Pre', 'activate' ) );
    register_deactivation_hook( __FILE__ , array( 'STRT_Pre', 'deactivate' )  );
    register_uninstall_hook( __FILE__ , array( 'STRT_Pre', 'uninstall' ) );

    $strt_pre = new STRT_Pre();
}