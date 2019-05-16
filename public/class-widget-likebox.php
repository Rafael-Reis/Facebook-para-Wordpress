<?php defined("ABSPATH") or die("No direct script access allowed!");

add_action('widgets_init','registrarWidgetLikeBox');
function registrarWidgetLikeBox() {
    return register_widget('widgetLikeBox');
}

class widgetLikeBox extends WP_Widget {

    public function __construct() {
        parent::__construct(false,'Facebook Like Box',array(
                'description' => 'permite incorporar e promover facilmente qualquer Página do Facebook no seu site.'
            ));
    }

    public function widget($argumentos, $instancia) {
        extract($argumentos);
        $title  = strip_tags($instancia['title']);
        
        $parametros = new Parametros();
        $dados = $parametros->getParametros();
        
        echo $before_widget;
    ?>
    <div>
        <?php if(!empty($title)){ ?>
        <h3>
            <?php echo $title; ?>
        </h3>
        <?php } ?>
        
        <div class="fb-page" 
             data-href="<?php echo !empty($dados->url_pagina_facebook) ?$dados->url_pagina_facebook:'https://www.facebook.com/facebook'; ?>" 
             data-small-header="<?php echo $dados->cabecalho_likebox_facebook; ?>" 
             <?php if ($dados->reponsivo_likebox_facebook == "true") { ?>
                 data-adapt-container-width="<?php echo $dados->reponsivo_likebox_facebook; ?>" 
             <?php } else { ?>
                 data-width="<?php echo $dados->largura_likebox_facebook; ?>"
                 data-height="<?php echo $dados->altura_likebox_facebook; ?>"
             <?php } ?>
             data-hide-cover="<?php echo $dados->capa_likebox_facebook; ?>" 
             data-show-facepile="<?php echo $dados->faces_likebox_facebook; ?>"
            >
            <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/facebook">Facebook</a>
            </blockquote>
        </div>
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
  


 
 
