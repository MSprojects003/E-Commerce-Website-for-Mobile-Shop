<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iMobile.lk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="mediaq.css">
</head>
<body>
    


  <nav class="navbar bg-body-tertiary nav-bar-1">
    <div class="container-fluid">
      <a class="navbar-brand logo1" href="index.php" ><img src="/imobile.lk/i_mobile_logo_restore_copy__6_-removebg-preview.png"    ></a>
      <form class="d-flex" role="search">
        <input class="form-control me-2 search-input" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><img src="./icons8-search-64.png" class="search-icon1"></button>
      </form>
    </div>
  </nav>



  <nav class="navbar navbar-expand-lg bg-body-tertiary nav-bar-2">
     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ul1">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="accessory.php">Accessories</a></li>
              <li><a class="dropdown-item" href="tempered.php">Tempered Glass</a></li>
              <li><a class="dropdown-item" href="back_cover.php">Back - covers</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" > Contact us </a>
          </li>
          
        </ul>
      </div>
    
  </nav>




      <h1 class="h1-1"> Available Tempered Glass </h1><br>
     
      
      <?php 
     
      
     include 'config.php';
  $page2=1;
if(isset($_POST['done'])){
      $page2=$_POST['list'];
       
}else{
    $page2;
}

$category="Accessories";
 

$sql="SELECT * from accessories where p_category='$category' limit $page2";
$run=mysqli_query($connect,$sql);
if(mysqli_num_rows($run)){
    while($show=mysqli_fetch_array($run)){
           ?><a href="cart.php?p_id=<?php echo $show['p_id'];?>">
           <div class="items-1" >
             
               
               
            <?php 
           
            echo "<img src='uploads/".$show['p_image']."'>";
            
            ?>
            <div class="view-name">

              <?php  $p_name= $show['p_name']; 
                     echo substr($p_name,0,20),"...";
              
              ?>
            </div>
            <div class="view-price">
              <?php echo"Rs. ", $show['p_price'];?>
            </div>
            <input type="hidden" value="<?php echo $show['p_id'];?>" >

  </div>
        </a>
   
          <?php


        }
        
      }
      
      
      
      
      ?>
    
      
       </div>

       <form method="post"  enctype="multipart/form-data"  >
 
 <input type="hidden" name="list" value=<?php echo $page2+1?>>
               <button   name="done" > 
                Load More</i></button> 
        </form>





     <style>
      body{
  margin:0;
  padding:0;
}
      .items-1{
        margin-left: 10px;
        width:20%;
        margin-top: 10px;
        padding: 20px;
        display: inline-block;
        box-shadow: 0px 2px 3px black;

        
      }
      .btn-next{
        background-color: blue;
         margin-left: 40px;
         margin-top: 20px;
      }
      .items-1:hover{
         
        background-color: rgba(219, 210, 210, 0.763);
        box-shadow: 0px 3px 4px black;
      }
       
    .items-1 img{
         width: 100%;
         height: 230px;
      }
      .view-name{
        font-size: 15px;
        text-align: center;
      }
 
     .view-price{
      font-size: 23px;
      color: red;
      font-weight: bold;
     }
      </style>

      













<br><br>



<hr>

 <!-- footer-->
 <div class="discription">
    <div class="footer-1"> 
      <img src="./i_mobile_logo_restore_copy__6_-removebg-preview.png" alt="image-footer1" class="footer-img1" >
      <div class="footer-2">
        <div class="about-footer">
          <h3>Go to</h3>
          <br>
        <a href="about.html" class="href-1">About us</a> 
        <a href="contact.html" class="href-1">Contact us</a> 
        <a href="accessory.html" class="href-1">Accessories</a>
        <a href="about.html" class="href-1">New arrivals</a> 
        <a href="contact.html" class="href-1">Wishlist</a> 
        <a href="accessory.html" class="href-1">Offers</a>
  
      </div>
      
  
    </div>
    <div class="customer-care">
      <h3>
        Customer care
  
        
      </h3>
      <br>
      <a href="contact.html" class="href-2">Contact us</a>
      <a href="faq.html" class="href-2">FAQs</a>
      <a href="warrenty.html" class="href-2">Warranty</a>
      <a href="policy.html" class="href-2">Privacy Policy</a>
      <a href="condition.html" class="href-2">Terms and Conditions</a>
    </div>
      </div>
  
      <div class="footer-contact">
      <img src="./istockphoto-1203588204-612x612-removebg-preview (1).png" class="footer-img2">
      <div class="footer-contact2"><h6><b>Any Questions?Call us right now?</b></h6>
      <h3><b>(+94) 1234 567</b></h3></div>
        
     
      
      </div>
      <br>
      <h6 class="h6-1">
        contact info<br>
        Main street,unique complex.
  
      </h6>
      <br>
      <br>
      <p class="i">
      <i>
       follow us on <i></p>
  
      <div class="follow-icons">
         
        <a href=""><img src="./Screenshot_2023-09-18_150356-removebg-preview.png" alt=""  class="icons-1"></a>
        <a href=""><img src="./Screenshot_2023-09-18_150951-removebg-preview.png"style=" width: 50px;"  alt="" class="icons-1"></a>
        <a href=""><img src="./Screenshot_2023-09-18_151744-removebg-preview.png" style=" width: 50px;" alt="" class="icons-1"></a>
        <a href=""><img src="./Screenshot_2023-09-18_154751-removebg-preview.png" style=" width: 40px;"alt="" class="icons-1"></a>
        <a href=""><img src="./Screenshot_2023-09-18_155431-removebg-preview.png" style=" background-color:white;clip-path:circle(40%); width: 50px;"  alt="" class="icons-1"></a>
      </div>
  
      
  
  </div>
  
  <div class="footer-rights">
  
    <h6 class="h6-2">&copy; 2023 ImobileSupreme.All rights Reserved.Developed by MBA edits</h6>
  </div>
  
 




  

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
      background-color:white;
      height:25vh;
     
    }
    .logo1 img{
       transform:scale(0.5);
             margin-left:-20px;
             
              
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
        margin-left:-110px;
      }
  }
 
</style>
<style>

   .h1-1{
    margin-top:50px;
    color: rgb(0,0,0,0,0.6);
    text-shadow:0px 2px 4px black;
    text-align:center;

    
    
   }
   

  </style>