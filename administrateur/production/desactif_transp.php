<?php
require_once 'session.php'; 
	
if($_GET) {
	$Id_Transporteur=$_GET['Id_Transporteur'];
$sql="update transporteur set Etat_compte=1 where Id_Transporteur='$Id_Transporteur' and Etat_compte=0 ";

if($connect->query($sql) === TRUE) {
		


	echo '<script language="javascript"> 
	alert("Compte Desactiver");
	window.location="gestion_transporteur.php";
	</script>';
}
else
{
	echo "erreur.".$sql.''.$connect->connect_error;
}
$connect->close();
}
?>
