<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Resources</title>
</head>
<body>

<?php
// Open a file for reading
$handle = fopen("note.txt", "r");
var_dump($handle);
?>

</body>
</html>