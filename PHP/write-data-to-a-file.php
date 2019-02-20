<?php
$file = "note.txt";
    
// String of data to be written
$data = "The quick brown fox jumps over the lazy dog.";
    
// Open the file for writing
$handle = fopen($file, "w") or die("ERROR: Cannot open the file");
    
// Write data to the file
fwrite($handle, $data) or die ("ERROR: Cannot write the file");
    
// Closing the file handle
fclose($handle);
    
echo "Data written to the file successfully";
?>