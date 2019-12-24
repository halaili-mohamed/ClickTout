
<?php 
 require_once 'connect.php';


$psudo=$_POST["psudo"];
$pwd=$_POST["PWD"];


$sql = "SELECT * FROM partenaire where psudo='$psudo' and pwd='$pwd'";
$result = $connect->query($sql);
$row = $result->fetch_assoc(); 
if($result->num_rows ==0)
{

	


	header("location:index.php");
}
else
{
	
	session_start();
	
	$ligne=$row["id_partenaire"];
	
		$_SESSION["id_partenaire"]=$ligne;
		
			header("location:Espace_partenaire/production/listCMDPart.php");
	
}


	
	

	
 ?>