<?php
  include("commentaire.php");
  include("reservation.php");
  // include("log.php");
  // include("membre.php");
  // include("deconnexion.php");
  // include("inscription.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>

 
  <meta charset="utf-8">
  <title>Voyage du monde</title>
  <meta name="description" content="">
  <meta name="author" content="">


  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/jpg" href="images/planete.jpg">
  <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="skeleton.css">
  <link rel="stylesheet" href="custom.css">

  <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="site.js"></script>


  <link rel="icon" type="image/png" href="../../dist/images/favicon.png">

</head>
<body>
  <div>
    <a type="button" class="modalBtn" name="deconnexion" href="log.php">Déconnexion</a>
</div>
  <div id="burg-button">
    <i class="fas fa-bars"></i>
  </div>

  <div id="menu">
    <blockquote>
    <ul class="cassement">
      
        <b><h4>Entrez dés maintenant dans la nature !</h4></b>
      </br>
      <b><a id="p0" href="#acc">->   Acceuil</a></b>
    </br>
    </br>
    </br>
        <b><a id="p1" href="#pourcent">->   Q'en est-il de notre planète ?</a></b>
    </br>
    </br>
    </br>
        <b><a id="p2" href="#pays">->   Découvrez de magnifiques paysages !</a></b>
      </br>
    </br>
    </br>
        <b><a id="p3" href="#ima">->   Soyez émerveillé par la beauté de ce monde !</a></b>
      </br>
    </br>
    </br>
      <b><a id="p5" href="#res">->   Réservez votre voyage dés maintenant !</a></b>
      </br>
    </br>
    </br>
        <b><a id="p4" href="#coord">->   Quelques infos pratiques !</a></b>  
    </ul>
    </blockquote>
  </div> 

  <!--–––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="section hero" id="acc">
    <div class="container">
      <div class="row">
        <div class="one-half column">
          <h4 class="hero-heading">N'avez vous jamais révé de voyager dans les plus belles régions du monde ? Elles sont à portée de main !</h4>
          <a class="button button-primary" href="https://www.globe-trotting.com/plus-beaux-endroits-du-monde">Voyager !</a>
        </div>
        <div class="one-half column phones">
          <img class="phone" src="images/paysage.jpg">
          <img class="phone" src="images/paysage.jpg">
        </div>
    </div>
      </div>
    </div>
  </div>

  <div class="section values" id="pourcent">
    <div class="container">
      <div class="row">
        <div class="one-third column value">
          <h2 class="value-multiplier"><b>67%</b></h2>
          <h5 class="value-heading">De la surface terrestre</h5>
          <p class="value-description">C'est le pourcentage de surface découverte sur terre.</p>
        </div>
        <div class="one-third column value">
          <h2 class="value-multiplier"><b>95%</b></h2>
          <h5 class="value-heading">De voyageurs ébahis</h5>
          <p class="value-description">Tous les voyageurs intérrogés sont époustouflés par le monde qui nous entoure.</p>
        </div>
        <div class="one-third column value">
          <h2 class="value-multiplier"><b>55%</b></h2>
          <h5 class="value-heading">De toute la faune à été découverte</h5>
          <p class="value-description">La faune observable est assez mince à côté des millions d'espèces animales qui se cachent dans notre monde.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section get-help" id="pays">
    <div class="container">
      <h3 class="section-heading"><b>Un peu de douceur dans ce monde de brut !</b></h3>
    </br>
      <p class="section-description">Troisième planète du système solaire, la Terre est notre planète. Surnommée « planète bleue » en raison des océans, elle abrite un trésor inestimable : la vie. Si cette dernière est partout sur notre bonne vieille Terre, elle est à la fois banale et d’une précieuse rareté, fragile et indestructible…
        Pour célébrer la vie, il est important de préserver la santé de notre planète. Si fragile, bien plus qu’on ne l’imagine ! 
        Car, sans vraiment y prêter attention, l’Homme a pollué l’air, l’eau et le sol. Il a consommé sans compter les ressources à sa disposition (forêts, matières premières, énergies fossiles…). Ses actions parfois irraisonnées, ont fait disparaître de nombreuses espèces animales et végétales. Et les menaces restent toujours plus importantes !
       </p>
    </br>
