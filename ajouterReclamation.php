<?php
    require_once 'connect.php';

    if($_POST){

    $idCommande=$_POST['idCommande'];
    $msg=$_POST['msg'];
  

 
  $query= "INSERT INTO `reclamation` (`id_Reclamation`, `Message`, `type_compte`, `commende_id_commende`) VALUES (NULL,'$msg','','$idCommande')  ";
        $result= mysqli_query($connect,$query);

      
      	if($connect->query($query) === TRUE) {
		echo "<p>New Record Successfully Created</p>";
		
	} else {
		echo "Error " . $query . ' ' . $connect->connect_error;
	}

      
   $connect->close();

   }
    
?>