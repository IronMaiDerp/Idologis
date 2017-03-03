<!-- Site IdoLogis v1 - Page d'accueil -->

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
		<br/>
		
		<form class="modif" action="./Informations.php" method="POST">
		<fieldset>
			<label> Copyright : </label>
			<input placeholder="<?php echo $copyright ?>" autofocus="" name="CopyrightModif" >
			<br /><br />
			<label> Dénomination sociale : </label>
			<input placeholder="<?php echo $denominationSociale ?>" name="denominationSocialeModif" >
			<br /><br />
			<label> Siège social : </label>
			<input placeholder="<?php echo $siegeSocial ?>" name="siegeSocialModif" >
			<br /><br />
			<label> Capital social : </label>
			<input placeholder="<?php echo $capitalSocial ?>" name="capitalSocialModif" >
			<br /><br />
			<label title="Numéro d'inscription au registre du commerce et des sociétés"> RCS : </label>
			<input placeholder="<?php echo $rcs ?>" name="rcsModif" >
			<br /><br />
			<label title="Numéro d'immatriculation au répertoire des métiers"> RM : </label>
			<input placeholder="<?php echo $rm ?>" name="rmModif" >
			<br /><br />
			<label title="Numéro individuel d'identification fiscale constitué d'une clé informatique et du numéro Siren de l'entreprise"> Numéro de TVA intracommunautaire :</label>
			<input placeholder="<?php echo $niif ?>" name="niifModif" >
			<br /><br />
			<label> Règles professionnelles : </label>
			<input placeholder="<?php echo $reglesPro ?>" name="reglesProModif" >
			<br /><br />
			<label> Email : </label>
			<input placeholder="<?php echo $email ?>" name="emailModif" >
			<br /><br />
			<label> Nom du responsable : </label>
			<input placeholder="<?php echo $nom ?>" name="nomModif" >
		</fieldset>
			<p><input value="Enregistrer" type="submit" ></p>
		</form>
		
	</body>
	
	<footer>
		<br /><nav class="admin_modif"><a href="Admin.php" >Administration du site</a></nav>
		<span><?php echo $copyright; ?> <a href="../mention.php">Mentions légales</a>.</span>
	</footer>
	
</html>