<!-- Site IdoLogis v1 - Page de contact -->

<?php
	include('./Admin/Lecture.php');
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
				<a href="index.php"><img src="img/logo.jpg" alt="IdoLogis" class="logo"/></a>
			</div>
			<!-- Coordonnées -->
			<div id="bandeau_coord">
				<p class="coord"><?php echo $coord."<br />"."Téléphone : ".$telephone." - Fax : ".$fax; ?></p>
			</div>
			<!-- Menu -->
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
		<div class="conteneur">
			<h1>Pour nous contacter</h1>
			<ul>
				<li><?php echo $coord; ?></li>
				<li>Email : <a class="couleur"><?php echo $email; ?></a></li>
				<li>Téléphone : <?php echo $telephone; ?></li>
				<li>Fax : <?php echo $fax; ?></li>
			</ul>
		</div>
		<footer>
			<br /><nav class="admin_modif"><a href="./Admin/Admin.php" >Administration du site</a></nav>
			<span><?php echo $copyright; ?> <a href="./mention.php">Mentions légales</a>.</span>
		</footer>
	</body>
</html>