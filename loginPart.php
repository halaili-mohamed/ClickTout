
<?php 
 require_once 'connect.php';

	if ($_POST) {
	

		$psudo=$_POST['psudo'];
		$PWD=$_POST['PWD'];
		
		$query= "select * from partenaire where email='$psudo' AND PWD='$PWD' AND etat=1 ";
		
	    $result= mysqli_query($connect,$query);
	  

	    if (mysqli_num_rows($result) ==1) {
	    	
	    	
	session_start();
	
	$ligne=$row["id_partenaire"];
	
		$_SESSION["id_partenaire"]=$ligne;
	    	header("location:conPar.php");
	   
	    }else
	    {
	    	
	    	header("location:index.php");
	    }

$connect->close();

	}
 ?>