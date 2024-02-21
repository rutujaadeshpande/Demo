<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>




    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
</head>
<body>


<!-- for navigation bar button
<div id="menu-btn" class="fas fa-bars"></div>

line no.114
#menu-btn{
    font-size: 2.5rem;
    cursor: pointer;
    color:var(--black) ;
}

line no. 561
@media (max-width:1200px){
    section{
        padding:3rem 5%;
    }
}

@media (max-width:991px){
    html{
        font-size: 55%;
    }
    section{
        padding:3rem 2rem;
    }
    .home .slide .content h3{
        font-size: 10vh;
    }
}

@media (max-width:768px){

    .heading h1{
        font-size: 4rem;
    }

    #menu-btn{
        display: inline block;
        transition: .2s linear;
    }
    #menu-btn.fa-times{
        transform:rotate(180deg);
    }


    .header .navbar{
        position: absolute;
        top: 99%; left:0; right:0;
        background-color:var(--white);
        border-top: var(--border);
        padding: 2rem;
        transition: .2s linear;        
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    .header .navbar .active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }
    .header .navbar a{
        display: block;
        margin: 2rem;
        text-align: center;
    }
}

@media (max-width:450px){
    html{
        font-size: 50%;
    }
}



home slides photoes movement
line no 143


.home .slide .content{
    width: 85rem;
    display: none;
}
.home .swiper-slide-active .content{
    display: inline-block;
}

.home .slide .content span{
    display: block;
    font-size: 2.2rem;
    color: var(--light-white);
    padding-bottom: 1rem;
    animation: fadeIn .3s linear backwards .2s;
   
}
.home .slide .content h3{
    font-size: 6vw;
    color: var(--white);
    text-transform: uppercase;
    line-height: 1;
    text-shadow: var(--text-shadow);
    padding: 1rem 0;
    animation: fadeIn .3s linear backwards .2s;
}
.home .slide .content .btn{
    animation: fadeIn .3s linear backwards .6s;
}

.home .swiper-button-next,
.home .swiper-button-prev{
    top: inherit;
    left: inherit;
    bottom: 0;
    right: 0;
    height: 7rem;
    width: 7rem;
    background: var(--white);
    color: var(--black);
}
.home .swiper-button-next:hover,
.home .swiper-button-prev:hover{
    background: var(--main-color);
    color: var(--white);
}
.home .swiper-button-next::after,
.home .swiper-button-prev::after{
    font-size: 2rem;
}

.home .swiper-button-prev{
    right: 7rem;
}















master page photoes



    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">


                <div class="swiper-slide slide" style="background:url(Image/tech.jpg) no-repeat">
                    <div class="content">
                        <span>Enjoy, preview and book</span>
                        <h3>for Grand Weddings</h3>
                        <a href="package.php" class="btn">Look for more</a>
                    </div>
                </div>

               
        
    
                <div class="swiper-slide slide" style="background:url(Image/aa.jpg) no-repeat">
                    <div class="content">
                        <span>Enjoy, preview and book</span>
                        <h3>for Grand Weddings</h3>
                        <a href="package.php" class="btn">Look for more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(Image/back.jpg) no-repeat">
               
                    <div class="content">
                    <span>Enjoy, preview and book</span>
                        <h3>for Grand Weddings</h3>
                        <a href="package.php" class="btn">Look for more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>









var swiper = new swiper(".home-slider", {
  loop : true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});





    <section class="home">
        


               
        <div class="swiper-slide slide" style="background:url(Image/tech.jpg) no-repeat">
                    
            <div class="content">
                        
                <span>Enjoy, preview and book</span>
                <h3>for Grand Weddings</h3>
                <a href="package.php" class="btn">Look for more</a>
            </div>
            
        </div>

               
    </section>
-->























<section class="home">
        


               
        <div class="swiper-slide slide" style="background:url(Image/tech.jpg) no-repeat">
                    
            <div class="content">
                        
                <span>Enjoy, preview and book</span>
                <h3>for Grand Weddings</h3>
                <a href="package.php" class="btn">Look for more</a>
            </div>
            
        </div>

               
    </section>




    .packages .box-container .box:nth-child(1),
.packages .box-container .box:nth-child(2),
.packages .box-container .box:nth-child(3),
.packages .box-container .box:nth-child(4),
.packages .box-container .box:nth-child(5),
.packages .box-container .box:nth-child(6){
    display: inline-block;
}






<div class="box">
                <div class="image">
                    <img src="Image/img10.jpg" alt="not exist">
                </div>
                <div class="content">
                <h3>bright lights, big city</h1> 
                    <p>contact:7234336767<br>email:manager@gmail.com<br>rate:25000/day</P>
                    <br> <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Image/zxcv.jpg" alt="not exist">
                </div>
                <div class="content">
                <h3>buttercup hall</h1> 
                    <p>contact:7234336767<br>email:manager@gmail.com<br>rate:25000/day</P>
                    <br><a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Image/cooo.jpg" alt="not exist">
                </div>
                <div class="content">
                <h3>narmada hall</h1> 
                    <p>contact:7234336767<br>email:manager@gmail.com<br>rate:25000/day</P>
                    <br><a href="book.php" class="btn">book now</a>
                </div>
            </div>


<div class="load-more"><span class="btn">load more</span></div>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
</body>
</html>