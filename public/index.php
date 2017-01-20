<?php

$myfile = fopen("logs.txt", "a") or die("Unable to open file!");
$txt = file_get_contents('php://input'); 
fwrite($myfile, "\n". $txt);
fclose($myfile);
