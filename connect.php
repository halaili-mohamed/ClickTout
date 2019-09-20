<?php 


$connect = mysqli_connect("localhost","root","","click_tout_bd");

// check connection
if($connect->connect_error) {
	die("connection failed : " . $connect->connect_error);
} else {
	// echo "Successfully Connected";
}

?>