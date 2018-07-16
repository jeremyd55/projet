<?php
    include("dbtools.php");

      if (isset($_POST['Commentaires']))
      {


        $dbh=ouvreBase();

        $sql = "INSERT INTO commentaires(avis) VALUES (:avis)";

        $stmt = $dbh->prepare($sql);

        $stmt->execute(array(
            ":avis"=>$_POST["Commentaires"]
        ));
      }