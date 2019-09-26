<?php
require_once 'session.php'; 
$id_admin=$_GET["id_admin"];

$sql="delete from administrateur where id_admin=$id_admin";
if($connect->query($sql) === TRUE)
{
echo '<script language="javascript"> 
	alert("suppression effectuee avec succes.");
	window.location="profile.php";
	</script>';

}
else
{
		echo '<script language="javascript"> 
	alert("probleme de suppression !");
	window.location="profile.php";
	</script>';
}
$connect->close();

?>