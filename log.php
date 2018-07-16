<?php

include("dbtools.php");


if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

	$dbn = ouvreBase('mysql:host=localhost', 'root', 'Boing737nextgen');
	PDO::__construct('labo', $dbn);

	
	$sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'" AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
	$req = PDO::__construct($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.PDO::__construct());
	$data = mysql_fetch_array($req);

	mysql_free_result($req);
	mysql_close();


	if ($data[0] == 1) {
		session_start();
		$_SESSION['login'] = $_POST['login'];
		header('Location: membre.php');
		exit();
	}
	
	elseif ($data[0] == 0) {
		$erreur = 'Compte non reconnu.';
	}
	
	else {
		$erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
?>
<html>
<head>
<title>Accueil</title>
<link rel="icon" type="image/png" href="../../dist/images/favicon.png">
<link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="skeleton.css">
  <link rel="stylesheet" href="custom.css">
</head>

<body id="log">
<div id="fond">
<form action="index.php" method="post">
<input type="text" placeholder="Nom d'utilisateur" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br />
<input type="password" placeholder="Mot de passe" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
<input class="insc" type="submit" name="connexion" value="Connexion">
</form>
<a href="inscription.php">S'inscrire</a>
</div>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</body>
</html>