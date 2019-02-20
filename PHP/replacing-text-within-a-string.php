<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Replacing Text within a String</title>
</head>
<body>

<?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Display replaced string
echo str_replace("facts", "truth", $my_str);
?>

</body>
</html>