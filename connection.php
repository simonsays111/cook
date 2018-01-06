<?php
$server = "sql210.byethost16.com";
$user = "b16_21347765";
$pass = "mta2018";
$dbname = "b16_21347765_responses";

//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
$l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
$u_email = mysqli_real_escape_string($conn, $_POST['u_email']);
$u_name = mysqli_real_escape_string($conn, $_POST['u_name']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$time = mysqli_real_escape_string($conn, $_POST['time']);
$place = mysqli_real_escape_string($conn, $_POST['place']);

 
$sql = "INSERT INTO tb_cform (f_name, l_name, u_email,u_name,gender,date,time,place) VALUES ('$f_name', '$l_name', '$u_email','$u_name','$gender','$date','$time','$place')";
 
if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>