<?php 
    
    //initialisation
    //include_once("initialisationRaky.php");
    require_once("initialisation.php");
    require_once("connexion_bdd.php");

    $requete = "SELECT * FROM user limit 10";

    $res = $pdo->prepare($requete);
    $res->execute();
    $listeUtilisateurs = $res->fetchAll();  

    //initialisation données
    $donnees = array();

    $donnees["listeutilisateurs"] = $listeUtilisateurs;
    $donnees["date"] = date("d-m-Y H:i:s");


    

    var_dump($listeUtilisateurs);exit;

    $template = $mustache->loadTemplate('accueil');
    echo $template->render($donnees);