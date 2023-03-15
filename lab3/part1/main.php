<?php
session_start();
require_once("model/function.php");
$counter = new Counter();
$counter->increment_and_update();
echo $counter->get_count();

?>