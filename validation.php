<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration1');

$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from usertable1 where email ='$email' && password='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    
   header('location:master.php');
}
else{
    header('location:login.php');
    echo '<script>alert("Please enter the correct password")</script>';
   
}


?>


