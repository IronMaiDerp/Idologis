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
		
		<form class="modif" enctype="multipart/form-data" action="./logo.php" method="POST">
			<fieldset>
				<input type="hidden" name="MAX_FILE_SIZE" value="5242880"/>
				Importer le nouveau logo :<input type="file" name="imagefichier" required/>
			</fieldset>
			<input type="submit" value="Enregistrer"/>
			
		</form>
		
	</body>
	
	<footer>
		<br /><nav class="admin_modif"><a href="Admin.php" >Administration du site</a></nav>
		<span><?php echo $copyright; ?> <a href="../mention.php">Mentions légales</a>.</span>
	</footer>
	
</html>