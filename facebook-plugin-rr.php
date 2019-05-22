<?php

/*
 * Plugin Name: Facebook Plugin
 * Plugin URI:  
 * Description: Plugin de Integração de plugins do Facebook com themas do Wordpress, Ex: like box, comentários, botão curtir, botão compartilar etc.
 * Version:     1.0
 * Author:      rafaelreis.eti.br
 * Author URI:  http://rafaelreis.eti.br
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: rr_fb
*/


define('RR_PLUGIN', plugin_basename(__FILE__));
define('RR_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('RR_PLUGIN_URL', plugin_dir_url(__FILE__));

require plugin_dir_path(__FILE__) . 'includes/functions.php';
require plugin_dir_path(__FILE__) . 'includes/options.php';

//Widgets
require plugin_dir_path(__FILE__) . 'public/class-widget-botoes.php';
require plugin_dir_path(__FILE__) . 'public/class-widget-comentarios.php';
require plugin_dir_path(__FILE__) . 'public/class-widget-likebox.php';