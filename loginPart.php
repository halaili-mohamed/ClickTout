
<?php 
 require_once 'connect.php';

	if ($_POST) {
	

		$psudo=$_POST['psudo'];
		$PWD=$_POST['PWD'];
		
		$query= "select * from partenaire where psudo='$psudo' AND PWD='$PWD'  ";
		
	    $result= mysqli_query($connect,$query);
	  

	    if (mysqli_num_rows($result) ==1) {
	    	
	    	header("location:conPar.php");
	   
	    }else
	    {
	    	
	    	header("location:index.php");
	    }

$connect->close();

	}
 ?>