</br>    
      <a class="button button-primary" href="https://tour-monde.fr/paysage-magnifique-et-vues-de-reve-les-plus-beaux-endroits-du-monde/">Quelques paysages</a>
    </div>
  </div>

  <div class="section categories" id="ima">
    <div class="container">
      <h3 class="section-heading"><b>Un avant goût ?</b></h3>
      <p class="section-description">Profitez de ces quelques magnifiques photos pour vous faire une petite idée de la beauté que ce monde nous offre chaque jour en dehors de nos villes et de nos habitudes !</p>
      <div class="row">
        <div class="one-half column category">
          <img class="u-max-full-width" src="images/neige.jpg">
        </div>
        <div class="one-half column category">
          <img class="u-max-full-width" src="images/paysage.jpg">
        </div>
      </div>
    </div>
  </div>
</br>
<blockquote>
<footer>
    </div>
  <div>
    <div id="MaDiv">
    </div>
    <a href="http://www.italia.it/fr/home.html">
    <img class="one-half column category" id="photo1" src="images/printemps.jpg">
  </a>
  </div>
  <div>
    <div id="MaDiv1">
    </div>
    <a href="http://www.office-tourisme-usa.com/">
    <img class="one-half column category" id="photo2" src="images/route.jpg">
  </a>
  </div>
  <div>
    <div id="MaDiv2">
    </div>    
    <a href="https://www.visitscotland.com/fr-fr/">
    <img class="one-half column category" id="photo3" src="images/champs.jpg">
  </a>
  </div>
    <div>
      <div id="MaDiv3">
      </div>         
      <a href="https://www.japan-guide.com/">
    <img class="one-half column category" id="photo4" src="images/marrais.jpg">
  </a>
  </div>
    <div>
      <div id="MaDiv4">
      </div>          
      <a href="https://www.belgium.be/fr/la_belgique">
    <img class="one-half column category" id="photo5" src="images/arbres.jpg">
  </a>
  </div>
    <div>
      <div id="MaDiv5">
      </div>          
      <a href="https://www.canada.ca/fr.html">
    <img class="one-half column category" id="photo6" src="images/canada.jpg">
  </a>
  </div>
</footer>
</div>
<div>
    <fieldset>
        <div class="formulaire" id="res">
            <form action="" method="post">
             <TEXTAREA name="Commentaires" rows=4 cols=40></TEXTAREA>
           </div>
               <button type="submit" name="envoyer" class="bouton">Envoyer</button>
      </form>
    </fieldset>
</div>
</br>
<blockquote>
<button class="modalBtn1" toggle-modal="MyModal1" onclick="hide">Autres destinations</button>
<div id="MyModal1" class="modal" style="">
  <div class="modal-content">
<span class="reserve">&times;</span>
<div id="tableau-reserve" class="first">
<table class="u-full-width">
  <thead>
    <tr>
      <th>Pays</th>
      <th>Villes</th>
      <th>Compagnies</th>
      <th>Prix</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Italie</td>
      <td>Asti</td>
      <td>Rayanair</td>
      <td>99€</td>
    </tr>
    <tr>
      <td>États-Unis</td>
      <td>Jefferson</td>
      <td>Corsair</td>
      <td>499€</td>
    </tr>
    <tr>
      <td>Écosse</td>
      <td>Glenfinnan</td>
      <td>TUI</td>
      <td>129€</td>
    </tr>
    <tr>
      <td>Japon</td>
      <td>Kanazawa</td>
      <td>Fly Emirates</td>
      <td>659€</td>
    </tr>
    <tr>
      <td>Belgique</td>
      <td>Durbuy</td>
      <td>Rayanair</td>
      <td>79€</td>
    </tr>
    <tr>
      <td>Canada</td>
      <td>Saguenay</td>
      <td>Air Canada</td>
      <td>550€</td>
    </tr>
  </tbody>
