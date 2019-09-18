<?php 
require_once 'db_connect.php';
if($_POST) {
	$nom = $_POST['nom'];
	$telephone=$_POST['telephone'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$pwd = $_POST['pwd'];
	
	$sql = "INSERT INTO administrateur(nom,email,telephone,adresse,pwd,type_admin) VALUES ('$nom','$email','$telepphone','adresse','$pwd',0)";
	if($connect->query($sql) === TRUE) {
		
		echo'<script language="javascript"> 
			alert("Successfully Connected");
			window.location="profile.php";
			
	        </script>';
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}
	$connect->close();
}
?>