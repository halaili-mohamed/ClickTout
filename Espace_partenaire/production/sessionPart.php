<?php 
session_start();

if (isset($_SESSION["id_partenaire"])){
$id_partenaire=$_SESSION["id_partenaire"];}
else{
	
header("location:../../");	
}

?>