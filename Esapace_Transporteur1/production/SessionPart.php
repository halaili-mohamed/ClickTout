<?php 
session_start();
if (isset($_SESSION["id_Transporteur"])){
$id_Transporteur=$_SESSION["id_Transporteur"];}
else{
	
header("location:login.php");	
}
?>