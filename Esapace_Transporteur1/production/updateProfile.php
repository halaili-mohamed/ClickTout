<?php 

require_once 'db_connect.php';

if($_POST) {
	$Nom = $_POST['Nom'];
	$Prenom = $_POST['Prenom'];
	$Date_naiss = $_POST['Date_naiss'];
	$Email = $_POST['Email'];
	$Telephone = $_POST['Telephone'];
	$Adresse = $_POST['Adresse'];
	$Type_Voiture = $_POST['Type_Voiture'];
	$Matricule = $_POST['Matricule'];
	$Pseudo = $_POST['Pseudo'];
	$id_Transporteur = $_POST['id_Transporteur'];
	$Pass1 = $_POST['Password'];
	$Pass2=$_POST['Password2'];

	
if($Pass1 == $Pass2)
{
	$sql  = "UPDATE transporteur SET Nom = '$Nom', Prenom = '$Prenom', Date_naiss = '$Date_naiss', Email = '$Email', Telephone = '$Telephone' ,
	Adresse = '$Adresse', Type_Voiture = '$Type_Voiture' , Matricule = '$Matricule' , Pseudo = '$Pseudo', Password = '$Pass1' 
	WHERE id_Transporteur = {$id_Transporteur}";

	if($connect->query($sql) === TRUE) {
		
		//echo "<a href='profile.php?id_Transporteur=1'>";
		echo'<script language="javascript"> 
	
	window.location="profile.php";
	</script>';
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();
}
else
{
	echo' <div class="alert alert-danger" role="alert">  Les mots de passe ne correspondent pas </div>';

};

}

?>