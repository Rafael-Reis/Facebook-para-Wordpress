<?php

    if(isset($_POST)){
      rr_option_layout_botao(sanitize_text_field($_POST['layout_botao'])); 
      rr_option_acao_botao(sanitize_text_field($_POST['acao_botao'])); 
      rr_option_tamanho_botao(sanitize_text_field($_POST['tamanho_botao'])); 
      rr_option_largura_likebox(sanitize_text_field($_POST['largura_likebox'])); 
      rr_option_altura_likebox(sanitize_text_field($_POST['altura_likebox'])); 
      rr_option_reponsivo_likebox(sanitize_text_field($_POST['reponsivo_likebox']));
      rr_option_cabecalho_likebox($_POST['cabecalho_likebox']);
      rr_option_capa_likebox($_POST['capa_likebox']);
      rr_option_faces_likebox($_POST['faces_likebox']);
    }
   
?>

<form action="" method="post">
    <table class="form-table">
        <tbody>
            <tr valign="top">
                <th scope="row">
                    <?= _e("Preview", "rr_fb") ?>
                </th>
                <td>
                    <div class="fb-page" 
                         data-href="<?= !empty(rr_option_url_pagina()) ? rr_option_url_pagina():'https://www.facebook.com/facebook'; ?>" 
                         data-small-header="<?= rr_option_cabecalho_likebox();?>" 
                         <?php if(rr_option_reponsivo_likebox()=="true"){?>
                         data-adapt-container-width="<?= rr_option_reponsivo_likebox();?>" 
                         <?php }else{?>
                         data-width="<?= rr_option_largura_likebox(); ?>"
                         data-height="<?=rr_option_altura_likebox(); ?>"
                         <?php } ?>
                         data-hide-cover="<?= rr_option_capa_likebox();?>" 
                         data-show-facepile="<?= rr_option_faces_likebox();?>">
                        <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/facebook"><?= _e("Facebook", "rr_fb") ?></a>
                        </blockquote>
                    </div>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?= _e("Largura (px)", "rr_fb") ?>
                </th>
                <td>
                    <input class="fb-input rr-input" type="number" name="largura_likebox" value="<?= rr_option_largura_likebox(); ?>" <?=(rr_option_reponsivo_likebox()=="true")?'disabled="disabled"':'';?> placeholder="<?= _e("Largura do pixel do elemento integrado (mínimo 180, máximo de 500)", "rr_fb") ?>"/>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?= _e("Altura (px)", "rr_fb") ?>
                </th>
                <td>
                    <input class="fb-input rr-input" type="number" name="altura_likebox"  value="<?=rr_option_altura_likebox()?>" <?=(rr_option_reponsivo_likebox()=="true")?'disabled="disabled"':'';?> placeholder="<?= _e("Altura do pixel do elemento integrado (mínimo 70)", "rr_fb") ?>"/>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?= _e("Adaptar o tamanho automaticamente(recomendado)", "rr_fb") ?>
                </th>
                <td>
                    <select id="numposts" name="reponsivo_likebox"  class="fb-input rr-input">
                        <option value="true" <?=(rr_option_reponsivo_likebox()=="true")?'selected="selected"':''; ?>>
                            <?= _e("Sim", "rr_fb") ?>
                        </option>
                        <option value="false" <?=(rr_option_reponsivo_likebox()=="false")?'selected="selected"':''; ?>>
                            <?= _e("Não", "rr_fb") ?>
                        </option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?= _e("Usar cabeçalho pequeno", "rr_fb") ?>
                </th>

                <td>
                    <select id="numposts" name="cabecalho_likebox"  class="fb-input rr-input">
                        <option value="true" <?= (rr_option_cabecalho_likebox()=="true")?'selected="selected"':''; ?>>
                            <?= _e("Sim", "rr_fb") ?>
                        </option>
                        <option value="false" <?= (rr_option_cabecalho_likebox()=="false")?'selected="selected"':''; ?>>
                            <?= _e("Não", "rr_fb") ?>
                        </option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?= _e("Ocultar foto de capa", "rr_fb") ?>
                </th>
                <td>
                    <select id="numposts" name="capa_likebox"  class="fb-input rr-input">
                        <option value="true" <?= (rr_option_capa_likebox()=="true")?'selected="selected"':''; ?>>
                            <?= _e("Sim", "rr_fb") ?>
                        </option>
                        <option value="false" <?= (rr_option_capa_likebox()=="false")?'selected="selected"':''; ?>>
                            <?= _e("Não", "rr_fb") ?>
                        </option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?= _e("Mostrar rostos dos amigos", "rr_fb") ?>
                </th>
                <td>
                    <select id="numposts" name="faces_likebox"   class="fb-input rr-input">
                        <option value="true" <?= (rr_option_faces_likebox()=="true")?'selected="selected"':''; ?>>
                            <?= _e("Sim", "rr_fb") ?>
                        </option>
                        <option value="false" <?= (rr_option_faces_likebox()=="false")?'selected="selected"':''; ?>>
                            <?= _e("Não", "rr_fb") ?>
                        </option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>

    <?php submit_button(); ?>
    
</form>