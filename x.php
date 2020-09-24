<table border=2>
<?php 
$connect = new mysqli('localhost','root','','mysql'); 
$result = $connect->query("select * from car");
$i = 0; 
while ($object = $result->fetch_object()) {
  if ($i % 2) { $bg = "bgcolor = red"; } else {$bg = "bgcolor = green";}
  echo "<tr $bg><td>" . $i++ . "</td><td>";
  echo $object->f1 . $object->f2 .$object->f4 . $object->f4 . "<br/>" ;
  echo "</td></tr>";
  
} 
?>
</table>

