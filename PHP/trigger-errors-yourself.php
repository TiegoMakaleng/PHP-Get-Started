<?php
function calcDivision($dividend, $divisor){
    if($divisor == 0){
        trigger_error("The divisor cannot be zero", E_USER_WARNING);
        return false;
    } else{
        return($dividend / $divisor);
    }
}
 
// Calling the function
echo calcDivision(10, 0);
?>