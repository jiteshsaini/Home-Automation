<!--
Project: Rpibox
Created by: Jitesh Saini
-->
<?php
//ini_set("display_errors", 1);

$pin = $_POST["pin"];
$state = $_POST["state"];
system("gpio -g write $pin $state");

echo"pin: \" $pin \"<br>state: \" $state \"<br>";


?>
