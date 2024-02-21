<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="master.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" 
    integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" 
    crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    
  
</head>
<body>

    <!--this is header section-->
    <section class="header">
    <a href="login.php" class="logo">Logout</a>
    

        <nav class="navbar">            
            <a href="master.php" >Home</a>
            <a href="about.php">About us</a>
            <a href="template.php">Packages</a>
            <a href="available.php">book now</a>
           
        </nav>


        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!--header section ends here-->

    <!-- home section starts here -->

    <section class="home">
                       
        <div class="swiper-slide slide" style="background:url(Image/back.jpg) no-repeat">
                    
            <div class="content">
                 
                <span>Explore, preview and book</span>
                <h3>asdg</h3>                
            </div>

        </div>

               
    </section>
    <!-- home section ends here --> 
    
   
    <!--home about section starts here-->
    <section class="home-about">
        <div class="image">
        <div class="myimg" style="max-width:500px; padding-top:40px";>
                <img class="mySlides w3-animate-top" src="Image\wed.jpg" style="width:100%">        
                <img class="mySlides w3-animate-bottom" src="https://i.pinimg.com/originals/35/15/4f/35154fbf8ad85d1901d3cc94e9feed81.jpg" style="width:100%">        
                <img class="mySlides w3-animate-top" src="https://nubride.com/wp-content/uploads/2014/06/charlotte-indian-wedding-photographer-ballantyne-nc-020.jpg" style="width:100%">        
            
                <img class="mySlides w3-animate-bottom" src="https://i.pinimg.com/originals/0c/73/8b/0c738be3ce7b715f8b9aa1933df167aa.png" style="width:100%">        
        
            
        </div>    
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>We are a small family owned operation that takes joy in offering our venue to be used as your own. Our location is available for rent 365 days a year. Just like our website, we make thinks easy and simple. Profits come last, so we invest in upgrading our venues and adding new features every year. </p><br>
                <a href="about.php" class="btn">read more</a>
        </div>
        <script>

                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for(i=0; i<x.length; i++){
                        x[i].style.display = "none";

                    }
                    myIndex++;
                    if(myIndex>x.length) {myIndex=1}
                    x[myIndex-1].style.display = "block";
                    setTimeout(carousel, 2000);
                }
            </script>

    </section>   



    <!--home template section starts here-->

    <section class="home-packages">  

            <h1 class="heading-title">Our Wedding Halls</h1>    
            <div class="box-container">



                <div class="box">
                    <div class="image">
                        <img src="Image/img1.jpg" alt="not exist">
                    </div>
                    
                    <div class="content">
                        <h3>BKDB</h1> 
                        <p>email:manager@gmail.com<br>address:Basveshwar Chowk, Basavakalyan.<br>rate:45000/day</P>
                        <br>
                        
                    </div>                    
                </div>
                
                
                <div class="box">
                    <div class="image">
                        <img src="Image/img7.jpg" alt="not exist">
                    </div>
                    
                    <div class="content">
                        <h3>Sabha Bhavan </h1> 
                        <p>email:manager@gmail.com<br>address:Basaveshwar Chowk,Basavakalyan.<br>rate:30000/day</P>
                        
                    </div>                    
                </div>

                

                <div class="box">
                    <div class="image">
                        <img src="Image/img3.jpg" alt="not exist">
                    </div>
                    
                    <div class="content">
                        <h3>Mamu Function Hall</h1> 
                        <p>email:manager@gmail.com<br>address:gandhi circle, Basavakalyan.<br>rate:35000/day</P>
                       
                    </div>                    
                </div>


            </div>
           
            <div class="load-more"><a href="template.php" class="btn">load more</a></div>
        
            
        

        
    </section>



    <!--header template section ends here-->
    

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


    <!--this is end of footer-->
    

    <script src="master.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</body>

</html>