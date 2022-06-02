<?php

/*
 * Plugin Name: Facebook Social Plugins para WordPress
 * Plugin URI: https://github.com/rafaelreis96/facebook-plugin-rr
 * Description: Plugin de Integração de plugins do Facebook com themas do Wordpress. Inclui os plugins de like box, comentários, botões curtir e compartilar.
 * Version:     1.0
 * Author:      rafaelreis.dev
 * Author URI:  http://rafaelreis.dev
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: rr_fb
*/

if(!defined('WPINC')) die;

define('RR_PREFIX', 'rr_fb');
define('RR_PLUGIN', plugin_basename(__FILE__));
define('RR_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('RR_PLUGIN_URL', plugin_dir_url(__FILE__));

require RR_PLUGIN_PATH . 'includes/classes/class-option.php';
require RR_PLUGIN_PATH . 'includes/functions.php';
require RR_PLUGIN_PATH . 'public/class-widget-botoes.php';
require RR_PLUGIN_PATH . 'public/class-widget-comentarios.php';
require RR_PLUGIN_PATH . 'public/class-widget-likebox.php';

if(is_admin()) {
    require RR_PLUGIN_PATH . 'install.php';
    register_activation_hook( __FILE__, array(new RR_Install(), 'activate') );
}
