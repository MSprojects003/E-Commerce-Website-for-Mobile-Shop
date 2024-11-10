<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iMobile.lk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="nav_bar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="pictures/icon.png">
    <link rel="stylesheet" href="mediaq.css">
    <link rel="stylesheet" href="items.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    
<style>
  .wrapper-1{
   background: linear-gradient(rgb(0 0 0 / 94%),#171c24bf);
   
  }
  .search-box-1 input{
      border-top-left-radius: 50px;
      border-bottom-left-radius: 50px;
  }
</style>

<div class="wrapper-1" >
    <nav >
      <input type="checkbox" id="show-search-1">
      <input type="checkbox" id="show-menu-1">
      <label for="show-menu-1" class="menu-icon-1"><i class="fas fa-bars"></i></label>
      <div class="content-1">
      <div class="logo-1"><a href="index.php"><img src="./newlogo-removebg-preview.png" alt=""></a></div>
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
      <form action="search" class="search-box-1" method="get" enctype="multipart/form-data">
        <input type="text" placeholder="Type Something to Search..." name="search_name" required>
        <button type="submit" class="go-icon-1" name="search"><i class="fas fa-search"></i></button>
      </form>
      <button class="cart"  ><a href="cart" style="text-decoration:none; color:white;" class="ahref"><i class="fa-solid fa-cart-shopping"></i>
      <span style="color:white;font-size:10px;font-weight:bold;position:absolute;  left:20px; background:red; padding:5px;clip-path:circle();"><?php 
      if(isset($_SESSION['addcart'])){
        echo count($_SESSION['addcart']);}
        else{
          echo"0";}?></span></a></button><style>
         

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
          .content-1 .links-1 ul{
  position: absolute;
  background: rgb(0,0,0,0.9) !important;
  top: 80px;
  z-index: 2 !important;
  opacity: 0;
  visibility: hidden;
}
          .reveal{
  position: relative;
  transform: translateY(100%);
  opacity: 0;
  transition: 01s all ease;
}

.reveal.active{
  transform:translateY(0);
  opacity: 1;
}


.reveal2{
  position: relative;
  transform: scale(0.2);
  opacity: 0;
  transition: 1s all ease;
}

.reveal2.active2{
  transform: scale(1);
  opacity: 1;
}
.reveal3{
  position: relative;
  
  opacity: 0;
  transition: 2s all ease;
}

.reveal3.active3{
  
  opacity: 1;
}
.transform{
  
  transform: scale(3);
  opacity: 0.1;
  transition: 2s all ease;
}

.transform.active4{
   transform:scale(1);
  opacity: 1;
}
        </style>


<script>
  function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 100;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
 

</script>


<script>
  function reveal2() {
  var reveals = document.querySelectorAll(".reveal2");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 50;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active2");
    } else {
      reveals[i].classList.remove("active2");
    }
  }
}

window.addEventListener("scroll", reveal2);
 

</script>
       
    </nav>
  </div>
  
  
  <style>
    .carousal{
     transform:translateY(0px);
    }
    @media (max-width:800px){
      .carousal{
     margin-bottom:150px;
     transform: translateY(100px);
    }
    }
    @media (max-width:400px){
      .carousal{
     margin-bottom:150px;
     transform: translateY(100px);
     
    }

  }
  .carousel-control-prev-icon{
    border-radius: 0 3rem 3rem 0;
    width: 3rem;
    height: 3rem;
    background-color:  red;
    border: 10px solid  red;
    position:absolute;
    left:0;
  }
  .carousel-control-next-icon{
    border-radius:  3rem 0 0 3rem ;
    width: 3rem;
    height: 3rem;
    background-color: red;
    border: 10px solid  red;
    position:absolute;
    right:0;
  }
   
  </style>

