
<?php
require_once 'db_connect.php';

if($_POST) {
$id_admin = $_POST['id_admin'];
$nom = $_POST['nom'];
	$telephone=$_POST['telephone'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$pwd = $_POST['pwd'];


$sql="update administrateur set nom='$nom',telephone='$telephone', adresse='$adresse' ,email='$email',pwd='pwd' where id_admin='$id_admin'";

if($connect->query($sql) === TRUE) {
		
echo '<script language="javascript"> 
	alert("Modification effectuée avec succes.");
	window.location="profile.php";
	</script>';

}
else
{
	echo '<script language="javascript"> 
	alert("probleme modification !");
	window.location="profile.php";
	</script>';
}
$connect->close();
}
?>
