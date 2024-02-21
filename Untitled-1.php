<?php
$connection=mysqli_connect('localhost','root','','rigisterform');
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $request="insert into regform(name,password,'$name','$password');
    mysqli_query($connection,$request);
    header('location:layouttt.html');

}else{
    echo 'something went wrong';
}

?>
