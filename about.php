<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="nav_bar.css">
    <link rel="icon" href="pictures/icon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="mediaq.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     
     
     </head>
<body>
    


<div class="wrapper-1">
    <nav>
      <input type="checkbox" id="show-search-1">
      <input type="checkbox" id="show-menu-1">
      <label for="show-menu-1" class="menu-icon-1"><i class="fas fa-bars"></i></label>
      <div class="content-1">
      <div class="logo-1"><a href="index"><img src="./newlogo-removebg-preview.png" alt=""></a></div>
        <ul class="links-1">
          <li><a href="index">Home</a></li>
          
          
         
          
          <li>
            <a href="#" class="desktop-link-1">Categories</a>
            <input type="checkbox" id="show-categories">
            <label for="show-categories">Categories</label>
            <ul>
            <li><a href="categories?p_category=Accessories | Gadgets">Accessories & Gadgets</a></li>
              <li><a href="categories?p_category=Tempered Glasses">Tempered Glass</a></li>
              <li><a href="categories?p_category=Back Covers">Back-covers & Pouches</a></li>
              <li><a href="categories?p_category=Adapters">Adapter</a></li>
              <li><a href="categories?p_category=Airpods | Earbuds">Airpods & Earbuds</a></li>
              <li><a href="categories?p_category=Cables">Cables</a></li>
              <li><a href="categories?p_category=Chargers">Charger  </a></li>
              <li><a href="categories?p_category=Computer Accessories">Computer Accessories</a></li>
              <li><a href="categories?p_category=Displays">Dislplay</a></li>
              <li><a href="categories?p_category=Wired Earphones">Wired Earphone</a></li>
              <li>
                <a href="#" class="desktop-link-1">More</a>
                <input type="checkbox" id="show-more">
                <label for="show-more">More Items </label>
                <ul>
              <li><a href="categories?p_category=Head Phones">Head Phone</a></li>
              <li><a href="categories?p_category=Holders | Stands | Tripods">Holders / Stands / Tripods</a></li>
              <li><a href="categories?p_category=Home Appliances">Home Appliances</a></li>
              <li><a href="categories?p_category=Mobile Phone Battery">Mobile Phone Battery</a></li>
              <li><a href="categories?p_category=Mobile Phones">Mobile Phone</a></li>
              <li><a href="categories?p_category=OTG | Hubs | Converters">OTG / Hubs / Converter</a></li>
              <li><a href="categories?p_category=Pendrives | Memory Cards">Pendrive & Memory Card </a></li>
              <li><a href="categories?p_category=Power Banks">Power Banks </a></li>
              <li><a href="categories?p_category=Repair Tools">Repair Tools</a></li>
              <li><a href="categories?p_category=Smart Watches">Smart Watch</a></li>
              <li><a href="categories?p_category=Speakers | Subwoofers">Speakers & Subwoofers</a></li>
              <li><a href="categories?p_category=TWS Neckbands">TWS Neckband</a></li>
                </ul>
              </li>

            </ul>
          </li>
          <li><a href="contact">Contact us</a></li>
          <li><a href="about">About us</a></li>
          
        </ul>
      </div><!--wdiwdowkd-->
      <label for="show-search-1" class="search-icon-1"><i class="fas fa-search"></i></label>
      <form action="search.php" class="search-box-1" method="get" enctype="multipart/fomr-data">
        <input type="text" placeholder="Type Something to Search..." name="search_name" required>
        <button type="submit" class="go-icon-1" name="search"><i class="fas fa-search"></i></button>
      </form>
      <button class="cart"  ><a href="cart.php" style="text-decoration:none; color:white;" class="ahref"><i class="fa-solid fa-cart-shopping"></i>
      <span style="color:white;font-size:10px;font-weight:bold;position:absolute;  left:20px; background:red; padding:5px;clip-path:circle();"><?php 
      if(isset($_SESSION['addcart'])){
        echo count($_SESSION['addcart']);}
        else{
          echo"0";}?></span></a></button>    <style>
         
             .ahref:hover{
                 color: whitesmoke !important;
             }
          button.cart{
            background:none;
            border:none;
            outline:none;
            font-size:25px;
            margin-right:-70px;
            position:absolute;
            right:0;
            color:white;

          }
        </style>
       
    </nav>
  </div>
  
  <br><br>
  <br>
   


  