<!-- nav bar closing-->
<!-- slider image-->
<div class="carousal">
 <div id="carouselExampleCaptions" class="carousel slide">
   
  <div class="carousel-inner">
    <div class="carousel-item active">


    <?php 
       include 'config.php';
       
       
       $ban1="SELECT * FROM banner where ban_name ='banner1'";
       $run=mysqli_query($connect,$ban1);

       if(mysqli_num_rows($run)==0){?>
     
      <img src="pictures/font2.jpeg" class="d-block w-100" alt="..."> <?php  }else{

while($fetch1=mysqli_fetch_array($run)){
   $image1=$fetch1['ban_image'];?>
   <a href="<?php echo $fetch1['link'];?>" >
 <img src="banner/<?php echo $image1;?>" class="d-block w-100" alt="..."></a>
 <?php
      }
     }
       
       
       ?>
        
        
      
    </div>
    <div class="carousel-item">
    <?php  
    
    $ban2="SELECT * FROM banner where ban_name = 'banner2'";
    $run2=mysqli_query($connect,$ban2);

    if(mysqli_num_rows($run2)==0){ ?>
     
      <img src="pictures/front1.jpeg" class="d-block w-100" alt="..."> 
      <?php

  
     
    }else{?>
     <?php
      while($fetch2=mysqli_fetch_array($run2)){
      $image2=$fetch2['ban_image'];?>
      <a href="<?php echo $fetch2['link'];?>" >
    <img src="banner/<?php echo $image2;?>" class="d-block w-100" alt="..."></a>
 
    <?php
      }

    }
    
    
    ?>



       
         
      
     
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 </div>
<!---->


 <br><br>
  
 
<style>





  body{
    margin:0;
    padding: 0;
  }
  .prev-button{
    background:none;
    width:50%;
  }
  .next-button{
    background:none;
    width:50%;
  }
  .slider-1{
     
    background-position:fixed;
    margin-top:-50px;
   
    z-index:1;
  }
   
  .front-image img{
    width:100%;
    margin-top:-30px;
    transform: scaleY(0.9);
  }
    .imgli-1{
    display: none;
    }

     
    
  
  
  @media (max-width:500px){
    .slider-1{
     
     background-position:fixed;
     margin-top:-30px;
    
     z-index:1;
   }

  }
   
  

 
  /* categories images edit   */

  </style>
  <script>
  function transform() {
  var transform1 = document.querySelectorAll(".transform");

  for (var i = 0; i < transform1.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = transform1[i].getBoundingClientRect().top;
    var elementVisible = 50;

    if (elementTop < windowHeight - elementVisible) {
      transform1[i].classList.add("active4");
    } else {
      transform1[i].classList.remove("active4");
    }
  }
}
window.addEventListener("load", transform);
 

 

</script>

       
 
       



</div> 

<div class="category-1">

<h1 class="reveal">Our Categories</h1>

  <p class="cat-thumb-1  ">
  <a href="categories?p_category=Airpods | Earbuds" >
<img src=".//pictures/airpods.png" class="img-thumbnail reveal2" alt="..."></a>
  
 
    <a href="categories?p_category=Tempered Glasses">
<img src=".//pictures/tempered-removebg-preview.png" class="img-thumbnail reveal2" alt="..."></a> 
<a href="categories?p_category=Back Covers">
<img src="./pictures/back-cover.png" class="img-thumbnail reveal2" alt="..."></a> 
<a href="categories?p_category=Accessories | Gadgets">
<img src="./pictures/accessories.png" class="img-thumbnail reveal2" alt="..."></a> 
<a href="categories?p_category=Mobile Phones">
<img src="./pictures/mobile.png" class="img-thumbnail reveal2" alt="..."></a> 
<a href="categories?p_category=Smart Watches">
<img src="./pictures/smartwatch.png" class="img-thumbnail reveal2" alt="..."></a>
<a href="categories?p_category=Speakers | Subwoofers">
<img src=".//pictures/speakers.png" style="width:150px; height:170px;"class="img-thumbnail reveal2" alt="..."></a>
<a href="categories?p_category=Pendrives | Memory Cards">
<img src="./pictures/pendrive.png" class="img-thumbnail reveal2" alt="..."></a>
 
