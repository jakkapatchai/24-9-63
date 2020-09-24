<?php 
$connect = new mysqli('localhost','root','','mysql'); 
$q = "delete from car where f1='".$_GET['a']."'";
$result = $connect->query($q);
header("location: del.htm"); 
?>

