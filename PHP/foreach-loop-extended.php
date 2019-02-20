<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP foreach Loop</title>
</head>
<body>

<?php
$superhero = array(
    "name" => "Peter Parker",
    "email" => "peterparker@mail.com",
    "age" => 18
);
 
// Loop through superhero array
foreach($superhero as $key => $value){
    echo $key . " : " . $value . "<br>";
}
?>

</body>
</html>