<?php

	require_once("../../models/employe/employeModel.php");
	session_start();
	
	$Nom_Monument = trim(ucfirst($_POST['Nom_employe']));
	$idmonument = $_POST['ID_employe'];
	
	$_SESSION['Nom_employe'] = $Nom_employe;
	$_SESSION['msg_erreur'] = "";
	
	//controle si libelle est vide
	if ( !empty($Nom_employe) ) {
		
		employe_Update($id, $nomemploye, $arremploye, $adremploye, $siteemploye, $dateCreation, $idTypemploye );
		
		if ( $_SESSION['msg_erreur'] == "") {
			Header("Location: ../../controllers/employe/employeListerAccept.php")	;				
		} else {
			Header("Location: ../../views/employe/frmemployeModifier.php")	;		
		}
	} else {
		$_SESSION['msg_erreur'] = "nom non renseigné";
		Header("Location: ../../views/employe/frmemployeModifier.php")	;		
	} 
	
	
?>