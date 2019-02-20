<?php
$file = "note.txt";
    
// String of data to be written
$data = "The quick brown fox jumps over the lazy dog.";
    
// Write data to the file
file_put_contents($file, $data) or die("ERROR: Cannot write the file");
    
echo "Data written to the file successfully";
?>