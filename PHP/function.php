<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Function</title>
</head>
<body>

<?php
// Defining function
function whatIsToday(){
    echo "Today is " . date('l', mktime());
}
// Calling function
whatIsToday();
?>

</body>
</html>