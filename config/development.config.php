<?php
// NOTE: DO NOT deploy this file to LIVE
//
return array(
     'modules' => array(
        'ZFTool',
        'ZF\Apigility\Admin',
        'ZF\Configuration'
    ),
    // development time configuration globbing
    'module_listener_options' => array(
        'config_glob_paths' => array('config/autoload/{,*.}{global,local}-development.php')
    ) 
);
