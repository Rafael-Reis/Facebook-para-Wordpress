<?php

    if(isset($_POST)){
      RR_Option::get_instance()->set_values($_POST);
    }
    
    $data = RR_Option::get_instance()->get_values();
   
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
                        <option value="true" <?= ($data['ativar_comentarios'] == "true")?'selected="selected"':''; ?>>
                            <?= _e("Sim", "rr_fb") ?>
                        </option>
                        <option value="false" <?= ($data['ativar_comentarios'] == "false")?'selected="selected"':''; ?>>
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
                        <option value="<?= $cont; ?>" <?= ($data['num_comentarios']==$cont)?'selected="selected"':''; ?>>
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