<!-- hirachy-->
<section class="about">
   <div class="content">
    
     <img src="./pictures/ceo.png" loading="lazy" class="img-fluid rounded" alt="">
     
  <div class="text">
     <h1 class="h2-1"> " Hi ! Im Firdous " </h1>
     <p class="h2-2">
   "We take pride in presenting the latest and finest products curated just for you. At "imobile Supreme", we are committed to delivering a seamless shopping experience, ensuring your orders are handled with the utmost care and friendliness. Explore innovation, quality, and friendly service – welcome to a world of new and exceptional products tailored to enhance your lifestyle."
     </p>
   <br>
   <div class="hirachy">-CEO & Founder-</div>
    </div>
    </div>
   </section>
   <div class="section">
    <div class="title">
      <h1 class="title-h1">Our Services</h1>
    </div>
    <div class="services reveal">
      <div class="card-1">
        <div class="icon">
        <i class="fas fa-calender"></i>
      </div>
      <h2>Achievement</h2>
      <p>Celebrating Achievements, Unlocking Innovation. Thank you for making "imobile Supreme" the epitome of style and tech excellence. Here's to many more milestones together on this journey of transforming mobile experiences.</p>
     </div>
     <div class="card-1">
      <div class="icon">
      <i class="fas fa-calender"></i>
    </div>
    <h2>Our Mission</h2>
    <p>Elevate your tech life with stylish and functional accessories at "imobile Supreme". Connecting innovation with personal expression, we enhance every mobile moment</p>
   </div>
   <div class="card-1">
    <div class="icon">
    <i class="fas fa-calender"></i>
  </div>
  <h2>Our Vision</h2>
  <p>Fostering a future where mobile accessories transcend mere functionality,"imobile Supreme" envisions a world where innovation meets personal style effortlessly. We aspire to be the go-to destination for cutting-edge, stylish tech solutions, redefining the way people engage with their devices. </p>
 </div>
    </div>
     
  </div>

<!-- hirachy 2-->


    

   

<br>
 
<style>
  body{
    margin:0;
    padding:0;
    background:linear-gradient(rgb(0,0,0,0.2),white);
  }
  .title-h1{
    
    text-align: center;
    
    z-index:1;
    
  }
  .reveal{
  position: relative;
  transform: translateY(150px);
  opacity: 0;
  transition: 02s all ease;
}

.reveal.active{
  transform: translateY(0);
  opacity: 1;
}

.section{
  background:radial-gradient(black,transparent);
}
@media (max-width:700px){
  .section{
    margin-top:100px;
  }
  .card-1{
    height:70vh;
    width:100%;
    margin:0;

  }
}
@media (max-width:400px){
  .section{
    margin-top:200px;
  }
  
  .card-1 p{
    padding:3px;
    font-size:15px;
    margin-bottom: 100px;
  }
  .card-1 h2{
    margin-bottom:50px;
  }
}
@media (max-width:200px){
  .card-1{
    height:100vh;
  }
}
 
  </style>

<!-- hirachy 1-->


<script>
  function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 10;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
 

</script>
<style>
  
  
 
 

 

</style>



<!-- mission vision-->
<!--------------------------------------------------------------------------------------------------->
<br><br>
<hr>

 

 
<br><br>
<hr>
 
 
  
 <div class="image-slide-container-2">
  <h1 class="reveal">Our Team</h1>

<div class="wrapper reveal">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <ul class="carousel">
        <li class="card">
          <div class="img"><img src="./pictures/abdullah.png" alt="img" draggable="false"></div>
          <h2>Abdullah Firdous</h2>
          <span>Manager</span>
        </li>
        <li class="card">
          <div class="img"><img src="./pictures/dp-1.jpg" alt="img" draggable="false"></div>
          <h2>M.Atheef Badurdeen</h2>
          <span>Web Developer</span>
        </li>
        <li class="card">
          <div class="img"><img src="./pictures/althaf.jpg" alt="img" draggable="false"></div>
          <h2>M. Althaf</h2>
          <span>System Billing</span>
        </li>
        
         
        <li class="card">
          <div class="img"><img src="./pictures/shabeer.png" alt="img" draggable="false"></div>
          <h2>M.Shabeer</h2>
          <span>System Handler

          </span>
        </li>
      </ul>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>

    </div>

<!-- achievement -->

    <script>

      const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
    </script>


<hr>
<!-- image slider -->
 

 
 
<style>
    /* stsyle for image slider*/
      
    body{
       
     
      margin:0;
        
        padding:0;
    }
    
    .auto-slider{
    position: relative;
    box-sizing: content-box;
    display: inline-block;
    border:5px solid transparent;
    
     
    margin: 20px auto;
    overflow: hidden;
     
    }


div#slider { overflow: hidden; }
div#slider figure img { width:5%; height:200px }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 10s sliding ease infinite; 
}

/* Slider indicator */
 


@keyframes sliding{
    0%{left: 0%; }
    20%{left: 0%;}
    40%{left: -100%;}
    60%{left:-100%};
    80%{left:-210%};
     
    100%{left: 0%;}
}        

 
.credit{
    text-align: center;
    color: #000;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.credit a{
    text-decoration: none;
    color:#000;
    font-weight: bold;
}  

 
 
 


  
   
 

</style>
<!--closing the style-->

<br>
<hr>
<br>

 
</h2>


 
 


