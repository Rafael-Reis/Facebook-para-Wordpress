<?php defined("ABSPATH") or die("No direct script access allowed!");

add_action('widgets_init','registrar_widget_comentarios');
function registrar_widget_comentarios() {
    return register_widget('Widget_Comentarios');
}

class Widget_Comentarios extends WP_Widget {

    public function __construct() {
        parent::__construct(false,'Comentários do Facebook',array(
                'description' => 'Exibe os comentarios de usuarios do facebook'
            ));
    }

    public function widget($argumentos, $instancia) {
        extract($argumentos);
        $title  = strip_tags($instancia['title']);
        $data = RR_Option::get_instance()->get_values();
       
        
        if ($data['ativar_comentarios'] == "true"){
            echo $before_widget;
        
    ?>

    <?= !empty($title) ? $before_title.$title.$after_title : ''; ?>
    <div class="fb-comments" 
         data-href="<?= get_permalink();  ?>" 
         data-width="auto" 
         data-numposts="10"
         data-colorscheme="light">
    </div>

    <?php  
    
        echo $after_widget;
        }
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
                <input 
                    type="text" 
                    id="<?php echo $this->get_field_id('title'); ?>" 
                    name="<?php echo $this->get_field_name('title'); ?>" 
                    class="widefat" value="<?php echo $title; ?>"/> 
                    <?php _e('Exibe o Titulo do Widget'); ?>
            </label>
        </p>   
    <?php
    }

}
  
 
 
