<?php 

require_once 'db_connect.php';

if($_POST) {
	$Adresse_depart = $_POST['Adresse_depart'];
	$Date = $_POST['Date'];
	$Adresse_arrive = $_POST['Adresse_arrive'];
	$Heure = $_POST['Heure'];
	$type_voiture = $_POST['type_voiture'];
	$nb_ouvruer = $_POST['nb_ouvruer'];
	$nb_place_dispo = $_POST['nb_place_dispo'];
	$n_facture = $_POST['n_facture'];
	$Nom = $_POST['Nom'];
	$Prenom = $_POST['Prenom'];
	$telClient= $_POST['telClient'];
	$Email = $_POST['Email'];
	$id_partenaire=$_POST['id_partenaire'];
	

	$sql = "INSERT INTO client (Nom, Prenom, telClient, Email) VALUES ('$Nom', '$Prenom', '$telClient', '$Email')";
	$result1=$connect->query($sql);
	
	$sql1="SELECT * from client where telClient={$telClient} and Email='{$Email}'";	
	$result=$connect->query($sql1);
	$lig=mysqli_fetch_array($result);
	$id_client=$lig['id_client'];
	
	
	$n_cmd="c".$id_client;
	
	$sql3 = "INSERT INTO commende (Adresse_depart,Adresse_arrive,Date,Heure,type_voiture,nb_place_dispo,nb_ouvruer,typeClient,n_cmd,prix,n_facture,client_id_client,partenaire_id_partenaire,etatCmd)
	VALUES ('$Adresse_depart', '$Adresse_arrive', '$Date', '$Heure','$type_voiture','$nb_place_dispo','$nb_ouvruer','partenaire','$n_cmd',12,'$n_facture','$id_client','$id_partenaire',0)";
	if($connect->query($sql3) === TRUE) {
		echo  '<script language="javascript"> 
	
	window.location="formCmdPart.php";
	</script>';
	} else {
		echo "Error " . $sql3 . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>