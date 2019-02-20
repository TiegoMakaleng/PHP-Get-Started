<?php
$file = "data.txt";
    
// Reading the entire file into an array
$arr = file($file) or die("ERROR: Cannot open the file");
foreach($arr as $line){
    echo $line;
}
?>