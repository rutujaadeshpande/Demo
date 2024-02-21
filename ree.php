<?php


$connection=mysqli_connect('localhost','root','','rigisterform');
if(isset($_POST['submit'])){
    $name=$_POST['user'];
    $password=$_POST['password'];
    $request="insert into regform(user,password,'$user','$password')";
    mysqli_query($connection,$request);
    header('location:layouttt.html');

}
else{
    echo 'something went wrong';
}



?>
