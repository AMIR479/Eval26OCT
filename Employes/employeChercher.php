<?php

	session_start();	
	if ( isset($_SESSION['user_ok']) ) {
		if ($_SESSION['user_ok']['type_utilisateur'] == "ADM") {
			require_once("../../models/employe/employeModel.php");

			//récupération de l'id de employe à chercher
			$id = $_GET['idemploye'];
			$traitement = $_GET['traitement'];
			
			if ( $traitement == 4 ) {
				
				//on passe idemploye en variable de session
				//afin de l'utiliser pour nommer les images
				$_SESSION['idemploye'] = $id;
				$_SESSION['nomemploye'] = $_GET['nomemploye'];
				Header("Location: ../../views/employe/frmUpload.php");	
				
			} else {
				
				//récupération du employe
				$employe = employe_find( $id );
				
				//on passe $employe en variable de session
				$_SESSION['employe'] = $employe
				
				if ( $traitement == 1 ) {
					Header("Location: ../../views/employe/frmemployeVoir.php");
				} else {
					if ( $traitement == 2 ) {
						Header("Location: ../../views/employe/frmemployeModifier.php");
					} else {
						Header("Location: ../../views/employe/frmemployeSupprimer.php");			
					}
				}
			}		
		} else {
					header("Location: ../../views/utilisateur/frmLogin.php");							
		}	
	} else {
		header("Location: ../../views/utilisateur/frmLogin.php");
	}	


?>