<?php

if(is_admin()) {

    if(!function_exists('rr_style_scripts')) {

        function rr_style_scripts(){
            wp_enqueue_style( 'rr-admin-css', RR_PLUGIN_URL.'admin/css/rr-admin.css');
        }
        add_action('admin_enqueue_scripts', 'rr_style_scripts');

    }

    if(!function_exists('rr_menu')) {

        function rr_menu(){
            add_menu_page(
                __('Facebook', 'rr_fb'),
                __('Facebook', 'rr_fb'),
                'manage_options',
                'facebook-plugin-rr', 
                'rr_view',
                'dashicons-facebook',
                40
            );
        }

        add_action('admin_menu', 'rr_menu');

    }

    if(!function_exists('rr_view')) {

        function rr_view(){
            rr_load_view('admin/index');
        }

    }

    if(!function_exists('rr_load_view')) {

        function rr_load_view($view){
            if(isset($_POST)){
                RR_Option::get_instance()->set_values($_POST);
            }

            $data = RR_Option::get_instance()->get_values();

            require_once RR_PLUGIN_PATH . $view . '.php';
        }

    }

    if(!function_exists('rr_tabs')) {

        function rr_tabs(){
            $items = array( 
                array('url'=>'admin.php?page=facebook-plugin-rr', 'name' =>'geral', 'label'=>'Geral'),
                array('url'=>'admin.php?page=facebook-plugin-rr&tab=botoes', 'name' =>'botoes', 'label'=>'Botões'),
                array('url'=>'admin.php?page=facebook-plugin-rr&tab=likebox', 'name' =>'likebox', 'label'=>'Like Box'),
                array('url'=>'admin.php?page=facebook-plugin-rr&tab=comentarios','name' =>'comentarios', 'label'=>'Comentários')
            );

            return $items;
        }

    }

    if(!function_exists('rr_load_tab_view')) {

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
                default:
                    rr_load_view('admin/geral');
            }
        }

    }

}

if(!function_exists('rr_facebook_sdk')) {
    
    function rr_facebook_sdk(){
        echo '<div id="fb-root"></div>'
            . '<script async defer crossorigin="anonymous" '
            . 'src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0">'
            . '</script>';
    }
    add_action('wp_footer', 'rr_facebook_sdk');
    
}

if(!function_exists('rr_facebook_metatag')) {
    
    function rr_facebook_metatag(){
        $meta =  '<meta property="og:url"           content="' . get_bloginfo('url') . '" />';
        $meta .= '<meta property="og:type"          content="website" />';
        $meta .= '<meta property="og:title"         content="' . get_bloginfo('title') . '" />';
        $meta .= '<meta property="og:description"   content="' . get_bloginfo('description') . '" />';
        $meta .= '<meta property="og:image"         content="' . rr_url_logo(). '" />';

        echo $meta;
    }
    add_action('wp_head', 'rr_facebook_metatag');
    
}

if(!function_exists('rr_url_logo')) {
    
    function rr_url_logo() {
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        return is_array($image) && !empty($image[0]) ? $image[0] : '';
    }
    
}