<?php

if(!class_exists('RR_Option')) {

    class RR_Option {
        
        const KEY_OPTION = 'fb_rr';
        
        private static $instance;
        
        public $data = [
            'url_pagina'            => 'https://www.facebook.com/facebook',
            'ativar_comentarios'    => 'true',
            'num_comentarios'       => '5',
            'altura_likebox'        => '',
            'largura_likebox'       => '',
            'reponsivo_likebox'     => 'true',
            'cabecalho_likebox'     => 'true',
            'capa_likebox'          => 'true',
            'faces_likebox'         => 'true',
            'layout_botao'          => 'standard ',
            'acao_botao'            => 'like',
            'tamanho_botao'         => 'small'
        ];
        
        private function __construct() {
            $value = get_option(self::KEY_OPTION);
            if(!empty($value)) {
                $this->data = json_decode($value, true);
            } else {
                update_option(self::KEY_OPTION, json_encode($this->data));
            }
        }
        
        public static function get_instance() {
            if(is_null(self::$instance)) {
               self::$instance = new RR_Option();
            }            
            return self::$instance;
        }
        
        public function get_values() {
            return $this->data;
        }
        
        public function set_values($data) {
            foreach ($data as $key => $value) {
                if(array_key_exists($key, $this->data)) {
                    $this->data[$key] = $value;
                }
            }
            
            update_option(self::KEY_OPTION, json_encode($this->data));
        }

    }

}