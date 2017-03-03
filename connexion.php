<?php
try
{
	$db=new PDO('mysql:host=192.168.169.5;dbname=BaseIdologis3', 'admin', 'root');
}
catch(Exception $e)
{
	die("Impossible d'accéder à la base de données : ".$e->getMessage());
}
?>