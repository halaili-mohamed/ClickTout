<?php 
require_once 'session.php'; 

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {


	
	
	
	
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo " ------------------------------- The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		if($_POST){
	$nom_ste = $_POST['nom_ste'];
	$responsable = $_POST['responsable'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$psudo = $_POST['nom_ste'].generateRandomString(5);
	$pwd = generateRandomString();
	
			$sql = "INSERT INTO partenaire (nom_ste, responsable,tel,email,adresse,psudo,pwd,logo) VALUES ('$nom_ste','$responsable','$tel','$email','$adresse','$psudo','$pwd','basename( $_FILES["fileToUpload"]["name"])')";
	if($connect->query($sql) === TRUE) {
		
		echo'<script language="javascript"> 
			alert("Successfully Connected");
			window.location="ajout_transporteur.php";
			
	        </script>';
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}
	
	
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}







	

	$connect->close();
}
?>