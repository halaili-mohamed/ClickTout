<?php 
require_once 'db_connect.php';
require_once 'SessionPart.php';
if($_GET) {
	$id_commende = $_GET['id_commende'];
	$id_transporteur = $_SESSION['id_Transporteur'];
	$etat=$_GET['etatCMD'];
	$a=-1;
	if($etat== -1)
	{
	$sql  = "UPDATE commende SET etatCMD = -1  WHERE  id_commende = {$id_commende} and transporteur_Id_Transporteur={$id_transporteur}";
	}
	if($etat== 4)
	{
	$sql  = "UPDATE commende SET etatCMD = 4  WHERE  id_commende = {$id_commende} and transporteur_Id_Transporteur={$id_transporteur}";
	}
	
	
	
	
	if($connect->query($sql) === TRUE) {
		echo '<script language="javascript"> 
	
	window.location="offre_disponible2.php";
	</script>';
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}
	$connect->close();
	
}
?>