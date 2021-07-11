<?php

$server= "sql312.epizy.com";
$user= "epiz_29083707";
$password = "iVoqidLbLvONSu";
$db = "epiz_29083707_coronacases";

$con = mysqli_connect($server, $user, $password, $db);
if(!$con){
die("connection failed:".mysqli_connect_error());

}
?>