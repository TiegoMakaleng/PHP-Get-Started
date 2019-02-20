<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Get Future Date</title>
</head>
<body>

<?php
// Return future date
$futureDate = mktime(0,0,0,date("m")+30,date("d"),date("Y"));
echo date("d/m/Y", $futureDate);
?>

</body>
</html>