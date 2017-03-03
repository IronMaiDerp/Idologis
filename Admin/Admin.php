<!-- Site IdoLogis v1 - Page de contact -->

<?php
	include('Lecture.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>IdoLogis</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="../style.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<div id="bandeau">
			<div id="bandeau_logo">
				<a href="../index.php"><img class="logo" src="../img/logo.jpg" alt="IdoLogis" /></a>
			</div>
			<div id="bandeau_coord">
				<p class="coord"><?php echo $coord."<br />"."Téléphone : ".$telephone." - Fax : ".$fax; ?></p>
			</div>
			<div id="bandeau_menu">
				<p class="bandeau">
					<a href="../index.php" id="menu_accueil"></a>
					<a href="../ventes.php" id="menu_ventes"></a>
					<a href="../locations.php" id="menu_locations"></a>
					<a href="../contact.php" id="menu_contact"></a>
				</p>
			</div>
		</div>
		
		<!-- Contenu de la page -->
		<div class="conteneurAdmin">
			<h1>Outils d'administrations</h1>
			<ul>
				<li><a class="couleurAdmin" href="./ModifCoord.php" >Modifier les coordonnées</a></li>
				<li><a class="couleurAdmin" href="./ModifLegal.php" >Modifier les mentions légales</a></li>
				<li><a class="couleurAdmin" href="./ModifLogo.php" >Modifier le logo du site</a></li>
			</ul>
		</div>
		<footer>
			<br /><span><?php echo $copyright; ?> <a href="../mention.php">Mentions légales</a>.</span>
		</footer>
	</body>
</html>