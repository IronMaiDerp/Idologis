<?php

if (isset($_FILES['imagefichier'])) {
	if (!($_FILES['imagefichier']['error'] == UPLOAD_ERR_NO_TMP_DIR)) {
		$chemin=pathinfo($_FILES['imagefichier']['name']);
		$extension=$chemin['extension'];
		$extensionsAutorisees=array("jpeg","jpg","png");
		if (!(in_array($extension,$extensionsAutorisees))) {
			echo "Le fichier n'a pas l'extension attendue";
		} else {
			if ($_FILES['imagefichier']['size'] <= 5242880){
				unlink("../img/logo.jpg");
				move_uploaded_file($_FILES['imagefichier']['tmp_name'],'../img/logo.jpg');
				unset($_FILES['imagefichier']);
				clearstatcache('../img/logo.jpg');
				header('Location: ../index.php');
				exit;
				echo "L'envoi a bien été effectué !";
			} else {
				echo "Le fichier est trop volumineux";
			}
		}
	} else {
		echo "Dossier temporaire manquant";
	}
} else {
	echo "Echec de l'importation";
}

?>

