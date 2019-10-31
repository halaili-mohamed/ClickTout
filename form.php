<?php 

require_once 'connect.php';

if($_POST) {
	$Distance = $_POST['Distance'];
	
	$type_voiture = $_POST['type_voiture'];
	$nb_ouvruer = $_POST['nb_ouvruer'];
	$T_chargement = $_POST['T_chargement'];
	
	$Email = $_POST['Email'];
		

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