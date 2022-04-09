<?php 
    require_once("Mustache/Autoloader.php");
    Mustache_Autoloader::register();


    $mustache = new Mustache_Engine(array(
        'entity_flags' => ENT_QUOTES,
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')
    ));

    $template = $mustache->loadTemplate('index');
        
?>