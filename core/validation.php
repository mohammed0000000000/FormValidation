<?php
function requiredInput($input){
    if(empty($input))
        return true;
    return false;
}

function minInput($input ,$length){
    return strlen($input) < $length;
}

function maxInput($input, $length){
    return strlen($input) > $length;
}


function emailInput($email){
    return (!filter_var($email, FILTER_VALIDATE_EMAIL));
}

function sameInput($value1, $value2){
    return $value1!=$value2;
}



?>