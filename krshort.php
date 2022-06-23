<?php
$arr=array("KirtiVardhan Ajmani"=> 18,"SINGH"=>22,"ASHIN"=>3);
krsort($arr);
foreach($arr as $key =>$value)
{
    echo"Favourite color of $key is $value";
    echo"<br>";
}
?>