<form action="" method="post">
    <table class="form-table">
        <tbody>
            <tr valign="top">
                <th scope="row">
                    <?= _e("Preview", "rr_fb") ?>
                </th>
                <td>
                    <div class="fb-page" 
                         data-href="<?= !empty($data['url_pagina']) ? $data['url_pagina']:'https://www.facebook.com/facebook'; ?>" 
                         data-small-header="<?= $data['cabecalho_likebox'] ?>" 
                         <?php if($data['reponsivo_likebox']=="true"){?>
                         data-adapt-container-width="<?= $data['reponsivo_likebox'] ?>" 
                         <?php }else{?>
                         data-width="<?= $data['largura_likebox'] ?>"
                         data-height="<?= $data['altura_likebox'] ?>"
                         <?php } ?>
                         data-hide-cover="<?= $data['capa_likebox'] ?>" 
                         data-show-facepile="<?= $data['faces_likebox'] ?>">
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
                    <input class="fb-input rr-input" type="number" name="largura_likebox" value="<?= $data['largura_likebox'] ?>" <?=($data['reponsivo_likebox']=="true")?'disabled="disabled"':'';?> placeholder="<?= _e("Largura do pixel do elemento integrado (mínimo 180, máximo de 500)", "rr_fb") ?>"/>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?= _e("Altura (px)", "rr_fb") ?>
                </th>
                <td>
                    <input class="fb-input rr-input" type="number" name="altura_likebox"  value="<?=$data['altura_likebox']?>" <?=($data['reponsivo_likebox']=="true")?'disabled="disabled"':'';?> placeholder="<?= _e("Altura do pixel do elemento integrado (mínimo 70)", "rr_fb") ?>"/>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?= _e("Adaptar o tamanho automaticamente(recomendado)", "rr_fb") ?>
                </th>
                <td>
                    <select id="reponsivo_likebox" name="reponsivo_likebox"  class="fb-input rr-input">
                        <option value="true" <?=($data['reponsivo_likebox'] == "true")?'selected="selected"':''; ?>>
                            <?= _e("Sim", "rr_fb") ?>
                        </option>
                        <option value="false" <?=($data['reponsivo_likebox'] == "false")?'selected="selected"':''; ?>>
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
                    <select id="cabecalho_likebox" name="cabecalho_likebox"  class="fb-input rr-input">
                        <option value="true" <?= ($data['cabecalho_likebox'] == "true")?'selected="selected"':''; ?>>
                            <?= _e("Sim", "rr_fb") ?>
                        </option>
                        <option value="false" <?= ($data['cabecalho_likebox'] == "false")?'selected="selected"':''; ?>>
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
                    <select id="capa_likebox" name="capa_likebox"  class="fb-input rr-input">
                        <option value="true" <?= ($data['capa_likebox'] == "true")?'selected="selected"':''; ?>>
                            <?= _e("Sim", "rr_fb") ?>
                        </option>
                        <option value="false" <?= ($data['capa_likebox'] == "false")?'selected="selected"':''; ?>>
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
                    <select id="faces_likebox" name="faces_likebox" class="fb-input rr-input">
                        <option value="true" <?= ($data['faces_likebox'] == "true")?'selected="selected"':''; ?>>
                            <?= _e("Sim", "rr_fb") ?>
                        </option>
                        <option value="false" <?= ($data['faces_likebox'] == "false")?'selected="selected"':''; ?>>
                            <?= _e("Não", "rr_fb") ?>
                        </option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>

    <?php submit_button(); ?>
    
</form>