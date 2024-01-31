<?php
session_start();

function sessionStores($key, $values){
    $_SESSION[$key] = $values;
}

function sessionGet($key){
    return $_SESSION[$key];
}

function removeSession($key){
    if(isset($_SESSION[$key]))unset($_SESSION[$key]);
}
?>