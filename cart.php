<?php session_start();
error_reporting(E_ERROR | E_PARSE);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="icon" href="pictures/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="nav_bar.css">
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
  
  
  <br><br>
  <br>
<div class=" cart" >

<?php

// Implement a function to remove an item from the cart
function removeFromCart($productId) {
    // Start the session if it's not already started
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if the cart data is available in the session
    if (isset($_SESSION['addcart'])) {
        $cartItems = &$_SESSION['addcart'];

        // Find the cart item with the specified product ID
        $index = array_search($productId, array_column($cartItems, 'id'));
        if ($index !== false) {
            // Remove the item from the cart
            unset($cartItems[$index]);

            // Update the total amount
            $totalAmount = calculateTotalAmount($cartItems);

            // Update the session variable
            $_SESSION['addcart'] = $cartItems;

            // Return a success message
            return "Product with ID $productId removed from cart.";
        } else {
            // Return an error message
            return "Product with ID $productId not found in cart.";
        }
    } else {
        // Cart is empty, so no item to remove
        return "Cart is empty. Cannot remove product.";
    }
}

// Calculate the total amount of all items in the cart
function calculateTotalAmount($cartItems) {
    $totalAmount = 0;
    foreach ($cartItems as $cartItem) {
        $totalAmount += $cartItem['price'] * $cartItem['quantity'];
    }
    return $totalAmount;
}

// Start the session if it's not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the cart data is available in the session
if (isset($_SESSION['addcart'])) {
    $totalAmount = calculateTotalAmount($_SESSION['addcart']);
    $cart_items = $_SESSION['addcart'];

    // Handle form submission to remove an item
    if (isset($_POST['remove_from_cart'])) {
        $productIdToRemove = $_POST['product_id_to_remove'];
        $removeFromCartResult = removeFromCart($productIdToRemove);
        echo "<p>$removeFromCartResult</p>";
    }

    // Check if the total amount is 0
    if ($totalAmount == 0) {
        // Display "Empty" only?>
        <div class="error"> <h3> <?php echo "Empty";?></h3></div>
       
       <?php
    } else {
        // Display the cart table
        ?>

<form action="" method="post" enctype="multipart/form-data">
<button name="clearall" class="clearall"><i class="fa fa-trash"></i> Clear All</button></form>


<style>
  .clearall{
    background-color:red;
    position: fixed;
    padding:15px;
    border-radius: 10px;
    border:none;
    box-shadow:0px 0px 5px black;
    color:white;
    font-weight:bold;
    z-index:5;
  }
  .clearall:hover{
    opacity:0.8;
  }
</style>


<?php 

if(isset($_POST['clearall'])){
  
  clearCart();
  
}?>






    <div class="wrappper">
        <div class="project">
            <div class="wrap-1">
            <?php foreach ($cart_items as $cart_item): ?>
                <div class="shop">
                    <?php 
                    
                    include 'config.php';
                    $p_id= $cart_item['id'] ;
                      $sql="SELECT * FROM categories where p_id='$p_id'";
                      $run=mysqli_query($connect,$sql);
                      if(mysqli_num_rows($run)){
                        while($show=mysqli_fetch_array($run)){
                         
                          

                          





                          ?>
                      

                  <div class="box">
                <?php
                 echo "<img src='uploads/".$show['p_image']."'>";
                        }
                      }
                    
                    
                    ?>
                  <div class="content2">
                    <?php $val = $cart_item['price'];
$numbers = explode(',', $val);

// Join and convert to integer
$valConcatenated = implode($numbers);
$val2 = intval($valConcatenated);

 
 ?>
                     
                    <h3 id="cname1"><?php  $pname=$cart_item['name'];
                    if(strlen($pname)>30){
                      echo substr($pname,0,35),"...";
             }else{
              echo $pname;
             } ?></h3>
                    <h4>Rs.<?= $cart_item['price'] ?></h4>
                    <p class="unit">Quantity : <?= $cart_item['quantity'] ?>Qty</p>
                    <p class="unit">Total: Rs.<?= 
                    
                    $total12=$val2 * $cart_item['quantity']?>
                    <?php $total13= $totalAmount;?>
                     </p>
                     <script>
                      var cname=document.getElementById("cname1");
                      
                     </script>
                    
                        <form method="post">
                            <input type="hidden" name="product_id_to_remove" value="<?= $cart_item['id'] ?>">
                            <button type="submit" name="remove_from_cart" class="remove-cart"><p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></p></button>
                        </form>
                        </div>
                        </div>
            </div>
            <?php $p_name=$cart_item['name'];
             
            ?>
            <?php endforeach; ?>
            </div>
            
             <div class="right-bar">
				 <p><span>Subtotal</span> <span>Rs. <?= $total13 ?></span></p>
			       <hr>
                   <p><span>
                    Delivery : Standard Home Delivery
                   </span></p>
                    
				    
				   <hr>
				    <p><span>Shipping</span> <span>Rs. 350</span></p>
				     <hr>
             <p><span>Total</span> <span>Rs. <?= $total13 +350 ?> </span></p>
            <div class="cust-details">
              <h3 style="text-align:center; padding:10px;">Enter Your details</h3>
              <form action="" method="post" enctype="mutipart/form-data">
                <span>Name : </span>
                <input type="text" name="C_name"  require><br>
                <span>Contact No.: </span>
                <input type="number" name="C_phone" require><br>
                <span>Address : </span>
                <input type="text" name="C_address" require><br>
                
                <button name="checkout"><i class="fa fa-shopping-cart"></i>Checkout</button>
			       
              </form>

             </div>
				   
          </div>

                 
                
             
            </div>
        </div>

        <?php
    }
} else {
    ?><div class="error"><h3><?php echo "Your cart is empty.";?></h3>
    </div>
    <?php
 
    




}
 
            
            ?>
 





