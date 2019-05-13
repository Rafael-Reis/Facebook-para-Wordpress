<?php

/*
 * Plugin Name:Facebook Plugin
 * Plugin URI:  
 * Description: Plugin de Integração de plugins do Facebook com themas do Wordpress, Ex: like box, comentários, botão curtir, botão compartilar etc.
 * Version:     1.0
 * Author:      rafaelreis.eti.br
 * Author URI:  http://rafaelreis.eti.br
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: rr_fb
 
 */


//Nega acesso direto ao arquivo
//if(!defined( 'WPINC' )) {
//    die;
//}


if ( !defined( 'RR_PLUGIN' ) ){
    define('RR_PLUGIN', plugin_basename( __FILE__ ));
}
if ( !defined( 'RR_PLUGIN_PATH' ) ){
    define('RR_PLUGIN_PATH', plugin_dir_path(__FILE__));
}
if ( !defined( 'RR_PLUGIN_URL' ) ){
    define('RR_PLUGIN_URL', plugin_dir_url(__FILE__));
}

require plugin_dir_path( __FILE__ ) . 'includes/class-facebook-plugin-rr.php';

//carregar paginas de html
function rr_load_view($view){
    require_once RR_PLUGIN_PATH . $view . '.php';
}

//url tabs
function rr_nav_tabs(){
    $items = array( 
        array('url'=>'admin.php?page=facebook-plugin-rr', 'name' =>'geral', 'label'=>'Geral'),
        array('url'=>'admin.php?page=facebook-plugin-rr&tab=botoes', 'name' =>'botoes', 'label'=>'Botões'),
        array('url'=>'admin.php?page=facebook-plugin-rr&tab=likebox', 'name' =>'likebox', 'label'=>'Like Box'),
        array('url'=>'admin.php?page=facebook-plugin-rr&tab=comentarios','name' =>'comentarios', 'label'=>'Comentários')
    );
    
    return $items;
}

//carregar uma tab na pagina
function rr_load_tab_view($tab){
    switch ($tab){
        case "botoes":
            rr_load_view('admin/botoes');
            break;
        case "likebox";
            rr_load_view('admin/likebox');
            break;
        case "comentarios":
            rr_load_view('admin/comentarios');
            break;
        default :
            rr_load_view('admin/geral');
            break;
    }
}

//Ajax 
function rr_select_tab(){
    echo "Ola Mundo";
    
    wp_die();
}
add_action('wp_ajax_rr_select_tab ', ' rr_select_tab'); 
add_action('wp_ajax_nopriv_rr_select_tab ', ' rr_select_tab'); 


//Inicia o plugin
function rr_iniciar_plugin(){
    new Facebook_Plugin_RR();
}

rr_iniciar_plugin();