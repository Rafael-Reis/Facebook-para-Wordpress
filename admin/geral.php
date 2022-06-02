<?php
    
    if(isset($_POST)){
      RR_Option::get_instance()->set_values($_POST);
    }
    
    $data = RR_Option::get_instance()->get_values();

?>

<form action="" class="rr-form" method="post">
    <table class="form-table">
        <tbody>
            <tr valign="top">
                <th scope="row">
                    <?=_e('Página do Facebook (url)', 'rr_fb')?>
                </th>
                <td>
                    <input type="url" name="url_pagina" class="fb-input rr-input regular-text" value="<?= $data['url_pagina'] ?>" placeholder="https://www.facebook.com/facebook"/>
                </td>
            </tr>
        </tbody>
    </table>
    
    <?php submit_button(); ?>
    
</form>
