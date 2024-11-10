<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  $title_id= $_GET['p_id'];
    include 'config.php';
  
  $title="SELECT * FROM categories where p_id='$title_id'";
  $run_title=mysqli_query($connect,$title);
  if(mysqli_num_rows($run_title)){
    while($show=mysqli_fetch_array($run_title)){
       echo $show['p_name'];
  
    }}?>
   
  
  </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="nav_bar.css">
    <link rel="icon" href="pictures/icon.png">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="mediaq.css">
    <link rel="stylesheet" href="items.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body id="body">
    <script>
      window.onload('load',function(){
{
        var body=document.getElementById("body")
        body.style.display="none";
      }
      })
    </script>


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
      <form action="search" class="search-box-1" method="get" enctype="multipart/fomr-data">
        <input type="text" placeholder="Type Something to Search..." name="search_name" required>
        <button type="submit" class="go-icon-1" name="search"><i class="fas fa-search"></i></button>
      </form>
      <button class="cart"  ><a href="cart.php" style="text-decoration:none; color:white;" class="ahref"><i class="fa-solid fa-cart-shopping"></i>
      <span style="color:white;font-size:10px;font-weight:bold;position:absolute;  left:20px; background:red; padding:5px;clip-path:circle();"><?php 
      if(isset($_SESSION['addcart'])){
        echo count($_SESSION['addcart']);}
        else{
          echo"0";}?></span></a></button>
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






  <?php

 
$p_id1=$_GET['p_id'];

 ?>
<br><br><br>
 <div class="view-image">

 <?php
 
 include 'config.php';
  
 $sql="SELECT * FROM categories where p_id='$p_id1'";
 $run=mysqli_query($connect,$sql);
 if(mysqli_num_rows($run)){
   while($show=mysqli_fetch_array($run)){
       $id=$show['p_id'];
       $p_name=$show['p_name'];
       $p_price=$show['p_price'];
       $p_category=$show['p_category'];
       $p_image=$show['p_image'];
       $p_info_1=$show['p_info_1'];
       $discount=$show['p_discount'];
       $p_brand=$show['p_brand'];
       
      ?>
      <div class="wrap">
         <div class="view-1">
           <div class="view-img" id="view-1">
     <?php $p_image= "<img src='uploads/".$show['p_image']."' id='img-1-12'>";
        echo $p_image;
      ?></div> </div>
      
     
      <div class="view-2"><h1 class="view-p-name" >
        <?php
         $p_name=$show['p_name'];
      echo $p_name; ?>

      </h1>
<div class="view-p-price">
       <?php 
       
       echo "Rs. ", number_format($show['p_price']);?><input type="hidden" id="price_value" value=<?php echo $show['p_price'];?>></div>
       <div class="old_price">
         <?php
         
           $old_price=$show['old_price'];
           if($old_price==0){
            echo"";

           }else{
            ?><h3 style="text-decoration:line-through; color:rgb(0,0,0,0.5); font-weight:bold; font-size:20px;"><?php echo "Rs.",number_format($old_price);?></h3><?php
           }
         ?>


       </div>
       <div class="discount">
        <?php if($discount==NULL){
              echo"";  
      
      }else{?>
        <div class="discount" style="font-size:20px; color:black;margin-left:-10px; font-weight:bold;">Discount : <span style=" color: orange;"><?php  echo $discount,"%" ?></span></div> <?php
      }
          
          ?>
   </div>
       
       <hr>
       <div class="brand">

        <?php 
        $brand=$show['p_brand'];
        if($brand=="Other"){
          echo"";
        }else{

        

        ?>Brand  :  <span style="color:rgb(0,0,0,0.7); font-size:30px; font-weight:bold;"><?php echo  ucfirst($brand) ?></span>
        <?php }?>
        
       </div>

       <h5 style="font-weight:bold;"> About this Product</h5>
       <h5><!-- info 1-->
         <?php
         $info_1=$show['p_info_1'];
         if($info_1==NULL){
           echo "";

         }else{?>
         <li><?php 
            echo $info_1;?></li><?php
         }
          ?>
         
         <br>
         <?php
         $info_2=$show['p_info_2'];
         if($info_2==NULL){
           echo "";

         }else{
           ?>
           <li><?php
            echo $info_2;?></li><?php
         }?>

         <br>
         <?php 
          
         $info_3=$show['p_info_3'];
         if($info_3==NULL){
           echo "";

         }else{
           ?>
           <li><?php
            echo $info_3;?></li><?php
         }?>
         <br>
         <?php 
          
         $info_4=$show['p_info_4'];
         if($info_4==NULL){
           echo "";

         }else{
           ?>
           <li><?php
            echo $info_4;?></li><?php
         }?><br>
         <?php 
          
          $info_5=$show['p_info_5'];
          if($info_5==NULL){
            echo "";
 
          }else{
            ?>
            <li><?php
             echo $info_5;?></li><?php
          }?><br>
          <?php 
          
          $info_6=$show['p_info_6'];
          if($info_6==NULL){
            echo "";
 
          }else{
            ?>
            <li><?php
             echo $info_6;?></li><?php
          }
       }}?>

       <h6 class="l-des" style="color:darkred;font-face:arial;">
        <b>
        Cash on Deleivery</b></h6>

        
          <u>More-details : 
            <b>
            <i>
            +94 777 143 322
            </i>
            </b>
          </u>
         

       
       <br>
       
    <?php










