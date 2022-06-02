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
                    <?= _e("Preview", "rr_fb") ?>
                </th>
                <td>
                    <div class="fb-like" 
                         data-href="<?= $data['url_pagina'] ?>" 
                         data-layout="<?= $data['layout_botao'] ?>" 
                         data-action="<?= $data['acao_botao'] ?>" 
                         data-size="<?= $data['tamanho_botao'] ?>" 
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
                        <option value="standard"     <?= ($data['layout_botao'] == "standard") ? 'selected="selected"' : ''; ?>><?= _e("padrão", "rr_fb") ?></option>
                        <option value="button_count" <?= ($data['layout_botao'] == "button_count") ? 'selected="selected"' : ''; ?>><?= _e("botão contador", "rr_fb") ?></option>
                        <option value="button"       <?= ($data['layout_botao'] == "button") ? 'selected="selected"' : ''; ?>><?= _e("botão", "rr_fb") ?></option>
                    </select>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <?= _e("Tipo de ação", "rr_fb") ?>
                </th>
                <td>
                    <select name="acao_botao" class="fb-input rr-input small-text">
                        <option value="like" <?= ($data['acao_botao'] == "like") ? 'selected="selected"' : ''; ?>>
                            <?= _e("Cutir", "rr_fb") ?>
                        </option>
                        <option value="recommend" <?= ($data['acao_botao'] == "recommend") ? 'selected="selected"' : ''; ?>>
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
                        <option value="small" <?= ($data['tamanho_botao'] == "small") ? 'selected="selected"' : ''; ?>>
                            <?= _e("pequeno", "rr_fb") ?>
                        </option>
                        <option value="large" <?= ($data['tamanho_botao'] == "large") ? 'selected="selected"' : ''; ?>>
                            <?= _e("grande", "rr_fb") ?>
                        </option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    
    <?php submit_button(); ?>
    
</form>