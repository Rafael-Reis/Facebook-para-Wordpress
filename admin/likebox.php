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
                    Preview
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
                            <a href="https://www.facebook.com/facebook">Facebook</a>
                        </blockquote>
                    </div>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    Largura (px)
                </th>
                <td>
                    <input class="fb-input rr-input" type="number" name="largura_likebox" value="<?= rr_option_largura_likebox(); ?>" <?=(rr_option_reponsivo_likebox()=="true")?'disabled="disabled"':'';?> placeholder="Largura do pixel do elemento integrado (mínimo 180, máximo de 500)"/>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    Altura (px)
                </th>
                <td>
                    <input class="fb-input rr-input" type="number" name="altura_likebox"  value="<?=rr_option_altura_likebox()?>" <?=(rr_option_reponsivo_likebox()=="true")?'disabled="disabled"':'';?> placeholder="Altura do pixel do elemento integrado (mínimo 70)"/>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    Adaptar o tamanho automaticamente(recomendado)
                </th>
                <td>
                    <select id="numposts" name="reponsivo_likebox"  class="fb-input rr-input">
                        <option value="true" <?=(rr_option_reponsivo_likebox()=="true")?'selected="selected"':''; ?>>Sim</option>
                        <option value="false" <?=(rr_option_reponsivo_likebox()=="false")?'selected="selected"':''; ?>>Nao</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    Usar cabeçalho pequeno
                </th>

                <td>
                    <select id="numposts" name="cabecalho_likebox"  class="fb-input rr-input">
                        <option value="true" <?= (rr_option_cabecalho_likebox()=="true")?'selected="selected"':''; ?>>Sim</option>
                        <option value="false" <?= (rr_option_cabecalho_likebox()=="false")?'selected="selected"':''; ?>>Nao</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    Ocultar foto de capa
                </th>
                <td>
                    <select id="numposts" name="capa_likebox"  class="fb-input rr-input">
                        <option value="true" <?= (rr_option_capa_likebox()=="true")?'selected="selected"':''; ?>>Sim</option>
                        <option value="false" <?= (rr_option_capa_likebox()=="false")?'selected="selected"':''; ?>>Nao</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    Mostrar rostos dos amigos
                </th>
                <td>
                    <select id="numposts" name="faces_likebox"   class="fb-input rr-input">
                        <option value="true" <?= (rr_option_faces_likebox()=="true")?'selected="selected"':''; ?>>Sim</option>
                        <option value="false" <?= (rr_option_faces_likebox()=="false")?'selected="selected"':''; ?>>Nao</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>

    <?php submit_button(); ?>
    
</form>