<!-- code for clear cart to placeorder-->
<?php

// Your existing PHP code

// Handle checkout process


if (isset($_POST['checkout'])) {
  // Clear the cart and store the result in $clear
  clearCart();
  $clear = clearCart();

  if ($clear=true) {
    // Process order details
    include 'config.php';

    $C_name = $_POST['C_name'];
    $C_Phone = $_POST['C_phone'];
    $C_Address = $_POST['C_address'];
    $Date = date('Y-m-d H:i:s');

    $totalAmount = 0;
foreach ($cart_items as $cart_item) {
  
  $p_quantity = $cart_item['quantity'];

  $p_price = $cart_item['price'];
   
  
  // Join and convert to integer
   

  $p_total = $p_price * $p_quantity;
  $totalAmount += $p_total;
}
    


    $sql = "INSERT INTO customer(c_name,c_Phone,c_Address)values('$C_name','$C_Phone','$C_Address')";
    $run = mysqli_query($connect, $sql);
    if ($run) {
      $C_ID = mysqli_insert_id($connect);
      

      $sql2 = "INSERT INTO orders(`C_ID`,`O_Date`,`status`,`Total_Price`,`delivered`)values('$C_ID','$Date','new','$totalAmount','Pending')";
      $run2 = mysqli_query($connect, $sql2);
      $oid = mysqli_insert_id($connect);

      if ($run2) {
        foreach ($cart_items as $cart_item) {

           
          
           
          

          $p_id = $cart_item['id'];
          $p_name = $cart_item['name'];
          $p_price = $cart_item['price'];
          $p_quantity = $cart_item['quantity'];
          $image=$cart_item['image'];
          $p_total = $p_price * $p_quantity;
           
          
          $sql = "SELECT COUNT(O_ID) FROM orders WHERE O_ID = '$oid'";
          $result = mysqli_query($connect, $sql);
          $row = mysqli_fetch_array($result);
          $orderExists = $row[0] > 0;

          if($orderExixts=true){

          $sql3 = "INSERT INTO bill(O_ID,P_ID,TotalAmount,p_name,p_price,quantity)values('$oid','$p_id','$p_total','$p_name','$p_price','$p_quantity' )";
          $run3 = mysqli_query($connect, $sql3);

         
        }}   
      } else {
        echo "<script>alert('Error inserting order record: ' . mysqli_error($connect));</script>";
      }
    } else {
      echo "<script>alert('Error inserting customer record: ' . mysqli_error($connect));</script>";
    }

    // Close the database connection
    mysqli_close($connect);
    echo"<script>document.write=alert('Thank You for shopping with us
    will  give out prompt services to You.'); </script>";
    echo "<script> location.href='index.php'; </script>";
    if ($run && $run2 && $run3) {
      echo "<script>alert('Order placed successfully');</script>";
    } else {
      echo "<script>alert('Error placing order. Please try again later.');</script>";
    }
  } else {
    echo "<script>alert('Error clearing cart');</script>";
  }
}

// Your existing PHP code

// Function to clear the cart
function clearCart() {
  // Start the session if it's not already started
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  // Clear the cart session
  unset($_SESSION['addcart']);
}

// Your existing PHP code

?>




<!--
<div class="cart-details">
     
        <h2>Cart Details</h2>
        <ul>
         
            <?php foreach ($cart_items as $cart_item): ?>
                <li>
                <p>id: <?php echo $cart_item['id']; ?></p>
                     <p>Name: <?php echo $cart_item['name']; ?></p>
                    <p>Price: Rs.<?php echo $cart_item['price']; ?></p>
                    <p>Quantity: <?php echo $cart_item['quantity']; ?> Qty</p>
                    <p>image: <?php echo $cart_item['image']; ?> </p>
                    <p>Total: Rs.<?php echo $cart_item['price'] * $cart_item['quantity']; ?></p>

                </li>
            <?php endforeach; ?>
        </ul>
        <p>Total Amount: Rs.<?php echo $totalAmount; ?></p>
    
