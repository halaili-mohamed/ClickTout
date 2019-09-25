<?php
require_once 'session.php'; 
	
if($_POST) {
	$Id_Transporteur=$_POST['Id_Transporteur'];
$sql="update transporteur set Etat_compte=1 where Id_Transporteur='$Id_Transporteur and Etat_compte=0 '";

if($connect->query($sql) === TRUE) {
		

	echo '<script language="javascript"> 
	alert("Erreur!");
	window.location="gestion_transporteur.php";
	</script>';
}
else
{
	echo '<script language="javascript"> 
	alert("Compte Desactiver");
	window.location="gestion_transporteur.php";
	</script>';
}
$connect->close();
}
?>
