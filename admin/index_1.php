<style>
    #navbar-rr {
        height: auto;
        border-bottom: solid 1px #BBB;
    }
    #navbar-rr ul{
        list-style: none;
        padding: 0;
        margin: 0;
    }
    #navbar-rr li{
        display: inline;
        padding: 0;
        margin: 0;
    }
    #navbar-rr a{
        display: inline-block;
        text-decoration: none;
        padding: 10px;
        border: solid 1px #BBB;
        border-bottom: 0;
        font-size: 16px;
        margin-right:5px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        color: #0073aa;
    }
    #navbar-rr a:hover{
        background: #f9f9f9;
    }
    #navbar-rr .rr-active, #navbar-rr .rr-active:hover{
        background: #0073aa;
        color: #FFF;
        border-color:transparent;
    }
     
    #rr-content{
        clear: both;
    }
</style>

<div class="wrap">
    <h1 style="margin-bottom: 10px;">Painel de plugins do Facebook </h1>
    
    <div class="wrap">
        <nav id="navbar-rr">
            <ul>
                <?php 
                $tab_active= '';
                $tab_list = rr_nav_tabs();
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