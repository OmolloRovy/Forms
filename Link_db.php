<?php
$link= msqli_connect ("localhost","root","","first");
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
mysqli_close($link);
