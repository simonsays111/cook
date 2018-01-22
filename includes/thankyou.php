<?php
require 'connection.php';
$conn    = Connect();


$f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
$l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
$u_email = mysqli_real_escape_string($conn, $_POST['u_email']);
$u_name = mysqli_real_escape_string($conn, $_POST['language']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$time = mysqli_real_escape_string($conn, $_POST['time']);
$place = mysqli_real_escape_string($conn, $_POST['place']);

 
$sql = "INSERT INTO tb_cform (f_name, l_name, u_email,language,gender,date,time,place) VALUES ('$f_name', '$l_name', '$u_email','$language','$gender','$date','$time','$place')";
 
if($conn->query($sql) === TRUE){
 include 'thankyou.html';
}
else
{
 include 'failedForm.html';

}
$conn->close();
?>


