<?php
include("dbtools.php");

if(isset($_POST['form'])){

    $dbh=ouvreBase();
    
    $sql = "INSERT INTO reservation (nom, prenom, compagnie, hotel, pays, ville, depart, retour) 
    VALUES (:nom, :prenom, :compagnie, :hotel, :pays, :ville, :depart, :retour)";


    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(":nom",$_POST["nom"]);
    $stmt->bindValue(":prenom",$_POST["prenom"]);
    $stmt->bindValue(":compagnie",$_POST["compagnie"]);
    $stmt->bindValue(":hotel",$_POST["hotel"]);
    $stmt->bindValue(":pays",$_POST["pays"]);
    $stmt->bindValue(":ville",$_POST["ville"]);
    $stmt->bindValue(":depart",$_POST["depart"]);
    $stmt->bindValue(":retour",$_POST["retour"]);

    $stmt->execute();
}

