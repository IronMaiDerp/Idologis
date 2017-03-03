<!-- Site IdoLogis v1 - Page d'accueil -->

<?php

	include('./Admin/Coode.php');
	clearstatcache('./img/logo.jpg');
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>IdoLogis</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<!-- Bandeau avec le logo, les coordonnées et le menu -->
		<div id="bandeau">
			<!-- Logo -->
			<div id="bandeau_logo">
				<a href="index.php"><img class="logo" src="img/logo.jpg" alt="IdoLogis"></a>
			</div>
			<!-- Coordonnées -->
			<div id="bandeau_coord">
				<p class="coord"><?php echo $coord."<br />"."Téléphone : ".$telephone." - Fax : ".$fax; ?></p>
			</div>
			<div id="bandeau_menu">
				<p class="bandeau">
					<a href="index.php" id="menu_accueil"></a>
					<a href="ventes.php" id="menu_ventes"></a>
					<a href="locations.php" id="menu_locations"></a>
					<a href="contact.php" id="menu_contact"></a>
				</p>
			</div>
		</div>
		
		<!-- Contenu de la page -->
		<div class="accueil">
			<p class="centre"><img src="img/logo.jpg" class="logo2" alt="Idologis"></br>Ventes et locations immobilières dans le Nord Pas-de-Calais</p>
		</div>
	</body>
	
	<footer>
		<br /><nav class="admin_modif"><a href="./Admin/Admin.php" >Administration du site</a></nav>
		<span id="copyright symbol"><?php echo $copyright; ?> <a href="./mention.php">Mentions légales</a>.</span>
	</footer>
	
</html>