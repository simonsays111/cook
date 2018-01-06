<?php
function Connect()
{
$server = "sql210.byethost16.com";
$user = "b16_21347765";
$pass = "mta2018";
$dbname = "b16_21347765_responses";

//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 return $conn;
}
?>