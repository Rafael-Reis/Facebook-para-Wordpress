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
                    Ativar Comentarios
                </th>
                <td>
                    <select name="ativar_comentarios" class="fb-input rr-input rr-input small-text">
                        <option value="true" <?= (rr_option_ativar_comentarios() == "true")?'selected="selected"':''; ?>>Sim</option>
                        <option value="false"<?= (rr_option_ativar_comentarios() =="false")?'selected="selected"':''; ?>>Nao</option>
                    </select>
                 </td>
            </tr>
            
            <tr valign="top">
                <th scope="row">
                    Número de comentários por página
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