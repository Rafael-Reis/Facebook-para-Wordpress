<?php defined("ABSPATH") or die("No direct script access allowed!");

add_action('widgets_init','registrarWidgetBotaoCurtir');
function registrarWidgetBotaoCurtir() {
    return register_widget('widgetBotaoCurtir');
}

class widgetBotaoCurtir extends WP_Widget {

    public function __construct() {
        parent::__construct(false,'Botão Curtir',array(
                'description' => 'Com um único clique no botão Curtir, a pessoa "curte" conteúdo na Web e compartilha no Facebook.'
            ));
    }

    public function widget($argumentos, $instancia) {
        extract($argumentos);
        $title  = strip_tags($instancia['title']);
        
        $parametros = new Parametros();
        $dados = $parametros->getParametros();
        
        echo $before_widget;
        
        
    ?>
        
        <div class="fb-like" 
            <?php if(is_single()){?>
             data-href="<?php the_permalink()?>" 
            <?php }else{?>
            data-href="<?php echo $dados->url_pagina_facebook;?>" 
            <?php }?>
            data-layout="<?php echo $dados->layout_botao_facebook;?>" 
            data-action="<?php echo $dados->acao_botao_facebook;?>" 
            data-size="<?php echo $dados->tamanho_botao_facebook;?>" 
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
            <label for="<?php echo $this->get_field_id('title'); ?>">
                Titulo:
                <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" class="widefat" value="<?php echo $title; ?>"/> <?php _e('Exibe o Titulo do Widget'); ?>
            </label>
        </p>   
    <?php
    }

}
  


 
 
