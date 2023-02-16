<?php 
$servername='localhost';
$username='root';
$password='';
$dbname = "hospital_registration";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

?>
