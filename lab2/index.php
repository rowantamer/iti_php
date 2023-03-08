<?php
require_once("config.php");
require_once("function.php");

$error = "";
if(!empty($_POST)) {
    $error= validate_form_();
    if(empty($error)) {
        save_to_file();
        print_confirmation_page();
        exit();
    }
    }
    $parameter = isset($_GET["page"]) ? $_GET["page"] : "";
    if ($parameter === "contact")
        require_once("views/form.php"); /*?page=contact*/
    else
        require_once("views/users.php");
?>