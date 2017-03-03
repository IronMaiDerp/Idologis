<?php
	include('./Admin/Lecture.php');
	include('connexion.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>IdoLogis</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<div id="bandeau">
			<div id="bandeau_logo">
				<a href="index.php"><img src="./img/logo.jpg" alt="IdoLogis" class="logo"/></a>
			</div>
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

		<div class="conteneur">
			<h1>Liste des biens en vente</h1>
					
		
<p> Voulez vous vraiment supprimer cette vente ? </p>

<?php 
if (isset($_GET['Reference'])){


echo '<a href="ventes.php?Reference='.$_GET['Reference'].'&param=suppr"><input type="submit" name="Oui" value="Oui" /></a>';
echo '<a href="ventes.php"><input type="submit" name="Non" value="Non" /></a>';
}
?>



		</div>
		<footer>
			<br /><nav class="admin_modif"><a href="./Admin/Admin.php" >Administration du site</a></nav>
			<span><?php echo $copyright; ?> <a href="./mention.php">Mentions légales</a>.</span>
		</footer>
	</body>
</html>