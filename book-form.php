<?php

$connection = mysqli_connect('localhost','root','','userregistration1');

if(isset($_POST['send'])){
    $hallname = $_POST['hallname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $date = $_POST['date'];

    $request = "insert into function(hallname, fname, lname, email, phone, address, date) values('$hallname', '$fname', '$lname', '$email', '$phone', '$address', '$date')";
    
    mysqli_query($connection, $request);

    header('location:next.php');   
}
else{
    echo 'something went wrong try again';
}

?>