<a href="categories?p_category=Adapters">
<img src="./pictures/adapter.png" class="img-thumbnail reveal2" alt="..."></a>
<a href="categories?p_category=Cables">
<img src="./pictures/cables.png" class="img-thumbnail reveal2" alt="..."></a>
 
<a href="categories?p_category=Chargers">
<img src="./pictures/charger.png" class="img-thumbnail reveal2" alt="..."></a>
<a href="categories?p_category=OTG | Hubs | Converters">
<img src="./pictures/otg.png" class="img-thumbnail reveal2" alt="..."></a>
<a href="categories?p_category=Wired Earphones">
<img src="./pictures/wired earphone.png" class="img-thumbnail reveal2" alt="..."></a>
<a href="categories?p_category=TWS Neckbands">
<img src="./pictures/tws neckband.png" class="img-thumbnail reveal2" alt="..."></a>
<a href="categories?p_category=Mobile Phone Battery">
<img src="./pictures/battery.png" class="img-thumbnail reveal2" alt="..."></a>

<a href="categories?p_category=Displays">
<img src="./pictures/display.png" class="img-thumbnail reveal2" alt="..."></a>
<a href="categories?p_category=Head Phones">
<img src="./pictures/headphone.png" class="img-thumbnail reveal2" alt="..."></a>

<a href="categories?p_caregory=Power Banks">
<img src="./pictures/power bank.png" class="img-thumbnail reveal2" alt="..."></a>
<a href="categories?p_category=Home Appliances">
<img src="./pictures/home appliances.png" class="img-thumbnail reveal2" alt="..."></a>

 
</p>
</div>
<hr>

   <!-- <h3 style="color:red; padding:20px;;background:linear-gradient(90deg,black,rgb(0,0,0,0)); font-weight:bold;">JBL & Speakers</h3>

    <div class="container">
    <div class="row px-2 mt-4 gap-3" id="filterable-cards">-->
    <?php include 'config.php';
    
      $sql="SELECT * from categories  order by p_id desc limit 4";
$run=mysqli_query($connect,$sql);
if(mysqli_num_rows($run)){
while($show=mysqli_fetch_array($run)){?>
      <!-- Images Filter Buttons Section -->
     
      <!-- Filterable Images / Cards Section -->
      
      <!--<a href=".php?p_id=<?php echo $show['p_id'];?>" class="card p-0" data-name="nature">
         
       <?php
    
    echo "<img src='uploads/".$show['p_image']."'>";?>
     
      
      <div class="view-name">
       <?php echo $show['p_name'];
?>

      </div>
      <div class="view-price">
        <?php echo "Rs.", $show['p_price'];
        ?>
      </div>
      <div class="view-2">
      <div class="old-price">
        <?php 
        $old_price=$show['old_price'];
         if($old_price==0){
          echo"";
         }else{
          echo "Rs.",$old_price;
         }
         ?>
          </div>
         <div class="discount">
          <?php $discount=$show['p_discount'];
          if($discount==NULL){
            echo "";
          }else{
            echo $discount,"%";
          
          } ?>
        
         </div>
      </div>
      </a>
        <?php



}}?>
     
      </div>
      
    <!--</div>



 </div>

<hr>


<h3 style="color:red; padding:20px;;background:linear-gradient(90deg,black,rgb(0,0,0,0)); font-weight:bold;">OTG & Hubs & Converter</h3>

<div class="container">
<div class="row px-2 mt-4 gap-3" id="filterable-cards">-->
<?php include 'config.php';

  $sql="SELECT * from categories  order by p_id desc limit 4";