<!-- footer-->
  <!-- footer-->
  <section class="footer">
     <div class="footer-wrap">
      <div class="footer-row">
      <div class="footer-col">
          <img src="newlogo-removebg-preview.png" alt="">
           
          <div class="icons">
            <a href="https://www.facebook.com/profile.php?id=61553854813459&mibextid=LQQJ4d" target="_blank"><i class="fa-brands fa-facebook-f facebook"></i></a>
            <a href="https://wa.me/+94777143322" target="_blank"><i class="fa-brands fa-whatsapp whatsapp" target="_blank"></i></a>
            <a href="https://instagram.com/imobile_supreme?igshid=MTNiYzNiMzkwZA%3D%3D&utm_source=qr" target="_blank"><i class="fa-brands fa-instagram instagram"></i></a>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfpsXfHmqckLpSmkLCHrCSdLJCVmRzMLmSTZxhSdxVHbvvNsnLdGcvwjqJqFQdbfNFMMLB" target="_blank"><i class="fa-solid fa-envelope email" target="_blank"></i></a>
           <a href="https://youtube.com/@ImobileSupreme?si=DBCwJxYMf-qEtVtr" target="_blank"> <i class="fa-brands fa-youtube you-tube"></i></a>
           <a href="https://www.tiktok.com/@imobile_lk?is_from_webapp=1&sender_device=pc" target="_blank"> <i class="fa-brands fa-tiktok tik-tok" target="_blank"></i><a>
            
          </div>
        </div>

       
        <div class="footer-col">
          
          <h4>Our Info</h4>
          <ul class="links">
            <li><i class="fa fa-location" ></i><p > No.21, Galle Road,<br>
                                               Bambalapitiya,<br>
                                               Colombo 04</p></li>
            <li><i class="fa fa-clock"></i> Mon-Sun:8.30 a.m-8.30 p.m </li>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfpsXfHmqckLpSmkLCHrCSdLJCVmRzMLmSTZxhSdxVHbvvNsnLdGcvwjqJqFQdbfNFMMLB" target="_blank" style="text-decoration:none;"><li><i class="fa-solid fa-envelope"></i> imobileSupreme@gmail.com </li></a>
            <li><i class="fa-solid fa-phone"></i>077 714 3322</li>
           
             
          </ul>
        </div>

        <div class="footer-col">
          <h4>Shop</h4>
          <ul class="links">
            <li><a href="new">New Arrivals</a></li>
            <li><a href="offers">Offers</a></li>
             
             
          </ul>
        </div>

        <div class="footer-col">
          <h4>Categories</h4>
          <ul class="links">
            <li><a href="categories?p_category=Accessories | Gadgets">Accessories & Gadgets</a></li>
            <li><a href="categories?p_category=Back Covers">Back Covers</a></li>
            <li><a href="categories?p_category=Tempered Glasses">Tempered Glass</a></li>
            <li><a href="categories?p_category=Smart Watches">Smart Watch</a></li>
            <li><a href="categories?p_category=Speakers | Subwoofers">Speakers</a></li>
            <li><a href="categories?p_category=Airpods | Earbuds">Air Pods</a></li>
            <li><a href="categories?p_category=Adapters">Adapter</a></li>
            <li><a href="categories?p_category=Home Appliances">Home Appliances</a></li>
            
          </ul>
        </div>
       
        
      
      </div>
      </div>
      <div class="footer-2">
      Copyright © 2023 <a href="index" style="color: silver; text-decoration:none;">imobileSupreme</a> All Rights Reserved.Developed By <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrgDRvbCLtPJtPjxkcDKgsQVXBDtskjxQBWLpRSsHgtCzgHcrlwWwFGwCsTlnVztJVfqsV" style="color:red; text-decoration:none">MS Projects</a>
      </div>
    </section>
 
  
    
  </body>
</html>




 


 
 <style>
   
 </style>
 

<style>
  /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
 
.wrapper-2{
  display: flex;
  max-width: 1300px;
   
  position: relative;
}
.items-view{
  display:flex;
  justify-content:center;
}
.wrapper-2 i{
  top: 50%;
  height: 44px;
  width: 44px;
  color: #343F4F;
  cursor: pointer;
  font-size: 1.15rem;
  position: absolute;
  text-align: center;
  line-height: 44px;
  background: #fff;
  border-radius: 50%;
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper-2 i:active{
  transform: translateY(-50%) scale(0.9);
}
.wrapper-2 i:hover{
  background: #f2f2f2;
}
.wrapper-2 i:first-child{
  left: 0;
  display: none;
  background:black;
  color:silver;
  z-index:1;
}
.wrapper-2 i:last-child{
  right: 0;
  background:black;
  color:silver;
}
.wrapper-2 .carousel-2{
  font-size: 0px;
  cursor: pointer;
  overflow: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
}
.carousel-2.dragging{
  cursor: grab;
  scroll-behavior: auto;
}
.carousel-2.dragging img{
  pointer-events: none;
}
.carousel-2 img{
  height: 340px;
   
  user-select:none;
  transform:scale(0.7);
  margin-left: 14px;
  
  width: calc(100% / 3);
}
.carousel-2 img:first-child{
  margin-left: 0px;
}

@media screen and (max-width: 900px) {
  .carousel-2 img{
    width: calc(100% / 2);
    transform:scale(0.8);
  }
}

@media screen and (max-width: 550px) {
  .carousel-2 img{
    width: 100%;
  }

  .wrapper-2{
    max-width:1200px;
  }
}
</style>


<script>
  const carousel = document.querySelector(".carousel-2"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper-2 i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);
</script>

