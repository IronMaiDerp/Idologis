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
				move_uploaded_file($_FILES['imagefichier']['tmp_name'],'../Locations/photos/' . $_POST['reference'].".".$extension);
				unset($_FILES['imagefichier']);
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

if (isset($_POST['bien'])) {
	$bien=$_POST['bien'];
	}
if (isset($_POST['reference'])) {
	$reference=$_POST['reference'];
	}
if (isset($_POST['type'])) {
	$type=$_POST['type'];
	}
if (isset($_POST['secteur'])) {
	$secteur=$_POST['secteur'];
	}
if (isset($_POST['surface'])) {
	$surface=$_POST['surface'];
	}
if (isset($_POST['loyer'])) {
	$loyer=$_POST['loyer'];
	}
if (isset($_POST['mail'])) {
	$mail=$_POST['mail'];
	}
if (isset($_POST['bien'])) {
	$bien=$_POST['bien'];
	}
if (isset($_POST['surfaceT'])) {
	$surfaceT=$_POST['surfaceT'];
	}
if (isset($_POST['piece'])) {
	$piece=$_POST['piece'];
	}	
if (isset($_POST['chambre'])) {
	$chambre=$_POST['chambre'];
	}
if (isset($_POST['classe'])) {
	$classe=$_POST['classe'];
	}
if (isset($_POST['plus'])) {
	$plus=$_POST['plus'];
	}

?>

