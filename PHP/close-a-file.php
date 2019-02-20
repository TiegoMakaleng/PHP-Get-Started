<?php
$file = "data.txt";

// Open the file for reading
$handle = fopen($file, "r") or die("ERROR: Cannot open the file");

// Some code to be executed

// Closing the file handle
fclose($handle);
?>