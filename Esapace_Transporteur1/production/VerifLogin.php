<?php
 require_once 'db_connect.php';   
$Pseudo=$_POST["Pseudo"];
$Password=$_POST["Password"];
$sql = "SELECT * FROM transporteur where Pseudo='$Pseudo' and Password='$Password'";
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
	
	$ligne=$row["id_Transporteur"];
	
		$_SESSION["id_Transporteur"]=$ligne;
		
		header("location:offre_disponible2.php");
	
}
	
	
	
?>