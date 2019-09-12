<?php 

require_once 'db_connect.php';

if($_POST) {
	$n_cmd = $_POST['n_cmd'];
	$Message = $_POST['Message'];
	
	$sql1="SELECT id_commende FROM commende where n_cmd={$n_cmd}";
	$result = $connect->query($sql1);
	$row = $result->fetch_assoc();
	$commende_id_commende=$row['id_commende'];

	$sql = "INSERT INTO reclamation (Message, type_compte, commende_id_commende) VALUES ('$Message', 'Partenaire', '$commende_id_commende')";
	if($connect->query($sql) === TRUE) {
		
		echo'<script language="javascript"> 
			alert("Successfully Connected");
			window.location="reclamationPart.php";
	        </script>';
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>