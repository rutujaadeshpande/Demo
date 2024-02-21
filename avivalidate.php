<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration1');

$hallname = $_POST['hallname'];
$date = $_POST['date'];

$s = "select * from function where hallname  = '$hallname' && date = '$date'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "on this date the function hall is already booked! please book for another date";
}
else{
   
    echo"The function hall is avilable for this date you can book now";
    header('location:book.php');
}


?>






























