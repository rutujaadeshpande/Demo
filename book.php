<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>templates</title>
    <link rel="stylesheet" href="master.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" 
integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" 
crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />">

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>


</head>
<body>



    <!--this is header section-->
    <section class="header">
    <a href="login.php" class="logo">Logout</a>
        <nav class="navbar">            
            <a href="master.php" >Home</a>
            <a href="about.php">About us</a>
            <a href="template.php">Templates</a>
            <a href="available.php">book now</a>
           
        </nav>


        <div id="menu-btn" class="fas fa-bars"></div>

    </section>


    <!--avialable section-->



    <!--header section ends here-->

    <div class="heading" style="background:url(Image/img9.jpg) no-repeat">
        <h1>book now</h1>
    </div>

    <!--booking section starts here-->

    <section class="booking">
        <!-- <h3 style="text-align:center">The function hall is avilable for this date you can book now</h3>-->

        <h1 class="heading-title">book your wedding hall</h1>
        

        <form action="book-form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span for="hallname">Hall Name:</span>
                    <select id="hallname" name="hallname">
                        <option value="B. K. D. B.">B. K. D. B.</option>
                        <option value="Sabha bhavan">Sabha Bhavan</option>
                        <option value="Mamu Function Hall">Mamu Function Hall</option>
                        <option value="Kalyan Mantapam">Kalyan Mantapam</option>
                        <option value="Varsha Palace">Varsha Palace</option>
                        <option value="Crystal Function Hall">Crystal Function Hall</option>
                        <option value="Yatri Bhavan">Yatri Bhavan</option>
                        <option value="Shubhamangal Function Hall">Shubhamangal Function Hall</option>
                        <option value="Banashankari Function Hall">Banashankari Function Hall</option>
                
                    </select>
                </div>

                <div class="inputBox">
                    <span>First Name:</span>
                    <input type="text" placeholder="enter here" name="fname" required>
                </div>

                <div class="inputBox">
                    <span>Last Name:</span>
                    <input type="text" placeholder="enter here" name="lname" required>
                </div>

                <div class="inputBox">
                    <span>email:</span>
                    <input type="email" placeholder="enter here" name="email" required>
                </div>
 
                <div class="inputBox">
                    <span>phone:</span>
                    <input type="number" placeholder="enter here" name="phone" required>
                </div>

                <div class="inputBox">
                    <span>address:</span>
                    <input type="text" placeholder="enter here" name="address" required>
                </div>

                <div class="inputBox">
                    <span>date:</span>
                    <input type="date" placeholder="enter here" name="date" required>
                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>


    </section>


    <!--booking section ends here-->










     <!--this is footer-->

     <section class="footer">

<div class="box-container">

    <div class="box">
        <h3>Quick Acess</h3>
        <a href="master.php" > <i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About us</a>
        <a href="template.ph"><i class="fas fa-angle-right"></i>Templates</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book now</a>
    </div>

    <div class="box">
        <h3>extra links</h3>
        <a href="#" ><i class="fas fa-angle-right"> </i>ask question</a>
        <a href="#"><i class="fas fa-angle-right"></i> about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>

    </div>


    <div class="box">
        <h3>Contact info</h3>
        <a href="#" ><i class="fas fa-phone"> </i>+123-456-7890</a>
        <a href="#"><i class="fas fa-phone"> </i>+123-456-7890</a>
        <a href="#"><i class="fas fa-envelope"> </i>admin@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Basavakalyan, India - 585327</a>

    </div>

    <div class="box">
        <h3>Follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
    
    
    </div>

</div>

<div class="credit">created by<span> mr. web designer</span> | all rights are reserved!</div>

</section>





    <script src="master.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>



<!--
    echo '<script>alert("on this date the function hall is already booked! please book for another date")</script>';
echo '<script>alert("The function hall is avilable for this date you can book now")</script>';
    header('location:book.php');
-->