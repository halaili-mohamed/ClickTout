<?php 

require_once 'db_connect.php';

if($_POST) {


	$id_commende = $_POST['id_commende'];

	$sql  = "UPDATE commende SET etatCmd = 4  WHERE id_commende = {$id_commende}";
	if($connect->query($sql) === TRUE) {
		echo '<script language="javascript"> 
	alert("success");
	window.location="listCmdPart.php";
	</script>';
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();

}

?>