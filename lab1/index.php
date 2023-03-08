<?php
require_once("config.php");
require_once("function.php");

$error = "";
if(!empty($_POST)) {

    if(empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["message"])){
        $error = "empty fields";
    }else if(empty($_POST["name"]) && empty($_POST["email"])){
        $error = "empty name and email";
    }else if(empty($_POST["email"]) && empty($_POST["message"])){
        $error = "empty email and message";
    }else if(empty($_POST["name"]) && empty($_POST["message"])){
        $error = "empty name and message";
    }else if(empty($_POST["name"])){
        $error = "empty name";
    }else if(empty($_POST["email"])){
        $error = "empty email";
    }else if(empty($_POST["message"])){
        $error = "empty messgae";
    }else if(strlen($_POST["name"])>MAX_NAME_LENGTH){
        $error = "Name must be less than 100 charachters";
    }else if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $error = "Email is unvalid";
    }else if(strlen($_POST["message"])>MAX_MESSAGE_LENGTH){
        $error = "message must be less than 255 charachters";
    }else{
        $error = "<h3>". WELCOME_MSG ."</h3> </br></br>
                  <span>Name: </span>" .$_POST["name"] . "</br>".
                  "<span>Email: </span>" .$_POST["email"] . "</br>".
                  "<span>Message: </span>" .$_POST["message"];
        die($error);
    }
        
    }
    

    require_once("view/form.php");

?>