<?php
$users = convert_file_to_array();
$key = array("Visit Date","ID" ,"Name", "Email");
foreach($users as $user){
  $i = 0;
    $user_details = explode(",",$user);
      echo "New User <br/>";
      echo str_repeat("-", 50);
        echo "<Div>";
    foreach($user_details as $value ){
      echo "<h3> $key[$i]:  $value </h3>";
      $i++;
    }
      echo "</div>";
}
?>