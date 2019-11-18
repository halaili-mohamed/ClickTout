<?php 

 require_once 'connect.php';

if($_GET) {
	$num = $_GET['num'];


	$sql= "SELECT Adresse_depart,Adresse_arrive,Date,Heure,n_cmd,prix,etatCmd FROM commende where n_cmd = $num";
	
	$result = $connect->query($sql);
			
	if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo " <table>
					<tr><td><b><b>Votre numéro de commande: </b></td><td> </td>	<td>".$row['n_cmd']."</td></tr>
					<tr><td><b><b>Votre Adresse de départ:</b> </td><td> </td>	<td>".$row['Adresse_depart']."</td></tr>
					<tr><td><b><b>Votre destination:</b> </td><td> </td>	<td>".$row['Adresse_arrive']."</td></tr>
					<tr><td><b><b>Date:</b> </td><td> </td>		<td>".$row['Date']."</td></tr>
					<tr><td><b><b>Heure:</b> </td><td> </td>	<td>".$row['Heure']."</td></tr>
					<tr><td><b><b>Prix:</b> </td><td> </td>	<td>".$row['prix']."</td></tr>
					<tr><td><b><b>l'état de votre commande:</b> </td><td> </td>	<td>";if ($row['etatCmd']==1) { echo '
						  <span class="label label-default">Chargée</span> '; } elseif ($row['etatCmd']==2) {
						  echo '<span class="label label-info">Montée à bord</span>';} elseif ($row['etatCmd']==3) {
						  echo '<span class="label label-info">Déchargée</span>';}  elseif ($row['etatCmd']==4) {
						  echo '<span class="label label-info">Annulée</span>';}elseif($row['etatCmd']==0) {
						  echo '<span class="label label-success">Commandée</span> ';}elseif($row['etatCmd']== -1 ) {
						  echo '<span class="label label-primary">Acceptée </span> ';} "</td></tr>
						
					</tr></table>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}

	$connect->close();
}

?>

	