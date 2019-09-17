<?php 
require_once 'db_connect.php';
if($_POST) {
	$nom = $_POST['nom'];
	$Prenom = $_POST['Prenom'];
	$Date_naiss = $_POST['Date_naiss'];
	$Email = $_POST['Email'];
	$Adresse = $_POST['Adresse'];
	$Matricule = $_POST['Matricule'];
	$Type_Voiture = $_POST['Type_Voiture'];
	$psudo = $_POST['psudo'];
	$PWD = $_POST['PWD'];
	
	$sql = "INSERT INTO transporteur (nom, Prenom,Date_naiss,Email,Adresse,Matricule,Type_voiture,psudo,PWD) VALUES ('$nom', '$Prenom', '$Date_naiss','$Email','$Adresse','$Matricule','$Type_Voiture','$psudo','$PWD')";
	if($connect->query($sql) === TRUE) {
		
		echo'<script language="javascript"> 
			alert("Successfully Connected");
			window.location="ajout_transporteur.php";
			
	        </script>';
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}
	$connect->close();
}
?>