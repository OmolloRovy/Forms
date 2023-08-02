<?php
$link= msqli_connect ("localhost","root","","");
if($link===false){
  die("EROR: Couldn't connect".conn_eror());
}
else{

  echo"connection succesfull".get_host_ìnfo();
}
mysqli_close($link)
?>
$link = mysqli_connenct("localhost","root","","reder");
if($link===false){
die("EROR: couldn't connect".conn_error());
}
else{
echo"Connection successful ". get_host_info();
}
$sql= "CREATE DATABASE reder";
$link = mysqli_connenct("localhost","root","","reder");
if($link===false){
die("EROR: couldn't create database".conn_error());
}
else{
echo"Database created successfully ". get_host_info();
}
$sql1="Use DATABASE reder";
$sql2="Create Table Names......";
$sql3="INSERT INTO Names Values (.......);
mysqli_close($link);
