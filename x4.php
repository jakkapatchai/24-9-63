<?php 
$connect = new mysqli('localhost','root','','mysql'); 
$result = $connect->query("insert into car (f1,f2) values('14','tom')"); 
?>

