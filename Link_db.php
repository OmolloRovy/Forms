<?php
$link= msqli_connect ("localhost","root","","dbtrail");
if($link===false){
  die("EROR: Couldn't connect".conn_eror());
}
