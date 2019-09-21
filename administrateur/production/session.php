 <?php
 require_once 'db_connect.php';
session_start();
if (isset($_SESSION["id_admin"])){
$id_admin=$_SESSION["id_admin"];}
else{
header("location:login.php");	
}
?>