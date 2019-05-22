<?php

    if(isset($_POST)){
      rr_option_ativar_comentarios(sanitize_text_field($_POST['ativar_comentarios'])); 
      rr_option_num_comentarios(sanitize_text_field($_POST['num_comentarios']));
    }
   
?>
<form action="" method="post">
    <table class="form-table">
        <tbody>
            <tr valign="top">
                <th scope="row">
                    <?= _e("Ativar Comentarios", "rr_fb") ?>
                </th>
                <td>
                    <select name="ativar_comentarios" class="fb-input rr-input rr-input small-text">
                        <option value="true" <?= (rr_option_ativar_comentarios() == "true")?'selected="selected"':''; ?>>
                            <?= _e("Sim", "rr_fb") ?>
                        </option>
                        <option value="false"<?= (rr_option_ativar_comentarios() =="false")?'selected="selected"':''; ?>>
                            <?= _e("Não", "rr_fb") ?>
                        </option>
                    </select>
                 </td>
            </tr>
            
            <tr valign="top">
                <th scope="row">
                    <?= _e("Número de comentários por página", "rr_fb") ?>
                </th>
                <td>
                    <select name="num_comentarios" class="fb-input rr-input rr-input small-text">
                       <?php 
                           for($i=1; $i<=10;$i++){
                           $cont = $i*5
                       ?>
                        <option value="<?= $cont; ?>" <?= (rr_option_num_comentarios()==$cont)?'selected="selected"':''; ?>>
                            <?=  $cont; ?>
                        </option>
                       <?php } ?>
                    </select>
                </td>
            </tr>

        </tbody>
    </table>
    
    <?php submit_button(); ?>
    
</form>