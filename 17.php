<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Kirtivardhan ajmani\n";
fwrite($myfile, $txt);
$txt ="Kirtivardhan ajmani\n";
fwrite($myfile, $txt);
fclose($myfile);
?>