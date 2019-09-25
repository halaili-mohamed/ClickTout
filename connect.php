<?php 


$connect = mysqli_connect("localhost","root","","click_tout");

// check connection
if($connect->connect_error) {
	die("connection failed : " . $connect->connect_error);
} else {
	// echo "Successfully Connected";
}

?>