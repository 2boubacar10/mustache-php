<?php 
    
    //initialisation
    include_once("initialisationRaky.php");
    //require_once("initialisation.php");
    $donnees = array(
        'firstname' => 'Boubacar', 
        'lastname' => 'Diallo', 
        'visitorNumber' => 7
    );

    //echo $mustache->render('accueil', $donnees);

    $template = $mustache->loadTemplate('accueil');
    echo $template->render($donnees);
        
?>