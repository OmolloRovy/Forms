<?php
/* Attempt MySQL server connection. Assuming you are running MySQL 
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
// Check connection
if($link === false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt create table query execution
$sql = "CREATE TABLE persons( id INT NOT NULL PRIMARY KEY 
AUTO_INCREMENT, first_name VARCHAR(30) NOT NULL, last_name
VARCHAR(30) NOT NULL, email VARCHAR(70) NOT NULL UNIQUE )";

$sql = "CREATE TABLE Products(Prod_ID INT NOT NULL PRIMARY KEY 
AUTO_INCREMENT, PROD_NAME VARCHAR(30) NOT NULL,AMOUNT INT NOT NULL,
 CUST_NAME VARCHAR(20) NOT NULL)";
if(mysqli_query($link, $sql))
{ echo "Table created successfully."; }
else{
echo "ERROR: Could not able to execute $sql. " .
mysqli_error($link);
}
