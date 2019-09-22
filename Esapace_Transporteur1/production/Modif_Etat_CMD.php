<?php 
require_once 'db_connect.php';
if($_GET) {
	$id_commende = $_GET['id_commende'];
	$etat=$_Get['etatCMD'];
	if($etat==1)
	{
	$sql  = "UPDATE commende SET etatCMD = 1  WHERE id_commende = {$id_commende}";
	}
	if($etat==2)
	{
	$sql  = "UPDATE commende SET etatCMD = 2  WHERE id_commende = {$id_commende}";
	}
	if($etat==3)
	{
	$sql  = "UPDATE commende SET etatCMD = 3 WHERE id_commende = {$id_commende}";
	}
	if($connect->query($sql) === TRUE) {
		echo '<script language="javascript"> 
	
	window.location="offre_accepte.php";
	</script>';
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}
	$connect->close();
}
?>