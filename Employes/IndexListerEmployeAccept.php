<?php
	session_start();
	require_once("../../models/employeemployeModel.php");
	$_SESSION['listeemploye'] = monument_findAll();
	Header("Location: ../../views/employe/IndexListeremploye.php");
?>