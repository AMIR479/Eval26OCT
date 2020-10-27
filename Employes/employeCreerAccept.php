<?php

	require_once("../../models/employe/employeModel.php");
	session_start();
	
	//récupération des données postées (inputs du formulaire)
	$nomemploye = trim(ucfirst($_POST['nomemploye']));
	$arremploye = trim($_POST['arremploye']);
	$adremploye = trim($_POST['adremploye']);
	$siteemploye = trim($_POST['siteemploye']);
	$dateCreation = trim($_POST['dateCreation']);
	$idTypeemploye = $_POST['idTypeemploye'];

	//on remet les données en variable de session au cas où
	//il y a erreur de saisie de retourner au formulaire avec
	//ces données
	$_SESSION['nomemploye'] = $nomemploye;
	$_SESSION['arremploye'] = $arremploye;
	$_SESSION['ademploye'] = $adremploye;
	$_SESSION['siteemploye'] = $siteemploye;
	$_SESSION['dateCreation'] = $dateCreation;
	$_SESSION['idTypeemploye'] = $idTypeemploye;
	
	$_SESSION['msg_erreur'] = "";
	
	//controle avant insertion
	if ( empty($nomemploye) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Nom employe non renseigné<br>";
	}
	if ( empty($arremploye) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "employe non renseigné<br>";
	} else {
		if ( intval($arremploye) < 1 || intval($arremploye) > 20 ) {
			$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "employe compris entre 1 et 20<br>";			
		}
	}
	if ( empty($adremploye) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Adresse non renseignée<br>";
	}
	if ( empty($siteemploye) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Site web non renseigné<br>";
	} else {
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$siteemploye)) {
			$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Adresse du site web invalide<br>";
		}
	}
	if ( empty($dateCreation) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Date non renseignée<br>";
	} 
	if ( intval($idTypeemploye) == 0 ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Type employe non choisi<br>";				
	}

	if ( empty($_SESSION['msg_erreur']) ) {
		
		employe_Insert( $nomemploye, $arremploye, $adremploye, $siteemploye, $dateCreation, $idTypeemploye );	

	} 
	Header("Location: ../../views/employe/frmemployetCreer.php");				
	
?>