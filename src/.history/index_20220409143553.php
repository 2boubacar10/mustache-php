<?php 
    
    //initialisation
    //include_once("initialisationRaky.php");
    require_once("initialisation.php");

    $pdo = new PDO('mysql:host=localhost;dbname=senegal', 'roofft', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    var_dump($pdo);exit;

    $donnees = array();


    $donnees["liste_utilisateurs"] = array(
        array(
            'prenom' => "Boubacar",
            'nom' => "Diallo",
        ),
        array(
            'prenom' => "Boubacar",
            'nom' => "Diallo",
        )
    );

    //echo $mustache->render('accueil', $donnees);

    $template = $mustache->loadTemplate('accueil');
    echo $template->render($donnees);
        
?>