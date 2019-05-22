<?php

// if uninstall.php is not called by WordPress, die
if(!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

//Remove Options
delete_option('url_pagina');
delete_option('ativar_comentarios');
delete_option('num_comentarios');
delete_option('altura_likebox');
delete_option('largura_likebox');
delete_option('reponsivo_likebox');
delete_option('cabecalho_likebox');
delete_option('capa_likebox');
delete_option('faces_likebox');
delete_option('layout_botao');
delete_option('acao_botao');
delete_option('tamanho_botao');

