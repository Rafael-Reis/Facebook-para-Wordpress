<?php defined("ABSPATH") or die("No direct script access allowed!");

add_action('widgets_init','registrarWidgetComentarios');
function registrarWidgetComentarios() {
    return register_widget('WidgetComentarios');
}

class WidgetComentarios extends WP_Widget {

    public function __construct() {
        parent::__construct(false,'Comentários do Facebook',array(
                'description' => 'Exibe os comentarios de usuarios do facebook'
            ));
    }

    public function widget($argumentos, $instancia) {
        extract($argumentos);
        $title  = strip_tags($instancia['title']);
        
        $parametros = new Parametros();
        $dados = $parametros->getParametros();
        
        if ($dados->ativar_comentarios_facebook == "true"){
            echo $before_widget;
        
    ?>

    <!--HTML-->
    <h3 class="page-header text-primary">
        <?php echo $title?>
    </h3>
    <div class="fb-comments" 
         data-href="<?php echo get_permalink();  ?>" 
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
                <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" class="widefat" value="<?php echo $title; ?>"/> <?php _e('Exibe o Titulo do Widget'); ?>
            </label>
        </p>   
    <?php
    }

}
  
 
 
