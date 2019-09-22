<?php 
require_once 'db_connect.php';
if($_GET) {
	$id_commende = $_GET['id_commende'];
	$sql  = "UPDATE commende SET etatCMD = -1  WHERE id_commende = {$id_commende}";
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