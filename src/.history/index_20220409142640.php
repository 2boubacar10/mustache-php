<?php 
    
    //initialisation
    //include_once("initialisationRaky.php");
    require_once("initialisation.php");

    $donnees = array();


    $donnees["liste_utilisateurs"] = array(
        'prenom' => "Boubacar", 
    );

    //echo $mustache->render('accueil', $donnees);

    $template = $mustache->loadTemplate('accueil');
    echo $template->render($donnees);
        
?>