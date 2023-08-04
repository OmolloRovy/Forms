<?php
 /* Attempt MySQL server connection. Assuming you are running 
MySQL server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root","", "Php_connection");
// Check connection
if($link === false){ die("ERROR: Could not connect. " .
mysqli_connect_error());
}
      
// Print host information
//echo "Connect Successfully. Host info: ".
mysqli_get_host_info($link);

/*Attempt MySQL server connection. Assuming you are running 
MySQL server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "","Php_connection");
// Check connection
if($link === false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt create database query execution
$sql = "CREATE DATABASE Form";
if(mysqli_query($link, $sql))
{
echo "Database created successfully";
} else
{ echo "ERROR: Could not able to execute $sql. " .
mysqli_error($link);
}
// Close connection
mysqli_close($link);
//Registration form connection
if(isset($_POST['Username']) && isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['cPassword'])){
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $cPassword = $_POST['cPassword'];
}
// check if passwords march
if($Password!== $cPassword){
 
}
?>
