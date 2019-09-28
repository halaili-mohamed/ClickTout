
<?php 
 require_once 'connect.php';


if ($_POST) {


		$psudo1=$_POST['psudo1'];
		$PWD1=$_POST['PWD1'];

		
		$query1= "select * from transporteur where email='$psudo1' AND PWD='$PWD1' AND etat=1  ";
	    
	    $result1= mysqli_query($connect,$query1);

	    if (mysqli_num_rows($result1) ==1) {
	    	
	    	session_start();
	
	$ligne=$row["Id_Transporteur"];
	
		$_SESSION["Id_Transporteur"]=$ligne;

	    	header("location:conPar1.php");
	    }else
	    {
	    	header("location:index.php");

	    }

  $connect->close();
	}
 ?>