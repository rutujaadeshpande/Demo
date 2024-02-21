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

    $request = "insert into functionhall(hallname, fname, lname, email, phone, address, date) values('$hallname', '$fname', '$lname', '$email', '$phone', '$address', '$date')";
   

    mysqli_query($connection, $request);
    
    header('location:next.php');
    
   
}else{
        echo 'something went wrong try again';
}
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


    $s = "select * from functionhall where hallname = '$hallname' && date = '$date'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    elseif($num == 1){
        echo "on this date the function hall is already booked! please book for another date";
    }
    else{
        
        echo"The function hall is avilable for this date you can book now";
   

        $request = "insert into functionhall(hallname, fname, lname, email, phone, address, date) values('$hallname', '$fname', '$lname', '$email', '$phone', '$address', '$date')";
   

        mysqli_query($connection, $request);
    
        header('location:next.php');
    
    }
}else{
        echo 'something went wrong try again';
}



















?>