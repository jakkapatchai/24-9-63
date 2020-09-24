<?php 
$connect = new mysqli('localhost','root','','mysql'); 
$result = $connect->query("delete from car where f1='3' "); 
?>

