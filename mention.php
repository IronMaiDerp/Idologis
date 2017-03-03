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
			<h1>Mentions légales :</h1>
			<ul>
				<li><span class="gras">Dénomination sociale :</span> <?php echo $denominationSociale; ?></li>
				<li><span class="gras">Siège social :</span> <?php echo $siegeSocial; ?></li>
				<li><span class="gras">Capital social :</span> <?php echo $capitalSocial; ?></li>
				<li><span class="gras">Courrier électronique/Email :</span> <a class="couleur"><?php echo $email; ?></a></li>
				<li><span class="gras">Numéro de téléphone/Fax :</span> </li>
					<p>
						<?php echo "Téléphone : ".$telephone; ?>
						<br />
						<?php echo "Fax : ".$fax; ?>
					</p>
				<br />
				<li><span class="gras"  title="Numéro d'inscription au registre du commerce et des sociétés">RCS</span> : <?php echo $rcs; ?></li>
				<li><span class="gras" title="Numéro d'immatriculation au répertoire des métiers">RM</span> : <?php echo $rm; ?></li>
				<li><span class="gras" title="Numéro individuel d'identification fiscale constitué d'une clé informatique et du numéro Siren de l'entreprise">Numéro de TVA intracommunautaire</span> : <?php echo $niif; ?></li>
				<br />
				<li><span class="gras">Règles professionnelles :</span> <?php echo $reglesPro; ?></li>
				<br />
				<br />
				<li><span class="gras">Nom du responsable :</span> <?php echo $nom; ?></li>
			</ul>
		</div>
		<footer>
			<br /><nav class="admin_modif"><a href="./Admin/Admin.php" >Administration du site</a></nav>
			<span id="copyright symbol"><?php echo $copyright; ?> <a href="./mention.php">Mentions légales</a>.</span>
		</footer>
	</body>
</html>