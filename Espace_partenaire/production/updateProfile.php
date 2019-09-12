<?php 

require_once 'db_connect.php';

if($_POST) {
	$nom_ste = $_POST['nom_ste'];
	$responsable = $_POST['responsable'];
	$adresse = $_POST['adresse'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$siteweb = $_POST['siteweb'];
	$pwd = $_POST['pwd'];
	

	$id_partenaire = $_POST['id_partenaire'];

	$sql  = "UPDATE partenaire SET nom_ste = '$nom_ste', responsable = '$responsable', adresse = '$adresse', tel = '$tel', email = '$email',
	siteweb = '$siteweb', pwd = '$pwd' WHERE id_partenaire ={$id_partenaire}";
	if($connect->query($sql) === TRUE) {
		
		//echo "<a href='profilePart.php?id_partenaire=1'>";
		echo'<script language="javascript"> 
	
	window.location="profilePart.php";
	</script>';
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>