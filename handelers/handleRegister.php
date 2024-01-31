<?php

session_start();

include("../core/session.php");
include("../core/request.php");
include("../core/validation.php");



    if(postMethod()){
        foreach($_POST as $key => $value){
            $$key = recieveInput($value);
        }
        // validation
        if(requiredInput($name)){
            $errors [] = "Name Required";
        }else if(minInput($name, 3)){
            $errors [] = "Name Must be At The Least 4 chars";
        }
        else if(maxInput($name, 20)){
            $errors [] = "Name Must be Not Greather Than 20 chars";
        }

        if(requiredInput($email)){
            $errors [] = "Email Required"; 
        }
        else if(emailInput($email)){
            $errors [] = "Invalid Email";
        }

        if(requiredInput($password)){
            $errors [] = "Password Required";
        }
        else if(minInput($password, 8)){
            $errors [] = "Password Must be At The Least 8 chars";
        }
        else if(maxInput($password, 20)){
            $errors [] = "Password Must be Not Greather Than 20 chars";
        }

        if(requiredInput($confirm_password)){
            $errors [] = "Confirm Your Password";
        }
        else if(sameInput($password, $confirm_password));



        if(empty($errors)){
            $user_data = [
                'name' => $name,
                'email' => $email,
            ];
            sessionStores('user',$user_data);
            header("location:../profile.php");
        }
        else{
            sessionStores('errors',$errors);
            header("location:../register.php");
        }
    }
    

?>