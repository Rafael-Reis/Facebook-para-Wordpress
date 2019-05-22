<?php

    if(isset($_POST)){
      rr_option_layout_botao(sanitize_text_field($_POST['layout_botao'])); 
      rr_option_acao_botao(sanitize_text_field($_POST['acao_botao'])); 
      rr_option_tamanho_botao(sanitize_text_field($_POST['tamanho_botao'])); 
    }
   
    
    echo get_custom_logo();
    
    
?>
<form action="" method="post">
    <table class="form-table">
        <tbody>
            <tr valign="top">
                <th scope="row">
                    <?= _e("Preview", "rr_fb") ?>
                </th>
                <td>
                    <div class="fb-like" 
                         data-href="<?= rr_option_url_pagina(); ?>" 
                         data-layout="<?= rr_option_layout_botao(); ?>" 
                         data-action="<?= rr_option_acao_botao(); ?>" 
                         data-size="<?= rr_option_tamanho_botao(); ?>" 
                         data-show-faces="true" 
                         data-share="true">
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <?= _e("Layout", "rr_fb") ?>
                </th>
                <td>
                    <select name="layout_botao" class="fb-input rr-input small-text">
                        <option value="standard"     <?= (rr_option_layout_botao() == "standard") ? 'selected="selected"' : ''; ?>><?= _e("padrão", "rr_fb") ?></option>
                        <option value="button_count" <?= (rr_option_layout_botao() == "button_count") ? 'selected="selected"' : ''; ?>><?= _e("botão contador", "rr_fb") ?></option>
                        <option value="button"       <?= (rr_option_layout_botao() == "button") ? 'selected="selected"' : ''; ?>><?= _e("botão", "rr_fb") ?></option>
                    </select>

                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <?= _e("Tipo de ação", "rr_fb") ?>
                </th>
                <td>
                    <select name="acao_botao" class="fb-input rr-input small-text">
                        <option value="like" <?= (rr_option_acao_botao() == "like") ? 'selected="selected"' : ''; ?>>
                            <?= _e("Cutir", "rr_fb") ?>
                        </option>
                        <option value="recommend" <?= (rr_option_acao_botao() == "recommend") ? 'selected="selected"' : ''; ?>>
                            <?= _e("Recomendar", "rr_fb") ?>
                        </option>
                    </select>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <?= _e("Tamanho do botão", "rr_fb") ?>
                </th>
                <td>
                    <select name="tamanho_botao" class="fb-input rr-input small-text">
                        <option value="small" <?= (rr_option_tamanho_botao() == "small") ? 'selected="selected"' : ''; ?>>
                            <?= _e("pequeno", "rr_fb") ?>
                        </option>
                        <option value="large" <?= (rr_option_tamanho_botao() == "large") ? 'selected="selected"' : ''; ?>>
                            <?= _e("grande", "rr_fb") ?>
                        </option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    
    <?php submit_button(); ?>
    
</form>