$run=mysqli_query($connect,$sql);
if(mysqli_num_rows($run)){
while($show=mysqli_fetch_array($run)){?>
  <!-- Images Filter Buttons Section -->
 
  <!-- Filterable Images / Cards Section -->
  
 <!-- <a href=".php?p_id=<?php echo $show['p_id'];?>" class="card p-0" data-name="nature">
     
   <?php

echo "<img src='uploads/".$show['p_image']."'>";?>
 
  
  <div class="view-name">
   <?php echo $show['p_name'];
?>

  </div>
  <div class="view-price">
    <?php echo "Rs.", $show['p_price'];
    ?>
  </div>
  <div class="view-2">
  <div class="old-price">
    <?php 
    $old_price=$show['old_price'];
     if($old_price==0){
      echo"";
     }else{
      echo "Rs.",$old_price;
     }
     ?>
      </div>
     <div class="discount">
      <?php $discount=$show['p_discount'];
      if($discount==NULL){
        echo "";
      }else{
        echo $discount,"%";
      
      } ?>
    
     </div>
  </div>
  </a>
    <?php



}}?>
 
  </div>
  
</div>



</div>
<!--
-->
 

<script>
  function reveal3() {
  var reveals = document.querySelectorAll(".reveal3");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 50;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active3");
    } else {
      reveals[i].classList.remove("active3");
    }
  }
}

window.addEventListener("scroll", reveal3);
 

</script>
 
 <style>
  

    .category-1 img.img-thumbnail{

        width:180px;
        height:150px;
        border:none;
       background:none;
       margin:10px;
        
      
    }
    .category-1 img.img-thumbnail:hover {
  filter: drop-shadow(3px 5px 6px black);
  transform: scale(1.1);
  transition: 1s;
  
  border-radius: 10%;
}



    .category-1 h1{
      text-align:center;
      font-weight:600;
       
     background:linear-gradient(90deg,black,transparent);
     box-shadow:0px 0px 10px black;
      margin:10px;
    }
    
    p.cat-thumb-1{
      text-align:center;
    }


   
  .new-arrivals h1{
    font-weight:bold;
    background:linear-gradient(90deg,white,black);
    filter:drop-shadow(0px 0px 5px black);
    margin:10px;

  }
  @media (max-width:500px){
    .category-1 img.img-thumbnail{
      width:120px;
      height:100px;
    }
  }
  
  
    
  </style>
 

<br>
<hr>
<div class="new-arrivals">
   <h1>Our Authorized Brands</h1>
   <div class="items-view">
    <!-- items view new arri vals-->
    <div class="wrapper-2 reveal3">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <div class="carousel-2">
      <a href="brand?p_brand=Apple"><img src="pictures/apple.png" alt="img" draggable="false"></a>

       <a href="brand?p_brand=lito"><img src="pictures/lito.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=jccom"><img src="pictures/jccom.jpg" alt="img" draggable="false"></a>
       <a href="brand?p_brand=joyroom"> <img src="pictures/joy room.png" alt="img" draggable="false"></a>
       <a href="brand?p_brand=wiwu"> <img src="pictures/wiwu.png" alt="img" draggable="false"></a>
       <a href="brand?p_brand=kaiyue"> <img src="pictures/kaiyue.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=greenlion"><img src="pictures/greenlion.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=denmen"><img src="pictures/denmen.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=mcdodo"><img src="pictures/mcdodo.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=jbl"><img src="pictures/jbl.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=mtb"><img src="pictures/mtb.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=skullcandy"><img src="pictures/skullcandy.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=samsung"><img src="pictures/samsung.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=mi"><img src="pictures/mi.webp" alt="img" draggable="false"></a>
        <a href="brand?p_brand=realme"><img src="pictures/realme.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=akg"><img src="pictures/akg.jpg" alt="img" draggable="false"></a>
        <a href="brand?p_brand=remax"><img src="pictures/remax.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=lenovo"><img src="pictures/lenovo.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=sandisk"><img src="pictures/sandisk.jpg" alt="img" draggable="false"></a>
        <a href="brand?p_brand=kingston"><img src="pictures/kingston.jpg" alt="img" draggable="false"></a>
        <a href="brand?p_brand=inkax"><img src="pictures/inkax.jpg" alt="img" draggable="false"></a>
        <a href="brand?p_brand=marshal"><img src="pictures/marshal.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=foneng"><img src="pictures/foneng.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=huawei"><img src="pictures/huawei.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=anker"><img src="pictures/anker.jpg" alt="img" draggable="false"></a>
        <a href="brand?p_brand=pavareal"><img src="pictures/pavareal.png" alt="img" draggable="false"></a>
        <a href="brand?p_brand=redington"><img src="pictures/redington.png" alt="img" draggable="false"></a>

      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    


   </div>
