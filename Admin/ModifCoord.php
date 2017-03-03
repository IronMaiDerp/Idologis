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
		
		<form class="modifCoord" action="./Coordonnee.php" method="POST">
		<fieldset>
			<label class="coord" >Adresse : </label>
			<input placeholder="<?php echo $coord ?>" autofocus="" name="coordModif" >
			<br /><br />
			<label class="coord" >Téléphone : </label>
			<input placeholder="<?php echo $telephone ?>" name="telephoneModif" >
			<br /><br />
			<label class="coord" >Fax : </label>
			<input placeholder="<?php echo $fax ?>" name="faxModif">
		</fieldset>
			<p><input value="Enregistrer" type="submit" ></p>
		</form>
		
	</body>
	
	<footer>
		<br /><nav class="admin_modif"><a href="Admin.php" >Administration du site</a></nav>
		<span><?php echo $copyright; ?> <a href="../mention.php">Mentions légales</a>.</span>
	</footer>
	
</html>