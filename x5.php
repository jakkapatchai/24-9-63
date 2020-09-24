<?php 
$connect = new mysqli('localhost','root','','mysql'); 
$result = $connect->query("update car set f2='boy' , f4='girl' where f1='2'"); 
?>