// Initialize the cart
if (!isset($_SESSION['cart'])) {
 $_SESSION['cart'] = array();
}


// Sample product data (you can replace this with your database queries)
$products = array(
 $id => array('id' =>$id, 'name' => $p_name, 'price' =>$p_price, 'image' => $p_image),

);

// Add a product to the cart
if (isset($_POST['add_to_cart'])) {
 $product_id = $_POST['product_id'];
 $quantity = $_POST['quantity'];

 if (isset($products[$product_id])) {
     $product = $products[$product_id];
     $product['quantity'] = $quantity;

     $_SESSION['addcart'][] = $product;

     ?><script>
        document.write=alert("item added to cart!");
     </script><?php
 }
}
// Remove a product from the cart
if (isset($_POST['remove_from_cart'])) {
$product_id_to_remove = $_POST['product_id_to_remove'];

$_SESSION['addcart'] = array_filter($_SESSION['addcart'], function($product) use ($product_id_to_remove) {
   return $product['id'] != $product_id_to_remove;
});
}
?>



 <table>
     
     <?php foreach ($products as $product_id => $product): ?>
     
     <?php endforeach; ?>
 </table>

  
  
 

 <?php 
 
  ?>
   
 
 <style>
  .form-1-1 {
   background:silver;
   display:flex;
    width:100%;
   padding:20px;
   flex-direction:column;
   justify-content:center;
   position:absolute;
   right:-20%;
    visibility:hidden;
   top:20%;
   

   

  }
  .open-form-1-1{
    visibility:visible;
    

  }
  h4.h5{
    color:red;
    width:100%;
  }
  form.form-1-1 input[type="text"]{
    display:block;
     height:3vh;
    background:none;
    border:none;
    outline:none;
    border-bottom:1px solid black;
    margin-bottom:20px;
     
  }
 </style>
 <div class="button-q" style="display:inline-flex; align-items:center;"> 
