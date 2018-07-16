<?php

include("dbtools.php");

if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
	
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass'])) && (isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']))) {

	if ($_POST['pass'] != $_POST['pass_confirm']) {
		$erreur = 'Les 2 mots de passe sont différents.';
	}
	else {
		$dbn = ouvreBase('mysql:host=localhost', 'root', 'Boeing737nextgen');

		PDO::__construct('labo', $dbn);

		$sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'"';
		//$req = PDO::__construct($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.PDO_MySQL());
		$dbn->prepare($sql);
		$data = mysql_fetch_array($req);

		if ($data[0] == 0) {
		$sql = 'INSERT INTO membre VALUES("", "'.mysql_escape_string($_POST['login']).'", "'.mysql_escape_string(md5($_POST['pass'])).'")';
		PDO::__construct($sql) or die('Erreur SQL !'.$sql.'<br />'.PDO::__construct());

		session_start();
		$_SESSION['login'] = $_POST['login'];
		header('Location: membre.php');
		exit();
		}
		else {
		$erreur = 'Un membre possède déjà ce login.';
		}
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}

?>

<html>
<head>
<title>Inscription</title>
<link rel="icon" type="image/png" href="../../dist/images/favicon.png">
<link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="skeleton.css">
  <link rel="stylesheet" href="custom.css">
</head>

<body id="log">
<br />
<div id="fond">
<form action="inscription.php" method="post">
<input type="text" placeholder="Nom d'utilisateur" name="login" value="

<?php

if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>">

<br />

<input type="password" placeholder="Mot de passe" name="pass" value="

<?php

if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>">

<br />

<input type="password" placeholder="Confirmer mot de passe" name="pass_confirm" value="

<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>">

<br />

<input class="insc" type="submit" name="inscription" value="Inscription">
</form>
</div>

<?php

if (isset($erreur)) echo '<br />',$erreur;

?>
</body>
</html>