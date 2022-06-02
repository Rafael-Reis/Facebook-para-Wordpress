<?php defined("ABSPATH") or die("No direct script access allowed!");

add_action('widgets_init','registrar_widget_botao_curtir');
function registrar_widget_botao_curtir() {
    return register_widget('widget_Botao_Curtir');
}

class widget_Botao_Curtir extends WP_Widget {

    public function __construct() {
        parent::__construct(false,'Botão Curtir',array(
                'description' => 'Com um único clique no botão Curtir, a pessoa "curte" conteúdo na Web e compartilha no Facebook.'
            ));
    }

    public function widget($argumentos, $instancia) {
        extract($argumentos);
        $title = strip_tags($instancia['title']);         
        $data = RR_Option::get_instance()->get_values();
        
        echo $before_widget;
    ?>
        
        <div class="fb-like" 
            <?php if(is_single()){?>
             data-href="<?php the_permalink()?>" 
            <?php }else{?>
            data-href="<?= $data['url_pagina']?>" 
            <?php }?>
            data-layout="<?= $data['layout_botao'] ?>" 
            data-action="<?= $data['acao_botao'] ?>" 
            data-size="<?= $data['tamanho_botao'] ?>" 
            data-show-faces="true" 
            data-share="true">
        </div>

    <?php    
        echo $after_widget;
    }

    public function update($nova_instancia, $instancia_antiga) {
        $instancia = $instancia_antiga;
        $instancia['title'] = strip_tags($nova_instancia['title']);
        return $instancia;
    }

    public function form($instancia) {
        $title = isset($instancia['title'])?esc_attr($instancia['title']):'';
    ?>
        <p>
            <label for="<?= $this->get_field_id('title'); ?>">
                Titulo:
                <input type="text" 
                       id="<?= $this->get_field_id('title'); ?>" 
                       name="<?= $this->get_field_name('title'); ?>" 
                       class="widefat" value="<?= $title; ?>"/> 
                <?php _e('Exibe o Titulo do Widget'); ?>
            </label>
        </p>   
    <?php
    }

}
  


 
 