</table>
</div>
<div id="tableau-reserve" class="second">
<table class="u-full-width">
  <thead>
    <tr>
      <th>biere</th>
      <th>test</th>
      <th>ordinateur</th>
      <th>geuigybze</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Italie</td>
      <td>Asti</td>
      <td>Rayanair</td>
      <td>99€</td>
    </tr>
    <tr>
      <td>États-Unis</td>
      <td>Jefferson</td>
      <td>Corsair</td>
      <td>499€</td>
    </tr>
    <tr>
      <td>Écosse</td>
      <td>Glenfinnan</td>
      <td>TUI</td>
      <td>129€</td>
    </tr>
    <tr>
      <td>Japon</td>
      <td>Kanazawa</td>
      <td>Fly Emirates</td>
      <td>659€</td>
    </tr>
    <tr>
      <td>Belgique</td>
      <td>Durbuy</td>
      <td>Rayanair</td>
      <td>79€</td>
    </tr>
    <tr>
      <td>Canada</td>
      <td>Saguenay</td>
      <td>Air Canada</td>
      <td>550€</td>
    </tr>
  </tbody>
</table>
</div>
</br>
</blockquote>
</br>
<button class="modalBtn" toggle-modal="MyModal">Réservation</button>
<div id="MyModal" class="modal" style="display:none">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="tableau">

  <!--Formulaire de réservation-->

	<form class="form-horizontal" method="POST" action="index.php">
		<fieldset>
			<legend></legend>
			<div class="form-group">
				<label for="inputEmail" class="col-lg-0 control-label"></label>
				<div class="col-lg-4">
					<input type="text" class="form-control" placeholder="Nom" name="nom">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-lg-0 control-label"></label>
				<div class="col-lg-4">
					<input type="text" class="form-control" placeholder="Prénom" name="prenom">
				</div>
      </div>
      <div class="form-group">
				<label for="inputPassword" class="col-lg-0 control-label"></label>
				<div class="col-lg-4">
					<input type="text" class="form-control" placeholder="Compagnie Aérienne" name="compagnie">
				</div>
      </div>
      <div class="form-group">
				<label for="inputPassword" class="col-lg-0 control-label"></label>
				<div class="col-lg-4">
					<input type="text" class="form-control" placeholder="Hôtel" name="hotel">
				</div>
			</div>
			<div class="form-group">
				<label for="text" class="col-lg-0 control-label"></label>
				<div class="col-lg-4">
					<input type="text" class="form-control" placeholder="Destination ( Pays )" name="pays">
				</div>
      </div>
      <div class="form-group">
				<label for="text" class="col-lg-0 control-label"></label>
				<div class="col-lg-4">
					<input type="text" class="form-control" placeholder="Destination ( Ville )" name="ville">
				</div>
			</div>
			<div class="form-group">
				<label for="text" class="col-lg-0 control-label"></label>
				<div class="col-lg-4">
        <blockquote>
          <p>Date de départ</p>  
        <input type="date" class="form-control" placeholder="Date" name="depart">
        </blockquote>
				</div>
      </div>
      <div class="form-group">
				<label for="text" class="col-lg-0 control-label"></label>
				<div class="col-lg-4">
        <blockquote>
          <p>Date de retour</p>  
        <input type="date" class="form-control" placeholder="Date" name="retour">
        </blockquote>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-5">
					<button type="submit" class="modalBtn" name="form" >Réserver</button>
				</div>
      </div>
		</fieldset>
	</form>
</div>
</div>   
<!--Fin du formulaire de réservation-->

  </div>
</div>
</div>	
<footer>
  <blockquote id="blok">
  </br>
  </br>
  <div id="coord">
    <h6>Ce site à été réalisé par Désiron Jérémy en partenariat avec Technofutur Tic.</h6>
    <a class="fab fa-facebook-f" href="https://www.facebook.com/henry.grisou" ></a>
    <a class="fab fa-instagram" href="https://www.instagram.com/jeremydesiron/?hl=fr"></a>
  </div>
</br>
</blockquote>
</footer>
</body>
</html>