<?php 
    require_once("Mustache/Autoloader.php");
    Mustache_Autoloader::register();


    $mustache = new Mustache_Engine(array(
        'entity_flags' => ENT_QUOTES,
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')
    ));

    

    $donnees = array(
        'firstname' => 'Boubacar', 
        'lastname' => 'Diallo', 
        'visitorNumber' => 7
    );

    //echo $mustache->render('accueil', $donnees);

    $template = $mustache->loadTemplate('accueil');
    echo $template->render($donnees);
        
?>