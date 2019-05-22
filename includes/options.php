<?php
    
function rr_option_url_pagina($data=null){
    if(!empty($data)){
        update_option('url_pagina', $data);
    }else{
        return get_option('url_pagina');
    }
}

function rr_option_ativar_comentarios($data=null){
    if(!empty($data)){
        update_option('ativar_comentarios', $data);
    }else{
        return get_option('ativar_comentarios');
    }
}

function rr_option_num_comentarios($data=null){
    if(!empty($data)){
        update_option('num_comentarios', $data);
    }else{
        return get_option('num_comentarios');
    }
}

function rr_option_altura_likebox($data=null){
    if(!empty($data)){
        update_option('altura_likebox', $data);
    }else{
        return get_option('altura_likebox');
    }
}

function rr_option_largura_likebox($data=null){
    if(!empty($data)){
        update_option('largura_likebox', $data);
    }else{
        return get_option('largura_likebox');
    }
}

function rr_option_reponsivo_likebox($data=null){
    if(!empty($data)){
        update_option('reponsivo_likebox', $data);
    }else{
        return get_option('reponsivo_likebox');
    }
}

function rr_option_cabecalho_likebox($data=null){
    if(!empty($data)){
        update_option('cabecalho_likebox', $data);
    }else{
        return get_option('cabecalho_likebox');
    }
}

function rr_option_capa_likebox($data=null){
    if(!empty($data)){
        update_option('capa_likebox', $data);
    }else{
        return get_option('capa_likebox');
    }
}

function rr_option_faces_likebox($data=null){
    if(!empty($data)){
        update_option('faces_likebox', $data);
    }else{
        return get_option('faces_likebox');
    }
}

function rr_option_layout_botao($data=null){
    if(!empty($data)){
        update_option('layout_botao', $data);
    }else{
        return get_option('layout_botao');
    }
}

function rr_option_acao_botao($data=null){
    if(!empty($data)){
        update_option('acao_botao', $data);
    }else{
        return get_option('acao_botao');
    }
}

function rr_option_tamanho_botao($data=null){
    if(!empty($data)){
        update_option('tamanho_botao', $data);
    }else{
        return get_option('tamanho_botao');
    }
}
