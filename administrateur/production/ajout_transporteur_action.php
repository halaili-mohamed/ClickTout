<?php 
require_once 'db_connect.php';

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


if($_POST) {
	$nom = $_POST['nom'];
	$Prenom = $_POST['Prenom'];
	$Date_naiss = $_POST['Date_naiss'];
	$Email = $_POST['Email'];
	$Adresse = $_POST['Adresse'];
	$Matricule = $_POST['Matricule'];
	$Type_Voiture = $_POST['Type_Voiture'];
	$psudo = $_POST['nom'].'_'.$_POST['Prenom'].generateRandomString(5);
	$PWD = generateRandomString();
	
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