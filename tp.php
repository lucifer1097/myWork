<?php
//echo "today is " .  date("Y/d/m");
$file=fopen("tre.txt","r");
echo fread($file,filesize("tre.txt"));
fclose($file);
?>