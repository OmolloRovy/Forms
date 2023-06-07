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
/* Attempt MySQL server connection. Assuming you are running 
MySQL server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "","Php_connection");
// Check connection
if($link === false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt create database query execution
$sql = "CREATE DATABASE Forms1";
if(mysqli_query($link, $sql))
{
echo "Database created successfully";
} else
{ echo "ERROR: Could not able to execute $sql. " .
mysqli_error($link);
}

?>
