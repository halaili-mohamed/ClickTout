
<?php 
 require_once 'connect.php';


$psudo1=$_POST["psudo1"];
$pwd1=$_POST["PWD1"];


$sql = "SELECT * FROM transporteur where Pseudo='$psudo1' AND Password='$pwd1'  ";
$result = $connect->query($sql);
$row = $result->fetch_assoc(); 
if($result->num_rows ==0)
{

	


	header("location:index.php");
}
else
{
	
	session_start();
	
	$ligne=$row["Id_Transporteur"];
	echo($ligne);
		$_SESSION["id_Transporteur"]=$ligne;
		
			header("location:Esapace_Transporteur1/production/offre_disponible2.php");
	
}




















 ?>