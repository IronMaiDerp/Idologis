<?php

	include('../Admin/Lecture.php');
	include('./GestionVente.php');
	include('../connexion.php');
	
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
		
		<form  action="../ventes.php" method="POST">
		
			<?php
				
				$lien=$reference.".php";
				echo "<div class='conteneurConfirmation'>Réference : ".$reference."</br>"
				 ."Type : ".$type."</br>"
				 ."Secteur : ".$secteur."</br>"
				 ."Surface : ".$surface."</br>"
				 ."prix : ".$prix."</br>"
				 ."Surface du terrain : ".$surfaceT."</br>"
				 ."Nombre de piece(s) : ".$piece."</br>"
				 ."Classe energétique : ".$classe."</br>"
				 ."Plus : ".$plus."</br></div>";
	
				$donnees = "<tr>". "<td>".$_POST['reference']."</td>" . "<td>".$_POST['type']."</td>" . "<td>".$_POST['secteur']."</td>" . "<td>".$_POST['surface']."</td>". "<td>".$_POST['prix']."</td>". "<td>" ."<a  class=".'"couleur"'." href=".'./Ventes/'.$_POST['reference'].".php".">voir</a>"."</td>". "</tr>";

				$page ='

<?php
	include("../Admin/Lecture.php");
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
				<a href="../index.php"><img src="../img/logo.jpg" alt="IdoLogis" class="logo"/></a>
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
											
		<div class="conteneur">
			<h1>Bien n°'.$reference.' : '.$prix.' €</h1>
			
			<h2>Photo</h2>
			<p class="centre"><img src="../Ventes/photos/'.$reference.".".$extension.'" alt="Bien n°'.$reference.'" class="bien"/></p>
			
			<h2>Caractéristiques</h2>
			<ul>
				<li>Type : '.$type.'</li>
				<li>Secteur : '.$secteur.'</li>
				<li>Surface : '.$surface.' m²</li>
				<li>Surface de terrain : '.$surfaceT.' m²</li>
				<li>Pièces : '.$piece.'</li>
				<li>Classe énergetique : '.$classe.'</li>
				<li>Les plus : '.$plus.'</li>
			</ul>
			
			<p class="centre"><a class="couleur" href="../ventes.php">Retour à la liste des ventes</a></p>
		</div>
		
		<footer>
					<br /><nav class="admin_modif"><a href="../Admin/Admin.php" >Administration du site</a></nav>
					<span><?php echo $copyright; ?> <a href="../mention.php">Mentions légales</a>.</span>
		</footer>
	</body>
</html>
				';


				$photo="../Ventes/photos/".$reference.".".$extension;
				$prepareVente=$db->prepare('INSERT INTO VENTE VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
				$prepareVente->execute(array($reference, $bien, $photo, $secteur, $surface, $prix, $surfaceT, $chambre, $piece, $type, $personelDedie, $classe, $mail, $plus,$lien));

				$fileOpen = fopen ("../Ventes/".$_POST['reference'].".php", 'a+');
					fwrite ($fileOpen, $page."\n");
				fclose ($fileOpen);

			?>

			<div class='conteneur2'>
				<p><input value="Enregistrer" type="submit" ></p>
			</div>
		</form>
	</body>
	
	<footer>
		<br /><nav class="admin_modif"><a href="../Admin/Admin.php" >Administration du site</a></nav>
		<span><?php echo $copyright; ?> <a href="./mention.php">Mentions légales</a>.</span>
	</footer>
	
</html>