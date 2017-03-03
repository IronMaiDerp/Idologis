<?php 

$nomfichier='Coord.ini';
if (!file_exists($nomfichier)) {
	$nomfichier='./Admin/Coord.ini';
}
if (!file_exists($nomfichier)) {
	$nomfichier='../Admin/Coord.ini';
}
$fichier=array();
$fichiersave="";
$groupe0="Coord";
$item01="adresse";
$item02="telephone";
$item03="fax";
$groupe1="Copyright";
$item11="copyright";
$groupe2="Mentions";
$item21="denominationSociale";
$item22="siegeSocial";
$item23="capitalSocial";
$item24="rcs";
$item25="rm";
$item26="niif";
$item27="reglesPro";
$item28="nom";
$item29="email";
	
if (file_exists($nomfichier)) {
	$fichier=parse_ini_file($nomfichier, true);
		if (is_readable ($nomfichier)) {
			$coord=$fichier['Coord']['adresse'];
			$telephone=$fichier['Coord']['telephone'];
			$fax=$fichier['Coord']['fax'];
			$copyright=$fichier['Copyright']['copyright'];
			$denominationSociale=$fichier['Mentions']['denominationSociale'];
			$siegeSocial=$fichier['Mentions']['siegeSocial'];
			$capitalSocial=$fichier['Mentions']['capitalSocial'];
			$rcs=$fichier['Mentions']['rcs'];
			$rm=$fichier['Mentions']['rm'];
			$niif=$fichier['Mentions']['niif'];
			$reglesPro=$fichier['Mentions']['reglesPro'];
			$nom=$fichier['Mentions']['nom'];
			$email=$fichier['Mentions']['email'];
		} else {
			echo "Impossible de lire le fichier : $nomfichier";
		}
} else {
	$fichier[$groupe0][$item01]="1 Place de la République 59000 Lille Cedex";
	$fichier[$groupe0][$item02]="03 27 00 00 00";
	$fichier[$groupe0][$item03]="03 27 00 00 01";
	$fichier[$groupe1][$item11]="&copy Ideologis 2016. Tous droits réservés.";
	$fichier[$groupe2][$item21]="Ideologis";
	$fichier[$groupe2][$item22]="1 Place de la République 59000 Lille Cedex";
	$fichier[$groupe2][$item23]="?";
	$fichier[$groupe2][$item24]="?";
	$fichier[$groupe2][$item25]="?";
	$fichier[$groupe2][$item26]="?";
	$fichier[$groupe2][$item27]=" Le métier d’agent immobilier est régi par la loi Hoguet du 2 janvier 1970 et son décret d’application modifié en 2005. Cette loi réglemente les activités de transactions sur les immeubles et fonds de commerce et fixe des mesures et obligations visant à protéger le client.";
	$fichier[$groupe2][$item28]="M. Paul Decluse";
	$fichier[$groupe2][$item29]="contact@idologis.fr";
	foreach($fichier as $key => $groupe) {
		$fichiersave.="\n\n"."[".$key."]";
		foreach($groupe as $key => $item)
		{
			$fichiersave.="\n".$key."=\"".$item."\"";
		}
	}
	$fichiersave=substr($fichiersave,2);
	file_put_contents($nomfichier, $fichiersave);
	if (is_readable ($nomfichier)) {
		$coord=$fichier['Coord']['adresse'];
		$telephone=$fichier['Coord']['telephone'];
		$fax=$fichier['Coord']['fax'];
		$copyright=$fichier['Copyright']['copyright'];
		$denominationSociale=$fichier['Mentions']['denominationSociale'];
		$siegeSocial=$fichier['Mentions']['siegeSocial'];
		$capitalSocial=$fichier['Mentions']['capitalSocial'];
		$rcs=$fichier['Mentions']['rcs'];
		$rm=$fichier['Mentions']['rm'];
		$niif=$fichier['Mentions']['niif'];
		$reglesPro=$fichier['Mentions']['reglesPro'];
		$nom=$fichier['Mentions']['nom'];
		$email=$fichier['Mentions']['email'];
	} else {
		echo "Impossible de lire le fichier : $nomfichier";
	}
}


?>