<?php
 require_once 'db_connect.php';   
$psudo=$_POST["psudo"];
$pwd=$_POST["pwd"];


$sql = "SELECT * FROM partenaire where psudo='$psudo' and pwd='$pwd'";
$result = $connect->query($sql);
$row = $result->fetch_assoc(); 
if($result->num_rows ==0)
{

	


	echo '<script language="javascript"> 
	alert("Utilisateur ou bien mot de passe incorrect !'.$nb.'");
	
	
	</script>';
}
else
{
	
	session_start();
	
	$ligne=$row["id_partenaire"];
	
		$_SESSION["id_partenaire"]=$ligne;
		
		header("location:listCmdPart.php");
	
}


	
	
	


?>