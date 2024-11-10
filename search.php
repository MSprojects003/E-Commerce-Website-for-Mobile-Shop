<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $search_name= $_GET['search_name'];
    echo "You searched for ",$search_name;?></title>
     <link rel="icon" href="pictures/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="nav_bar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="mediaq.css">
    <link rel="stylesheet" href="items.css">
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
      <form action="search" class="search-box-1" method="get" enctype="multipart/form-data">
        <input type="text" placeholder="Type Something to Search..." name="search_name" required>
        <button type="submit" class="go-icon-1" name="search"><i class="fas fa-search"></i></button>
      </form>
        <button class="cart"  ><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></button>
        <style>
         

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
  
<br><br><br><br><br>


  

  

<?php
  $search_name=$_GET['search_name'];
       


    ?>



<div class="container">
    <div class="row px-2 mt-4 gap-3" id="filterable-cards">
    <?php include 'config.php';
      
    $page2=10;
      if(isset($_POST['done'])){
      $page2=$_POST['list'];
       
       
      }else{
      $page2;
      }
      if(isset($_GET['search'])){
      
        $sql1="SELECT * FROM categories where p_name LIKE '%$search_name%' or p_price like '%$search_name%'  
         or p_brand like '%$search_name%' order by p_id desc";
       
$run=mysqli_query($connect,$sql1);

if(mysqli_num_rows($run)>0){?>
  <h1> Showing Results for "<?php echo $search_name;?>"</h1> <br><?php
while($show=mysqli_fetch_array($run)){?>
      <!-- Images Filter Buttons Section -->
      
      <!-- Filterable Images / Cards Section -->
      
      <a href=".php?p_id=<?php echo $show['p_id'];?>" class="card p-0" data-name="nature">
         
       <?php
    
    echo "<img src='uploads/".$show['p_image']."'>";?>
     
      
      <div class="view-name">
      <?php $p_name=$show['p_name'];
             $l_p_name=substr($p_name,0,23);
             echo $l_p_name,"...";
?>

      </div>
      <div class="view-price">
        <?php echo "Rs.", number_format($show['p_price']);
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



}}else{
  ?><h1 style="background-color:black; color:white; padding-left:20rem; padding-right:25rem;">No Results Found! </h1><?php
}}?>
     
      </div>
      
    </div>



 </div>
<!-- php pagination -->
 <form method="post"  enctype="multipart/form-data"  >

<input type="hidden" name="list" value=<?php echo $page2+10?>>
         <button   name="done" class="load-more"> 
         <i class="fa-solid fa-circle-arrow-right load"></i></button> 

         
  </form>

</div>




        
    






      
     
   
      
     <style>
      .items-1{
        margin-left: 10px;
        width:20%;
        padding: 20px;
        display: inline-block;
        box-shadow: 0px 2px 3px black;

        
      }
      i.load{
         
         font-size:40px;
       }
       button.load-more{
          position:absolute;
          right:10px;
          border:none;
          background:none;
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
<h3>
Latest Products</h3>
<!-- LATEST PRODUCTS -->

 

 

<div class="container">
    <div class="row px-2 mt-4 gap-3" id="filterable-cards">
    <?php include 'config.php';
    
      $sql="SELECT * from categories order by p_id desc limit 4";
$run=mysqli_query($connect,$sql);
if(mysqli_num_rows($run)){
while($show=mysqli_fetch_array($run)){?>
      <!-- Images Filter Buttons Section -->
     
      <!-- Filterable Images / Cards Section -->
      
      <a href=".php?p_id=<?php echo $show['p_id'];?>" class="card p-0" data-name="nature">
         
       <?php
    
    echo "<img src='uploads/".$show['p_image']."'>";?>
     
      
      <div class="view-name">
      <?php $p_name=$show['p_name'];
             $l_p_name=substr($p_name,0,23);
             echo $l_p_name,"...";
?>


      </div>
      <div class="view-price">
        <?php echo "Rs.", number_format($show['p_price']);
        ?>
      </div>
      <div class="view-2">
      <div class="old-price">
        <?php 
        $old_price=$show['old_price'];
         if($old_price==0){
          echo"";
         }else{
          echo "Rs.",number_format($old_price);
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
<br><br>


<!--------->
 <!-- footer-->
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
<style>

   .h1-1{
    margin-top:50px;
    color: rgb(0,0,0,0,0.6);
    text-shadow:0px 2px 4px black;
    text-align:center;

    
    
   }
   

  </style>