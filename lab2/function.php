<?php
  function validate_form($var){
    if(isset($_POST[$var]) && !empty($_POST[$var])){
      return $_POST[$var];
    }
  }
function validate_form_()
{
  $name = isset($_POST["name"]) ? $_POST["name"] : "";
  $email = isset($_POST["email"]) ? $_POST["email"] : "";
  if (empty($name) && empty($email)) {
    return "empty fields";
  } else if (empty($name) && empty($email)) {
    return "empty name and email";
  } else if (empty($name)) {
    return "empty name";
  } else if (empty($email)) {
    return "empty email";
  } else if (strlen($name) > MAX_NAME_LENGTH) {
    return "Name must be less than 100 characters";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return "Email is unvalid";
  } else {
    return "";
  }
}
function print_confirmation_page() {
  echo "<center><h2>" . WELCOME_MSG . "</H2></center>";
  echo str_repeat("-", 50);
  foreach ($_POST as $key => $value) {
      if ($key != "password") {
          $value = strtolower(trim($value));

          echo"<br/><strong> $key </strong> : $value";
      }
  }
}

  function save_to_file() {
    $fp = fopen(_Saving_File_, "a+");
    $written_string = implode(" , ", $_POST);
    $written_string_all=date("F j Y g:i a") ." , ". $_SERVER['REMOTE_ADDR'] ." , ". $written_string;
    fwrite($fp,  $written_string_all.PHP_EOL);
    fclose($fp);
}
function read_from_file() {
  $fp = fopen(_Saving_File_, "r+");
  $readed_string = fread($fp, filesize(_Saving_File_));
  fclose($fp);
  return $readed_string;
}
function convert_file_to_array() {
  //  file();
  $array = explode("\n", file_get_contents(_Saving_File_));
  return $array;
}

  ?>