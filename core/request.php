<?php

function getRequestType(){
    return $_SERVER['REQUEST_METHOD'];
}

function postMethod(){
    return getRequestType() == "POST";
}

function recieveInput($input){
    return trim(htmlentities(htmlspecialchars($input)));
}

?>