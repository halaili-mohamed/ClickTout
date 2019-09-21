 <?php
 require_once 'db_connect.php';   
  
$login=$_POST["login"];
$pwd=$_POST["pwd"];



$sql = "SELECT * FROM administrateur where login='$login' and pwd='$pwd'";
$result = $connect->query($sql);
$row = $result->fetch_assoc(); 
if($result->num_rows ==0)
{


	echo '<script language="javascript"> 

	alert("Utilisateur ou bien mot de passe incorrect !");
	
	
	</script>';
}
else
{
	
	
	session_start();
	
	$ligne=$row["id_admin"];
	
		$_SESSION["id_admin"]=$ligne;
		
		header("location:gestion_transporteur.php");
	
}



	
	
	
	
	


?>