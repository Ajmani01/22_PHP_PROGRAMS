<?php
print_r("KirtiVardhan Ajmani<br/>");
$arr=array(1=>"hello",2=>"hey",3=>"hii",4=>"fine",5=>"KirtiVardhan Ajmani");
$s1=array_splice($arr,2,2,"true");
$ic=array_splice($arr,2);
print_r($s1);
print_r($ic);
?>