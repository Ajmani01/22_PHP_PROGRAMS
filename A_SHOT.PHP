<?php
$age=array("Peter"=>"35","Ben"=>"37","joe"=>"43");
asort($age);
$id=array("SINGH"=>"10","ASHIN"=>"5","KirtiVardhan Ajmani"=>"25");
asort($id);

foreach($id as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>