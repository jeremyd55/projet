<?php
session_start();
if (!isset($_SESSION['login'])) {
	header ('Location: index.php');
	exit();
}
?>

<html>
<head>
<title>Espace membre</title>
<link rel="icon" type="image/png" href="../../dist/images/favicon.png">
<link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="skeleton.css">
  <link rel="stylesheet" href="custom.css">
</head>

<body id="log">
Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
<a href="deconnexion.php">Déconnexion</a>
</body>
</html>