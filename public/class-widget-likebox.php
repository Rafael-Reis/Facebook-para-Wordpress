<?php defined("ABSPATH") or die("No direct script access allowed!");

add_action('widgets_init','registrarwidget_likebox');
function registrarwidget_likebox() {
    return register_widget('widget_LikeBox');
}

class widget_LikeBox extends WP_Widget {

    public function __construct() {
        parent::__construct(false,'Facebook Like Box',array(
            'description' => 'permite incorporar e promover facilmente qualquer Página do Facebook no seu site.'
        ));
    }

    public function widget($argumentos, $instancia) {
        extract($argumentos);
        $title = strip_tags($instancia['title']);
        $data = RR_Option::get_instance()->get_values();
        
        echo $before_widget;
    ?>
    <div>
        <?= !empty($title) ? $before_title.$title.$after_title : ''; ?>
        
        <div class="fb-page" 
            data-href="<?= !empty($data['url_pagina']) ? $data['url_pagina']:'https://www.facebook.com/facebook'; ?>" 
            data-small-header="<?= $data['cabecalho_likebox'];?>" 
            <?php if($data['reponsivo_likebox']=="true"){?>
            data-adapt-container-width="<?= $data['reponsivo_likebox']; ?>" 
            <?php }else{?>
            data-width="<?= $data['largura_likebox']; ?>"
            data-height="<?= $data['altura_likebox']; ?>"
            <?php } ?>
            data-hide-cover="<?= $data['capa_likebox']; ?>" 
            data-show-facepile="<?= $data['faces_likebox']; ?>">
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
  


 
 
