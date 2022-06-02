<?php

/*
 * Plugin Name: Facebook Plugin
 * Plugin URI: https://github.com/rafaelreis96/facebook-plugin-rr
 * Description: Plugin de Integração de plugins do Facebook com themas do Wordpress, Ex: like box, comentários, botão curtir, botão compartilar.
 * Version:     1.0
 * Author:      rafaelreis.dev
 * Author URI:  http://rafaelreis.dev
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: rr_fb
*/

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Invalid request.' );
}

define('RR_PLUGIN', plugin_basename(__FILE__));
define('RR_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('RR_PLUGIN_URL', plugin_dir_url(__FILE__));

require plugin_dir_path(__FILE__) . 'includes/functions.php';
require plugin_dir_path(__FILE__) . 'includes/classes/class-option.php';

//Widgets
require plugin_dir_path(__FILE__) . 'public/class-widget-botoes.php';
require plugin_dir_path(__FILE__) . 'public/class-widget-comentarios.php';
require plugin_dir_path(__FILE__) . 'public/class-widget-likebox.php';
