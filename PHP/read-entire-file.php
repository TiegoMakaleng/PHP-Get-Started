<?php
$file = "data.txt";

// Open the file for reading
$handle = fopen($file, "r") or die("ERROR: Cannot open the file");

// Reading the entire file
$content = fread($handle, filesize($file));

// Closing the file handle
fclose($handle);

// Display the file content
echo $content;
?>