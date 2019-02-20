<?php
function calcDivision($dividend, $divisor){
    if ($divisor == 0){
        trigger_error("calcDivision(): The divisor cannot be zero", E_USER_WARNING);
        return false;
    } else{
        return($dividend / $divisor);
    }
}
function customError($errno, $errstr, $errfile, $errline, $errcontext){
    $message = date("Y-m-d H:i:s - ");
    $message .= "Error: [" . $errno ."], " . "$errstr in $errfile on line $errline, ";
    $message .= "Variables:" . print_r($errcontext, true) . "\r\n";
    
    error_log($message, 1, "webmaster@example.com");
    die("There was a problem, please try again. Error report submitted to webmaster.");
}
set_error_handler("customError");
echo calcDivision(10, 0);
echo "This will never be printed.";
?>
