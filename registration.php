<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration1');
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];


$s = "select * from usertable1 where email ='$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){

    header('location:login.php');
    $alert ="<script>alert('Email is already taken');</script>";
    echo $alert;
    
}
else{
    $reg = "insert into  usertable1(name , email , password ) values('$name' , '$email' , '$pass')";
    mysqli_query($con, $reg);
    header("location:master.php");
    $alert ="<script>alert('You have registered successfully');</script>";
    echo $alert;



   
}


?>


