<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE persons(person_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, first_name CHAR(30) NOT NULL, last_name CHAR(30) NOT NULL, email_address VARCHAR(50))";
if (mysqli_query($link, $sql)){
    echo "Table persons created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>