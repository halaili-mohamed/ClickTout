<?php
 require_once 'db_connect.php';   
   $a=1;
$psudo=$_POST["psudo"];
$pwd=$_POST["pwd"];



$idcon=mysqli_connect("localhost","root","");

	
$req="select*from partenaire where psudo={$psudo} and pwd={$pwd}";
$res=connect->query($req);
$r=$res->fetch_assoc();

$nb=mysqli_num_rows($res);
if($nb==0)
{
	echo '<script language="javascript"> 
	alert("Utilisateur ou bien mot de passe incorrect !");
	window.location="login.php";
	</script>';
}
else
{
	$ligne=mysqli_fetch_array($res);
		$_SESSION["psudo"]=$ligne['psudo'];
		
		header("location:listCmdPart.php");
	
}
echo "correct";

	
	
	


?>