<button onclick="decrement()" style="width:50px;color:white;font-size:30px; fonr-weight:bold; background:linear-gradient(95deg,black,rgb(0,0,0,0.8));height:60px;margin:10px;">-</button> 
<input type="number" name="quantity" id="quantity1"   value=1 style="display:block; color:black; width:40px; height:50px; background:none; " readonly  > 
<button onclick="increment()" style="width:50px;font-size:30px; fonr-weight:bold; background:linear-gradient(190deg,black,rgb(0,0,0,0.8));height:60px; color:white;outline:none; margin:10px;">+</button>
</div>
      <form method="post" class="buy-btn"    >
            <div class="input-1-1">
                 <input type="hidden" name="product_id" value="<?= $product_id ?>">
                  
                 
                 <input type="hidden" name="quantity" id="quantity"   value=1 style="display:block; color:black; width:40px;  background:none; " readonly  > 
       
                 <div class="buttons-1-1">

                 <button type="submit" name="add_to_cart" class="addcart"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                
                       <button class="buy" id="buy1" name="buy1" onclick="buy12();" ><a href="checkout.php?p_id=<?php echo $id;?>" style=" text-decoration:none; padding:13px; padding-left:100px;padding-right:100px; margin-left:-100px;margin-right:-100px;"><i class="fa-regular fa-credit-card"></i> BUY </a> </button>
           
                       <script>
        var counterValue = 1;

        function increment() {
            counterValue++;
            updateCounter();
        }

        function decrement() {
            if (counterValue > 1) {
                counterValue--;
                updateCounter();
            }
        }

        function updateCounter() {
            document.getElementById("quantity").value = counterValue;
            document.getElementById("quantity1").value = counterValue;
        }
    </script>
           
                      </form>
                </form>
      </div>
         </div></div>
          
        <!--------=-------> 
      </div><?php
  
        
    


    ?>
      
    

    <hr>
    <div class="related-items">
      <h3 class="h3">Related Items</h3>
      
    <div class="container">
    <div class="row px-2 mt-4 gap-3" id="filterable-cards" style="width:100%;">
    <?php include 'config.php';
     $sql = "SELECT * FROM categories WHERE p_info_1 LIKE '%$p_info_1%'or p_info_2 LIKE '%$info_2%'|| p_info_3 LIKE '%$info_3%' or p_name LIKE '%$p_name%' OR p_price LIKE '%$p_price%'  OR p_category like '%$p_category%' or p_brand='$p_brand' ORDER BY  p_name ASC LIMIT 4";
     $run = mysqli_query($connect, $sql);
     
if(mysqli_num_rows($run)){
while($show=mysqli_fetch_array($run)){
  $pp_id=$show['p_id'];
  $status1=$show['status1'];
  if($status1=='available'){
    if($pp_id==$id){
      echo"";
    }else{

    

  ?>
      <!-- Images Filter Buttons Section -->
     
      <!-- Filterable Images / Cards Section -->
      
      <a href=".php?p_id=<?php echo $show['p_id'];?>" class="card p-0" data-name="nature">
         
       <?php
    
    echo "<img src='uploads/".$show['p_image']."' >";?>
     
      
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


        }}
}}?>
     
      </div>
      
    </div>



 </div>
       







    </div>
    <script>
  let container = document.getElementById("view-1");
  let img = document.getElementById("img-1-12");

  function onZoom(e) {
    let x = e.clientX - e.target.offsetLeft;
    let y = e.clientY - e.target.offsetTop;

    img.style.transformOrigin = `${x}px ${y}px`;
    img.style.transform = "scale(2.5)";
  }

  function offZoom() {
    img.style.transformOrigin = `center center`;
    img.style.transform = "scale(1)";
  }

  function checkWindowSize() {
    if (window.innerWidth > 600) {
      container.addEventListener("mousemove", onZoom);
      container.addEventListener("mouseover", onZoom);
      container.addEventListener("mouseleave", offZoom);
    } else {
      container.removeEventListener("mousemove", onZoom);
      container.removeEventListener("mouseover", onZoom);
      container.removeEventListener("mouseleave", offZoom);
    }
  }

  // Execute the check on page load and resize
  window.onload = checkWindowSize;
  window.onresize = checkWindowSize;
</script>

     
     <style>
      
      body{
        font-family:'roboto';

        
      }
   .wrap{
    margin-bottom: 200px;
     margin-top:100px;
    display: flex;
   }
   .input-1-1{
    display:block;
   }
   .buttons-1-1{
    display:flex;
    gap:20px;
   }