</div>


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
  




  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 

<!-- jio phone size --><style>
   @media (height: 320px)   and (width: 240px)/* jio phone 2*/ {
    .about-footer{
      font-size:12px;
      margin-left:-30px;
    }
    .customer-care{
      font-size:12px;
    }
    .d-flex{
      transform:scale(0.6);
      z-index:3 !important;
       margin-top:-30px;
    }
    .discription img.footer-img1 {
      width:100%;
      transform:scale(0.5);
    }
    h1.h1-1 {
      font-size:30px !important;
      color:black !important;
    }
    .follow-icons .icons-1{
      margin-right:-10px;
      
      
    }.navbar>.container-fluid{
     
      height:25vh;
     
    }
    .logo1 img{
       transform:scale(0.5);
             margin-left:-20px;
             
              
    }
    .carousel-fade .carousel-item.active{
      height:auto !important;
    }
    .discription img.footer-img1{
      left:0%;
       margin-top:40%;

    }
    .follow-icons {
      transform:scale(0.7);
    }
    .bg-body-tertiary{
      position: fixed !important;
    width: 100%;
    z-index: 2;
    }
    .nav-bar-1{
      z-index:4;
    }
    .slider-1{
        margin:20px !important;
         
        margin-top:80px !important;
      }
      .whatsapp img.whatsapp-icon{
        width:20% !important;
        height:20%  !important;
        
      }
      .whatsapp{
        right:-45%;
      }
      .nav-link{
        font-size:10px !important;

      }
       li.nav-item{
        height:30px;
       }
  }
 
  @media screen and (min-device-width: 300px) and (max-device-width: 600px){
  
      .navbar>.container-fluid{
        height:100px !important;
        margin-bottom:20px;
         
      }
      .d-flex{
         
        transform:scale(0.8);     
        width:auto !important;  
        margin-left:20px;
        z-index:4 !important;
         margin-top:10px;
      }
       .nav-bar-2{
          top:120px;
          position:fixed;
          z-index:2 !important;
          width:100%;
       }
       .nav-bar-1{
        z-index:4;
       }
       
       
       }
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
  color:white;
  z-index:1;
  opacity:0.7
}
.wrapper-2 i:first-child:hover{
  opacity: 0.8;
}
.wrapper-2 i:last-child{
  right: 0;
  background:black;
  color:white;
  opacity: 0.7;
}
.wrapper-2 i:last-child:hover{
  opacity: 0.8;
}
.wrapper-2 .carousel-2{
  font-size: 0px;
  cursor: pointer;
  overflow: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
  transform:scale(0.8);
  
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
  opacity:0.9;
  user-select:none;
  transform:scale(0.7);
  margin-left: 14px;
  
  width: calc(100% / 3);
}
.carousel-2 img:hover {
  animation: scaleUp 1s;
  animation-iteration-count: infinite;
  transform-origin: center;
  transform: scale(1);
}

 
@keyframes scaleUp {
  0% { transform: scale(0.6); }
  50% { transform: scale(0.8); }
  100% { transform: scale(0.6); }
}
.carousel-2 img:hover{
  
  transition:1s;
  opacity:2;
   
}
.carousel-2 img:first-child{
  margin-left: 10px;
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
    scale: 0.7;
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

