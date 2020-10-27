<?php
	session_start();
	if ( isset($_SESSION['user_ok']) ) {
		if ($_SESSION['user_ok']['type_utilisateur'] == "ADM") {
			require_once("../../modelsemploye/employeModel.php");
			$_SESSION['listeemploye'] = monument_findAll();
			Header("Location: ../../views/employe/Listeremploye.php");
		} else {
			header("Location: ../../views/utilisateur/frmLogin.php");							
		}	
	} else {
		header("Location: ../../views/utilisateur/frmLogin.php");
	}	
	
?>