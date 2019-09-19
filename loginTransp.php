
<?php 
 require_once 'connect.php';


if ($_POST) {


		$psudo1=$_POST['psudo1'];
		$PWD1=$_POST['PWD1'];

		
		$query1= "select * from transporteur where psudo='$psudo1' AND PWD='$PWD1'  ";
	    
	    $result1= mysqli_query($connect,$query1);

	    if (mysqli_num_rows($result1) ==1) {
	    	
	    	header("location:conPar1.php");
	    }else
	    {
	    	header("location:index.php");

	    }

  $connect->close();
	}
 ?>