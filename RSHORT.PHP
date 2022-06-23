<?php
echo"KirtiVardhan Ajmani<br>";
$arr=array("Peter"=>"35","Ben"=>"37","joe"=>"43");
rsort($arr);
foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>