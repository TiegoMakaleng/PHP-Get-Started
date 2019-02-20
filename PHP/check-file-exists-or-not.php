<?php
if(file_exists("data.txt")){
    $file = fopen("data.txt", "r");
} else{
    die("Error: The file you are trying to access doesn't exist.");
}
?>