<?php

// if uninstall.php is not called by WordPress, die
if(!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

//Remove Options
delete_option(RR_PREFIX);

