<?php
if(!defined('WPINC')) die;

if(!class_exists('RR_Install')) {
 
    class RR_Install {

        private $data = [
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
        
        public function __construct() {
            
        }

        public function activate() {
            if(empty(get_option(RR_PREFIX))) {
                update_option(RR_PREFIX, json_encode($this->data));
            }
        }
    }
    
}