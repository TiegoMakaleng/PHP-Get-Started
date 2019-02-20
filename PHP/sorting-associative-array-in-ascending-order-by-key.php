<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sorting PHP Associative Array in Ascending Order by Key</title>
</head>
<body>

<?php
// Define array
$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
 
// Sorting array by value and print
ksort($age);
print_r($age);
?>

</body>
</html>