<?php 
    
    //initialisation
    //include_once("initialisationRaky.php");
    require_once("initialisation.php");

    $pdo = new PDO('mysql:host=localhost;dbname=senegal', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    $requete = "SELECT * FROM user limit 10";

    $res = $pdo->prepare($requete);
    $res->execute();

    $listeUtilisateurs = $res->fetchAll();

    var_dump($listeUtilisateurs["name"]);exit;

    $template = $mustache->loadTemplate('accueil');
    echo $template->render($listeUtilisateurs);
        
?>