</div>


</div>-->

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

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
.cart{
  margin:10px;
}
.cust-details{
  border-top:2px solid black;
 padding-left:10px;
 padding-right:10px;
 margin-left:-20px;
 margin-right:-20px;

}
.cust-details form input[type="text"],input[type="number"]{
   background:none;
   border:none;
   outline:none;
   border-bottom:1px solid black;
   margin-bottom:5px; 
}
.cust-details span{

  font-size:15px;
  font-weight:900;
  padding:10px;
}



body {
	background: linear-gradient(black,rgb(0,0,0,0));
	font-family: montserrat;
    background-repeat:no-repeat;
   background-size:100% 100%;  
    
  }
.wrappper {
	max-width: 1000px;
	margin: 0 auto;
    margin-top:100px;
}
.wrappper h1 {
	padding: 20px 0;
	text-align: center;
	text-transform: uppercase;
}
.project {
	display: flex;
}
.wrap-1{
    display:block;
    width:100%;
}
.shop {
	 display:block;
}
.box {
	display: flex;
	width: 100%;
	height: 200px;
	overflow: hidden;
	margin-bottom: 20px;
	background: #fff;
	transition: all .6s ease;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.box:hover {
	border: none;
	transform: scale(1.01);
}
.box img {
	width: 100px;
	height: 100px;
    margin:30px;
	object-fit: cover;
}
.error{
     
     
     
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
    margin-top:100px;
    margin-bottom: 100px;
    
}
 
.content2 {
	padding: 20px;
	width: 100%;
	position: relative;
}
.content2 h3 {
	margin-bottom: 20px;
}
.content2 h4 {
	margin-bottom: 30px;
  color:red;
  font-size:20px;
}
.btn-area {
	position: absolute;
	bottom: 20px;
	right: 20px;
	padding: 10px 25px;
	background-color: black;
	color: white;
	cursor: pointer;
	border-radius: 5px;
}
.btn-area:hover {
	background-color: rgb(0,0,0,0.8);
	color: #fff;
	font-weight: 600;
}
.unit input {
	width: 40px;
	padding: 5px;
	text-align: center;
}
.btn-area i {
	margin-right: 5px;
}
.right-bar {
	flex: 50%;
	 
	margin-left: 20px;
	padding: 20px;
	height: 550px;
	border-radius: 5px;
	background: #fff;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.right-bar hr {
	margin-bottom: 25px;
}
.right-bar p {
	display: flex;
	justify-content: space-between;
	margin-bottom: 20px;
	font-size: 20px;
}
.right-bar button {
	background: blue;
	color: #fff;
	text-decoration: none;
	display: block;
  width:100%;
  border:none;
  outline:none;
	text-align: center;
	height: 40px;
  margin-top:40px;
	line-height: 40px;
	font-weight: 900;
}
.right-bar i {
	margin-right: 15px;
}
.right-bar button:hover {
	background-color:  #76bfb6;
}
@media screen and (max-width: 700px) {
	.content2 h3 {
		margin-bottom: 15px;
	}
	.content2 h4 {
		margin-bottom: 20px;
	}
	.btn2 {
		display: none;
	}
	.box {
		height: 200px;
   display:flex;
	}
	.box img {
		height: 150px;
		width: 200px;
	}
}
@media screen and (max-width: 900px) {
	.project {
		flex-direction: column-reverse;
	}
	.right-bar {
		margin-left: 0;
		margin-bottom: 20px;
	}
}
@media screen and (max-width: 1250px) {
	.wrappper {
		max-width: 95%;
	}
}
@media (max-width:500px){
  .wrappper{
    max-width:100%;
    font-size:15px;
     
  }
  .box{
    height:25vh;
    padding:-10px;
    transform:auto;
  }
  .box img{
    margin-left:1px;
    margin-right:-20px !important;
    height:20vh;
    margin-right:5px;
    transform:scale(0.7);
  }
  .content-2{
    margin-left:4px;
    padding-right:4px;
    
  }
  .wrappper h3{
    font-size:10px;
    margin-bottom:-5px;
  }
  .wrappper h4{
    font-size:15px;
    margin-top:2px;
    color:orange;
  }
  p.unit{
    color:rgb(0,0,0,0.7);
    margin-top:-10px;
    margin-left:-20px;
    font-weight:bold;
    padding-bottom:5px;
    transform:scale(0.8);
  }
  .btn-area{
    bottom:0;
     height:5vh;
     right:10px;
     margin-bottom:5px;
  }
}
 
 
</style>