<?php 
    
    //initialisation
    //include_once("initialisationRaky.php");
    require_once("initialisation.php");

    $donnees = array();


    $donnees["liste_utilisateurs"] = array(
        1 => array(
            'prenom' => "Boubacar",
            'nom' => "Diallo",
        ),
        2 => array(
            'prenom' => "Boubacar",
            'nom' => "Diallo",
        )
    );

    //echo $mustache->render('accueil', $donnees);

    $template = $mustache->loadTemplate('accueil');
    echo $template->render($donnees);
        
?>