.related-items h3.h3{
  color:silver;
  font-family:'roboto';
  background:linear-gradient(10deg,black,rgb(0,0,0,0.6),rgb(0,0,0,0));
  padding:10px;
   
   
}
.related-items {
  margin-bottom:20px;
}
    
   
    .wrap .view-1 {
        
        display: inline-flex;
        margin-left:20px;
        margin-right: 30px;
        height:auto;
        overflow: hidden;


    }
    .wrap .view-1  img{
        width: 100%;
        height:60vh;
        border:10px solid transparent;
        
    }
    .view-p-price{
      display : block;
      font-weight:bold;
      font-size: 30px;
      margin-top: 20px;
      color: #211893;;
      font-family:sans-serif;
      
      
      

    }
     
   
    .view-p-name{
      font-size: 40px;
      font-weight:bold;
      font-family:ui-monospace;
       
       
    }
    .wrap .view-2{
       
      
          margin:10px;
        display: block;
         width:50%;
      
      
     
      
    }
    .view-2 h5{
      
      margin-top: 20px;
      font-weight:500;
      width:80%;
      font-size:15px;

    }
    .buttons-1-1 button.buy1{

       border: none;
       margin-top:20%;
       outline: none;
       padding: 10px;
      width: 100%;
      font-weight: bold;
      color: white;
      box-shadow: 0px 3px 5px black;
      font-size: 25px;
       background-color: #000d80;
       border-radius:0px;
       
        
    }
     
    .view-2 .buy-btn button.buy1:hover{
      background-color:  silver;
      color: black;
    }
    @media (max-width:750px){
      .wrap{
       
        flex-direction:column;
        margin-left:20px;
      }
      .wrap .view-1{
        display:flex;
        transform:scale(0.8);
        justify-content:center;
        
      }
      .wrap .view-1 img{
        width:100%;
        height:auto;
      }
      .buy-btn{
        display:block !important;
      }
      .buttons-1-1{
        display:block;
      }
      .view-2{
        width:100% !important;
         
      }
      .view-2 h5{
        width:100%;
      }
      .view-2 .view-p-name{
        font-size:25px;
      }
      
      
      
    }
    @media (max-width:400px){
      .wrap .view-1{
        margin:0;
      }
     
    }
   /* popup */

   .popup-1{
      width: 20%;
      height:  100vh;
      position: fixed;
      top:0%;
      right: -40%;
      
      z-index: 1;
      background-color: red;
   }

   .open-popup-1{
    
    right: 0%;
    transition: 0.8s;
   }
   .popup-1 form{
    margin-top: 20px;
    margin-bottom: 40px;
   }
   
   button.btn-location{
      background : none;
      border: none;
      outline: none;
   }
   .map{
      padding:30px;
      background-color: black;
      position: absolute;
      top: 30%;
      width: 100%;
     visibility: hidden;
      transform: scale(0.1);
      position: fixed;

    }
    .open-map{
      visibility: visible;
      transform: scale(1.0);
      transition: 0.5s;
    }
.comments{
  background-color: silver;
  padding:  10px;
  padding-bottom: 100px;
  margin: 10px;
  box-shadow: 0px 1px 3px black;
   
}
.comments h4.head1{
  background-color:white;
}

    </style>

   
   
   













 

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
       
     .navbar1{
      background-color: black;
     }
     .leaflet-container.leaflet-touch-drag.leaflet-touch-zoom{

      width: 100%;
      margin-left: -400px;
      height:60%; 
        display: none;
       left: 20px; 
       top:140px;
      
     }
       
       .open-map1{
        display: block;
       }
     
     
    .map-view{
      position: absolute;
      left: 10%;

    }
img.map-open{
  width:20%;
  height:20%;
  

}


h4.buy-class{
  text-align: center;
  margin-top: 10px;
  margin-bottom: 20px;
   


}
 
