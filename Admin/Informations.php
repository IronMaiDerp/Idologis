<?php 

try{
	$db=new PDO('mysql:host=192.168.169.5;dbname=BaseIdologis3', 'admin', 'root');
		$photo="../Ventes/photos/'.$reference.".".$extension.'";
		$prepareVente=$db->prepare('INSERT INTO INFORMATION VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)');
		$prepareVente->execute(array($_POST['CopyrightModif'],$_POST['nomModif'],$_POST['denominationSocialeModif'],$_POST['siegeSocialModif'],$_POST['capitalSocialModif'],$_POST['rcsModif'],$_POST['rmModif'],$_POST['niifModif'],$_POST['reglesProModif'],$_POST['emailModif']));
		header('Location: ../index.php');
} catch(Exception $e) {
	die("Impossible d'accéder à la base de données : ".$e->getMessage());
}

?>