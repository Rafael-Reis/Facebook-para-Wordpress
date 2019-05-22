<?php

    if(isset($_POST['url_pagina'])){

      rr_option_url_pagina(sanitize_text_field($_POST['url_pagina'])); 

    }
   
?>

<form action="" class="rr-form" method="post">
    <table class="form-table">
        <tbody>
            <tr valign="top">
                <th scope="row">
                    <?=_e('Página do Facebook (url)', 'rr_fb')?>
                </th>
                <td>
                    <input type="url" name="url_pagina" class="fb-input rr-input regular-text" value="<?= rr_option_url_pagina(); ?>" placeholder="https://www.facebook.com/facebook"/>
                </td>
            </tr>
        </tbody>
    </table>
    
    <?php submit_button(); ?>
    
</form>
