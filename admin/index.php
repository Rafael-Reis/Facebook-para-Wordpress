 <div class="wrap">
    <h1 style="margin-bottom: 10px;">
        <?=_e('Social Plugins para o Facebook','rr_fb')?>
    </h1>
    
    <div class="wrap">
        <nav id="navbar-rr">
            <ul>
                <?php 
                $tab_list = rr_tabs();
                $tab_active = isset($_GET['tab']) ? trim($_GET['tab']) : 'geral';
                
                    foreach($tab_list as $tab){
                ?>
                     <li>
                         <a <?= ( $tab_active == $tab['name'] )? 'class="rr-active"': ''?> href="<?=admin_url($tab['url'])?>">
                            <?=$tab['label']?>
                         </a>
                     </li>
                <?php  } ?>
            </ul>
        </nav>
    </div>

    <div id="rr-content" class="wrap">
        <?php 
            if(!empty($tab_active)){
                rr_load_tab_view($tab_active);
            }else{
                rr_load_tab_view('geral');
            }
        ?>
    </div>
 
</div>

<?php rr_facebook_sdk(); ?>