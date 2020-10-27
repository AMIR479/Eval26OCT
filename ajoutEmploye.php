<?php
$conn=msql_connect("localhost", "root", "") or die(msql_error());
msql_connect_db("db_employes", $conn) or die(msql_error());
$prenom=$_POST["prenom"];
$DateDeNaissance=$_POST["Date de Naissance"];
$fonction=$_POST["fonction"];
$email=$_POST["email"];
$salaire=$_POST["salaire"];
$nomphoto=$_FILES["photo"] ["name"];
$_FILES_tmp_name_files["photo"] ["tmp_name"];
?>