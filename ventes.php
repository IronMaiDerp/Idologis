<!-- Site IdoLogis v1 - Page de la liste des ventes -->

<?php
	include('./Admin/Lecture.php');
	include('./connexion.php');
	
	if ((isset($_GET['param'])) && ($_GET['param']=='suppr'))

{

$Reference= isset($_GET['Reference']) ? $_GET['Reference'] : '';

$db->exec("DELETE FROM VENTE WHERE Reference = $Reference");

}

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
			<nav><a class="couleur" href="./SLR/CreerVente.php">Ajouter un article</a></nav>
			
			<table class="liste">
				<tr>
					<th>Référence</th>
					<th>Type</th>
					<th>Secteur</th>
					<th>Surface</th>
					<th>Prix</th>
					<th>Fiche détaillée</th>
					<th>Supprimer</th>
				</tr>
					<?php
					
						$prepareVenteLire=$db->prepare('SELECT * FROM VENTE');
						$prepareVenteLire->execute();
						while ($row = $prepareVenteLire->fetch()){
							echo '<tr>';
							echo '<td>'.$row['Reference'].'</td>';
							echo '<td>'.$row['Types'].'</td>';
							echo '<td>'.$row['Secteur'].'</td>';
							echo '<td>'.$row['Surface'].'</td>';
							echo '<td>'.$row['prix'].'</td>';
							echo '<td><a class="couleur" href=./Ventes/'.$row['lien'].'>voir</a></td>';
							echo '<td><a class="couleur" href="suppr.php?Reference='.$row['Reference'].'&param=suppr">supprimer</a></td>';
							echo '</tr>';
						}
						
					?>

			</table>
		</div>
		<footer>
			<br /><nav class="admin_modif"><a href="./Admin/Admin.php" >Administration du site</a></nav>
			<span><?php echo $copyright; ?> <a href="./mention.php">Mentions légales</a>.</span>
		</footer>
	</body>
</html>