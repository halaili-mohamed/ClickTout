
<?php
require_once 'session.php'; 
if($_POST) {
	$id_partenaire=$_POST['id_partenaire'];
	$nom_ste = $_POST['nom_ste'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$psudo = $_POST['psudo'];
	$pwd = $_POST['pwd'];
	$tel = $_POST['tel'];
	$responsable = $_POST['responsable'];
	


$sql="update partenaire set nom_ste='$nom_ste', responsable='$responsable',tel='$tel',email='$email',adresse='$adresse',psudo='$psudo' ,pwd='$pwd' where id_partenaire='$id_partenaire'";

if($connect->query($sql) === TRUE) {
		

	echo '<script language="javascript"> 
	alert("Modification effectuée avec succes. !");
	window.location="gestion_partenaire.php";
	</script>';
}
else
{
	echo '<script language="javascript"> 
	alert("Erreur.");
	window.location="gestion_partenaire.php";
	</script>';
}
$connect->close();
}
?>
