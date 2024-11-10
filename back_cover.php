<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iMobile.lk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="nav_bar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="mediaq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    


<div class="wrapper-1">
    <nav>
      <input type="checkbox" id="show-search-1">
      <input type="checkbox" id="show-menu-1">
      <label for="show-menu-1" class="menu-icon-1"><i class="fas fa-bars"></i></label>
      <div class="content-1">
      <div class="logo-1"><a href="index.php"><img src="./newlogo-removebg-preview.png" alt=""></a></div>
        <ul class="links-1">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About us</a></li>
          
          <li>
            <a href="#" class="desktop-link-1">Categories</a>
            <input type="checkbox" id="show-categories">
            <label for="show-categories">Categories</label>
            <ul>
              <li><a href="accessory.php">Accessories</a></li>
              <li><a href="tempered.php">Tempered Glass</a></li>
              <li><a href="back_cover.php">Back- covers</a></li>
              <li>
                <a href="#" class="desktop-link-1">More</a>
                <input type="checkbox" id="show-more">
                <label for="show-more">More </label>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="contact.php">Contact us</a></li>
        </ul>
      </div>
      <label for="show-search-1" class="search-icon-1"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box-1">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon-1"><i class="fas fa-search"></i></button>
      </form>
    </nav>
  </div>



      <h1 class="h1-1"> Available Tempered Glass </h1><br>
     
      
      <?php 
     
      
     include 'config.php';
  $page2=1;
if(isset($_POST['done'])){
      $page2=$_POST['list'];
       
}else{
    $page2;
}

$category="Back-cover";
 

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
  box-sizing:border-box;
   
   
}
      .items-1{
        margin-left: 10px;
        width:20%;
        margin-top: 10px;
        padding: 20px;
        display: grid;
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
  <section class="footer">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Our Office</h4>
          <ul class="links">
            <li><i class="fa fa-location"></i> main street ,unique Complex </li>
            <li><i class="fa fa-clock"></i> Mon-Sun:8.30 a.m-8.30 p.m </li>
            <li><i class="fa-solid fa-envelope"></i> imobile.lk@gmail.com </li>
            <li><i class="fa-solid fa-phone"></i> 078 798 7255 </li>
           
             
          </ul>
        </div>

        <div class="footer-col">
          <h4>Services</h4>
          <ul class="links">
            <li><a href="#">Whole Sales</a></li>
            <li><a href="#">Online Sales</a></li>
            <li><a href="#">Retails</a></li>
             
          </ul>
        </div>

        <div class="footer-col">
          <h4>Categories</h4>
          <ul class="links">
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Back-Covers</a></li>
            <li><a href="#">Tempered Glass</a></li>
            <li><a href="#">Gadgets</a></li>
            <li><a href="#">Speakers</a></li>
            
          </ul>
        </div>

        <div class="footer-col">
          <img src="newlogo-removebg-preview.png" alt="">
           
          <div class="icons">
            <i class="fa-brands fa-facebook-f facebook"></i>
            <i class="fa-brands fa-whatsapp whatsapp"></i>
            <i class="fa-brands fa-instagram instagram"></i>
            <i class="fa-brands fa-tiktok tik-tok"></i>
          </div>
        </div>
        
      </div>
      <div class="footer-2">
      Copyright © 2023 CodingNepal All Rights Reserved
      </div>
    </section>
  
 




  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 

 