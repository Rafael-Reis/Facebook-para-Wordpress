<?php

class Facebook_Plugin_RR {
    
    
    public function __construct() {
        add_action('admin_menu', array($this,'menu'));
        add_action( 'admin_enqueue_scripts', array($this,'scripts') );
    }
    
    public function scripts(){
        wp_enqueue_script('rr_admin', RR_PLUGIN_URL.'admin/js/facebook-plugin-rr.js', array( 'jquery' ) );
        wp_localize_script( 'rr_admin', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    }
    
    //Item do menu do painel de admin
    public function menu(){
        add_menu_page(
            __('Facebook', 'rr_fb'), //titulo da pagina
            __('Facebook', 'rr_fb'), //titulo Menu
            'manage_options',
            'facebook-plugin-rr', 
            array($this, 'view'),
            'dashicons-facebook',//icone
            40 // posição
        );
    }
    
    public function view(){
        rr_load_view('admin/index');
    }
    
    

    
}