input#quantity.input-buy{
  border: none;
  outline: none;
  background: none;
  border-bottom: 1px solid white;
  margin-bottom: 30px;
  color: white;
  

   

}
.viewdata{
   
  background-image:url("./silver_foil_metallic_texture_background_0202.jpg");
  background-size:100% 100%;
  
  background-repeat:no-repeat;
  color:black;
  margin-left: 50%;
  visibility: hidden;
  position: fixed;
  right: -30%;
  top:0;
  z-index: 1;
   width: 20%;
   padding: 30px;
  
  
  
  
  
}
.open-viewdata{
  transition: 1.2s;
  visibility: visible;
  right:0;
  
  width: 20%;
  transition: 0.5s;
  
  
}
 

      .main-box{
        display: flex;
      }
.view{
  
  margin-top: 100px;
  margin-left: 40px;
  margin-right: 40px;
}
.buyy{
   
  margin-top: -100px;
  margin-left: 40%;
}
.view-img-1-1{
   width: 500px;
   height:80vh;
}
h1.h1-cart-1{
  font-size: 50px;
  font-weight: bold;
  font-family: sans-serif;
}
 
.add-to-cart-1{
  color:white;
  border: none;
  padding: 15px;
  font-size: 20px;
  font-weight: bold;
  background:#000d80;
  margin-top: 30px;
   
  box-shadow: 2px 4px 8px black;
   cursor: pointer;
 }
 .add-to-cart-1:hover{
  background-color: white;
  color: black;
 }
 .buy{
  
  color:white;
  border: none;
  padding: 15px;
  width: 100%;
  font-size: 20px;
  font-weight: bold;
  background-color: #610e0e;
  margin-top: 30px;
   cursor: pointer;
  box-shadow: 2px 4px 8px black;
 
   
 }
 .buy a{
  color:white;
 }
 .buy a:hover{
  color:black;
 }

 
 .addcart{
  background:#000d80;
  color:white;
  border:none;
  width:100%;
  margin-top:30px;
  padding:15px;
  font-weight:bold;
  font-size:20px;
  box-shadow:2px 4px 8px black;
 }
 .addcart:hover{
      background:white;
      color:black;
 }
 .buy:hover{
  background-color: white;
  color: black;
 }
 /*

responsive*/
@media (max-width:620px){
   .about-items{
    position: absolute;
    top:600px;
   }
  
}
@media (max-width:370px){
  .about-items{
    position: absolute;
    top:400px;
   }
   .viewdata{
     width:50%;
     position:sticky;
     margin-top:-110%;
      
     padding:30px;
   }
  .leaflet-container.leaflet-touch-drag.leaflet-touch-zoom {
    left:100%;
    transform:translate(-50%,50%);
        width:100%;
    height:50%;
  }
}
@media (max-width:260px){
  .about-items{
    position: absolute;
    top:300px;
   }
}
    </style>



<style>
  @media screen and (min-device-width: 370px) and (max-device-width: 600px){
  body{
        margin:0;
        padding:0;
     }
     .discription{
        background:linear-gradient(white,silver,black);
        border-top:0.1px solid black;
        margin:0;
        font-size:10px !important;
     }
      
     
     .discription img.footer-img1{
        width: 100%;
        height: 50%;
        position: absolute;
        margin-top: -60px;
        transform: scale(0.5);
    }
    
    .about-footer{
        margin-top:200px;
    }
    .customer-care{
        margin-top:250px;
    }
    .footer-contact {
        display:flex;
        justify-content:center;
        
        
        padding:30px;
        transform: translate(-5%,55%);

    }
    .footer-contact2 h6{
        font-size:15px;
    }
    .footer-contact2 h3{
        font-size:17px;
        color:red;
        
    }
    .h6-1{
        margin-top:40px;
        text-align:center;
    }
     
    .follow-icons{
        
        display:flex;
        justify-content:center;

    }
    p.i i{
         display:flex;
         justify-content:center;
    }
    

 
    
    

}
</style>
