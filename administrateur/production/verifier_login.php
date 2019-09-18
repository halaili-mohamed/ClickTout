<?php
/*session_start();
$_SESSION["typeC"]='';*/

require_once 'db_connect.php'; 

$email=$_POST["email"];
$pwd=$_POST["pwd"];


$sql = "SELECT * FROM administrateur where email='$email' and pwd='$pwd'";
$result = $connect->query($sql);
$row = $result->fetch_assoc(); 
if($result->num_rows ==0)
{
	echo '<script language="javascript"> 
	alert("Login  ou bien mot de passe incorrect !");
	window.location="login.php";
	</script>';
}
else
{
echo '<script language="javascript"> 
	alert("Connecter !");
	window.location="profile.php";
	</script>';
}
	/*$ligne=mysqli_fetch_array($res);
	if($ligne["typeC"]=="admin")
	{
		$_SESSION["typeC"]="admin";
		header("location:admin.php");
	}
	else
	{
		$_SESSION["typeC"]="user";
		header("location:user.php");
	}
}
echo "correct";

	
	
	
}
else
echo "probleme de connexion !!";*/

?>
</body>
</html>
