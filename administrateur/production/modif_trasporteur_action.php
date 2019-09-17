
<?php
   
require_once 'db_connect.php';
if($_POST) {
	$Id_Transporteur=$_POST['Id_Transporteur'];
	$nom = $_POST['nom'];
	$Prenom = $_POST['Prenom'];
	$Date_naiss = $_POST['Date_naiss'];
	$Email = $_POST['Email'];
	$Adresse = $_POST['Adresse'];
	$Matricule = $_POST['Matricule'];
	$Type_Voiture = $_POST['Type_Voiture'];
	$psudo = $_POST['psudo'];
	$PWD = $_POST['PWD'];


$sql="update transporteur set nom='$nom', prenom='$Prenom',Adresse='$Adresse' ,Email='$Email', Date_naiss='$Date_naiss',Matricule='$Matricule',Type_Voiture='$Type_Voiture' ,psudo='$psudo' ,PWD='$PWD' where $Id_Transporteur='$Id_Transporteur'";

if($connect->query($sql) === TRUE) {
		

	echo '<script language="javascript"> 
	alert("probleme modification !");
	window.location="gestion_transporteur.php";
	</script>';
}
else
{
	echo '<script language="javascript"> 
	alert("Modification effectuée avec succes.");
	window.location="gestion_transporteur.php";
	</script>';
}
}
?>
