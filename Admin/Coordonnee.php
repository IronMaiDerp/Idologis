﻿<?php 

try{
	$db=new PDO('mysql:host=192.168.169.5;dbname=BaseIdologis3', 'admin', 'root');
		$photo="../Ventes/photos/'.$reference.".".$extension.'";
		$prepareVente=$db->prepare('INSERT INTO COORD VALUES (?, ?, ?)');
		$prepareVente->execute(array($_POST['coordModif'],$_POST['telephoneModif'],$_POST['faxModif']));
		header('Location: ../index.php');
} catch(Exception $e) {
	die("Impossible d'accéder à la base de données : ".$e->getMessage());
}

?>