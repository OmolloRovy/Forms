<?php
$link= msqli_connect ("localhost","root","","trail");
if($link===false){
  die("EROR: Couldn't connect".conn_eror());
}
else{

  echo"connection succesfull".get_host_ìnfo();
}
mysqli_close($link)
