<?php
	include('../Admin/Lecture.php');
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
	
		<form action="./ConfirmVente.php" enctype="multipart/form-data" method="POST">
			<div class="conteneur">
				<h3>Liste des ventes</h3>
				<b>* = Champ obligatoire</b> </br> </br>
					<label>Réference * </label>
						<input name="reference" autofocus=""></br> </br>
					<label>Type *</label>
						<input name="type" autofocus="" required=""></br> </br>
					<label>Secteur *</label>
						<input name="secteur" required="" placeholder="Ville"></br> </br>            
					<label>Surface *</label>
						<input name="surface" type="number" autofocus="" required=""><em>m²</em></br> </br>
					<label>prix *</label>
						<input name="prix" type="number" autofocus=""  required=""><em></em></br> </br>
			</div>
			
			<div class="conteneur">	
				<h3>Informations supplémentaires pour l'article</h3>
					<label>N° du bien * </label>
						<input name="bien" type="text" autofocus="" required=""></br> </br>
					<label>Surface du terrain </label>
						<input name="surfaceT" type="number"><em>m²</em></br> </br>
					<label>Pièce(s) * </label>
						<input name="piece" type="number" placeholder="Nombre pièce(s)" autofocus="" required=""></br> </br>
					<label>Chambre(s) </label>
						<input name="chambre" type="number" placeholder="Nombre chambre(s)"></br> </br>
					<label>Classe énergetique * </label>
						<input  name="classe" autofocus="" required=""></br> </br>
					<label>Plus </label></br>
						<textarea name="plus" placeholder="Description" rows="10" cols="50"></textarea></br>
			</div>
			
			<div class="conteneur">	
				<h3>Information personnelle</h3>
					<label>Adresse mail</label>
						<input name="mail"></br> </br>
			</div>
			
			<div class="conteneur">
			<h3>Photo</h3>
				<input type="hidden" name="MAX_FILE_SIZE" value="5242880"/><input type="file" name="imagefichier" required/>
			</div>
				<div class="conteneur2"></br>
					<input  type="submit" value="Créer l'article"/>	
				</div></br>
		</form>
		
		<footer>
			<br /><nav class="admin_modif"><a href="../Admin/Admin.php" >Administration du site</a></nav>
			<span><?php echo $copyright; ?> <a href="../mention.php">Mentions légales</a>.</span>
		</footer>
		
	</body>
</html>